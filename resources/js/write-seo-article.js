window.Vue = require("vue");
import VueRouter from "vue-router";
import axios from "axios";
// window.axios = axios;

import CKEditor from '@ckeditor/ckeditor5-vue';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
// import word_count from '@ckeditor/ckeditor5-word-count';



Vue.use( CKEditor );

Vue.use(VueRouter);

require("./bootstrap");

window.axios.defaults.headers.common = {
    "X-Requested-With": "XMLHttpRequest",
    "X-CSRF-TOKEN": document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content")
};

// register components

const ckeditor = Vue.component(
      "ckeditor2",
    require("./components/write-seo-article/ckeditor.vue").default
);


const routes = [
    {
        path: "/",
        component: ckeditor
    }
];

// Vue Router Object
const router = new VueRouter({
    mode: "history",
    routes
});

// Vue code
let app = new Vue({
    el: "#app",
    router,

    data: {
        text_in_textarea: "",

        characters_with_whitespaces: 0,
        characters_without_whitespaces: 0,
        character_count: 0,
        words_count: 0,
        sentence_count: 0,
        paragraph_count: 0,


        //sidebar content
        url_field:'',
        url_field_error:'',
        url_field_success:'',
        description_field:'',
        description_field_length:0,
        title_field:'',
        keyword_in_title:'',
        keyword_in_url:'',

        domain_name_field:'',
        total_links:0,
        internal_links:0,
        external_links:0,

        Keyword_density_field:"",
        Keyword_density_percentage: 0,
        no_of_Keyword_appear: 0,
        keyword_in_description: '',
        keyword_in_content: '',
        keyword_in_subheading: '',
        keyword_in_first_ten_percent_content: '',
        keyword_at_start: 0,
 

        //footer content
        current_year:0,
        typingTimer:null,


        plain_text:'',
        axios_error:'',

        editor: ClassicEditor,
        editorData: '',

        editorConfig: {
        // plugins: [
                    //    // words_count
                    // ],

                    // toolbar: {
                    //     items: [
                    //         'bold',
                    //         'italic',
                    //         'link',
                    //         'undo',
                    //         'redo'
                    //     ]
                    // }          
                }},



  created:function(){
        let d = new Date();
        this.current_year = d.getFullYear();
    },

    methods: {

        html_to_text(){
            // console.log('html_to_text');
               //timer identifier
                clearTimeout(this.typingTimer);
                this.typingTimer = setTimeout(this.get_plain_text, 500);
        },

        get_plain_text(){
            axios.post('/html-to-text', {ed_data:this.editorData})
            .then(res => {
                this.plain_text = res.data[0];
                this.text_in_textarea = this.plain_text;
                this.text_length();

            });

            // this.text_in_textarea = this.plain_text;


        },
  
        text_length: function() {
            // console.log('text length',this.text_in_textarea);
            // return;


                 //keyword in title
            if (this.title_field !== '' && this.Keyword_density_field !== '') {
                var regex = new RegExp("\\b"+this.Keyword_density_field+"\\b"); // create regx

                if(this.title_field.search( regex ) >= 0){

                    this.keyword_in_title = 1;

                }else{

                this.keyword_in_title = "";
                

                }

            }


        

                 //links in text
            if (this.editorData !== '') {

               var get_total_links = this.editorData.match(/href="([^\'\"]+)/g);

               if(get_total_links){

                   this.total_links = get_total_links.length;

                   if (this.domain_name_field != '') {
                   

                    var remove_href = get_total_links.map(link=>{
                    return link.replace('href="', '');
                   });

                   var remove_https = remove_href.map(link =>{
                    return link.replace('https://', '');
                   });
                   var remove_com = remove_https.map(link=>{
                    return link.replace('.com', '');
                   });

                   var get_internal_links = remove_com.filter( link => link == this.domain_name_field);

                   this.internal_links = get_internal_links.length;
                   this.external_links = this.total_links - this.internal_links;

                   }


               }

            }else{
                this.total_links = 0;
                this.internal_links = 0;
                this.external_links = 0;
                this.keyword_in_content = '';

            }


            this.characters_with_whitespaces = this.text_in_textarea
            .replace(/[\r\n\x0B\x0C\u0085\u2028\u2029]+/g, "")
            .trim().length;

            this.characters_without_whitespaces = this.text_in_textarea
                .replace(/[\r\n\x0B\x0C\u0085\u2028\u2029]+/g, " ")
                .replace(/ /g, "")
                .trim();

            this.character_count = this.characters_without_whitespaces.length;

            let words = this.text_in_textarea.trim();
            this.words_count = (words.match(/\b\S+\b/g) || []).length;
            this.sentence_count = words.split(/[\.\!]+\s*|\n+\s*/).length - 1;


            let p = words.split(/(?:\r\n){2,}/);
            let para_arr = p[0].split(/\.\s*\n/g);

            this.paragraph_count = para_arr.length;

            //keyword in 1st 10% of content
            if (this.text_in_textarea != '' && this.Keyword_density_field != '') {
                var ten_percent = 0.2 * this.words_count;
                var ten_percent_content = this.text_in_textarea.substring(0, ten_percent);

                if (ten_percent_content.search(this.Keyword_density_field) != -1) {
                    this.keyword_in_first_ten_percent_content = 1;
                }else{
                    this.keyword_in_first_ten_percent_content = '';
                    
                }
                
                
            }else{
                    this.keyword_in_first_ten_percent_content = '';
                
            }

            //Keyword Density

            if (this.Keyword_density_field != "" && this.text_in_textarea != "" ) {
              
                var regex = new RegExp(this.Keyword_density_field, "gi"); // create regx

                let checkWord = this.text_in_textarea.match(regex);
                if (checkWord) {

                    this.no_of_Keyword_appear = checkWord.length;
                    this.Keyword_density_percentage = ((checkWord.length / this.words_count) * 100 ).toFixed(2);
                    this.keyword_in_content = 1;

                } else {

                    this.Keyword_density_percentage = 0;
                    this.no_of_Keyword_appear = 0;
                    this.keyword_in_content = '';
                    
                }
            }


            // focus keyword found in subheading
            if (this.Keyword_density_field != "" && this.editorData != "") {

       if (this.text_in_textarea.startsWith(this.Keyword_density_field)) {
        this.keyword_at_start = 1;
       }else{
        this.keyword_at_start = 0;
       }
            var all_headings = this.editorData.match(/<(h[2-4])>([^<>]+)<\/\1>/g);
            var regex_heading = new RegExp("\\b"+this.Keyword_density_field+"\\b"); // create regx

                if (all_headings && all_headings.length > 0) {
                var keyword_found_in_headings = all_headings.filter(heading => (heading.match(regex_heading)));

                if (keyword_found_in_headings && keyword_found_in_headings.length >= 1) {
                this.keyword_in_subheading = 1;
                    // console.log(keyword_found_in_headings);
                this.keyword_in_content = 1;


                }else{
                this.keyword_in_subheading = '';
                // this.keyword_in_subheading = 1;


                }
                // console.log(keyword_found_in_headings);   

            }else{
                this.keyword_in_subheading = '';
                this.keyword_in_content = '';

                
                }
        }

            // focus keyword found in url
            if (this.url_field != '' && this.Keyword_density_field != '') {

                var keyword_found_in_url = this.url_field.search(this.Keyword_density_field); 
                if (keyword_found_in_url != -1) {
                    this.keyword_in_url = 1;

                }else{
                    this.keyword_in_url = '';
                    
                }            
            }

            // focus keyword found in Description
            if (this.description_field != '' && this.Keyword_density_field != '') {

                var keyword_found_in_description = this.description_field.search(this.Keyword_density_field); 
                if (keyword_found_in_description != -1) {
                    this.keyword_in_description = 1;

                }else{
                    this.keyword_in_description = '';
                    
                }           
            }

            // if domain name field is empty
            if (this.domain_name_field == '') {
                this.internal_links = 0;
                this.external_links = 0;               
            }

            //check if content is empty then keyword density id 0
            if (this.Keyword_density_field == "" || this.text_in_textarea == "" ) {
                this.Keyword_density_percentage = 0;
                this.no_of_Keyword_appear = 0;
                this.keyword_in_title = "";
               
            }

            //if content length is 0 then words are 0
            if (this.character_count == 0 || this.text_in_textarea == "") {
                this.words_count = 0;
                this.sentence_count = 0;
                this.paragraph_count = 0;
                this.characters_without_whitespaces = 0;
                this.Keyword_density_percentage = 0;
                this.keyword_in_content = '';
                return;
            }
         
        },

        validate_slug(){

            if(this.url_field != "" && (/^[a-z0-9]+(?:-[a-z0-9]+)*$/).test(this.url_field) == false){

                this.url_field_error = 'don\'t include spaces or symbols at the end';
                this.url_field_success = "";

            }else if(this.url_field != "" && (/^[a-z0-9]+(?:-[a-z0-9]+)*$/).test(this.url_field) == true){

                this.url_field_success = 'Good, url is valid!';
                this.url_field_error = "";

            }else{

                this.url_field_error = "";
                this.url_field_success = "";
            }
        },
        validate_description(){

            if (this.description_field != '') {
                this.description_field_length = this.description_field.trim().length;
            }else{
                this.description_field_length = 0;
            }
        },

 
    }
});
