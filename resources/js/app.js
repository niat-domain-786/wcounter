window.Vue = require("vue");
import VueRouter from "vue-router";
import axios from "axios";
window.axios = axios;
Vue.use(VueRouter);
// require("./bootstrap");

// window.axios.defaults.headers.common = {
//     "X-Requested-With": "XMLHttpRequest",
//     "X-CSRF-TOKEN": document
//         .querySelector('meta[name="csrf-token"]')
//         .getAttribute("content")
// };

// register components (main menu)
const char_counter = Vue.component("word-counter", require("./components/charCounter.vue").default );
const char_counter_pdf = Vue.component("word-counter-pdf", require("./components/charCounterPdf.vue").default );
const keyword_density_finder = Vue.component("keyword-density-finder", require("./components/keyword_density_finder.vue").default );

const routes = [
    {
        path: "/",
        component: char_counter
    },

    {
        path: "/keyword-density-finder",
        component: keyword_density_finder
    },

    {
        path: "/keyword–density–calculator–tool",
        component: char_counter
    },
];

// Vue Router Object
const router = new VueRouter({
    mode: "history",
    routes
});

// Vue object
let app = new Vue({
    el: "#app",
    router,

  //    mounted:function(){
  //       this.text_length() //method1 will execute at pageload
  // },

    data: {
        
        text_in_textarea: "",

        characters_with_whitespaces: 0,
        characters_without_whitespaces: 0,

        character_count: 0,
        words_count: 0,
        sentence_count: 0,
        paragraph_count: 0,

        Keyword_density_field: "",
        Keyword_density_percentage: 0,
        no_of_Keyword_appear: 0,

        //Scane site SEO
        domain_url:'',

        //footer content
        current_year:0,

    },

  created:function() {

        let d = new Date();
        this.current_year = d.getFullYear();
    },

    methods: {
  
        text_length: function() {
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

            if (this.Keyword_density_field != "" && this.text_in_textarea != "") {

                var regex = new RegExp(this.Keyword_density_field, "gi"); // create regx

                let checkWord = this.text_in_textarea.match(regex);
                if (checkWord) {

                    this.no_of_Keyword_appear = checkWord.length;
                    this.Keyword_density_percentage = ((checkWord.length / this.words_count) * 100)
                    .toFixed(2);

                } else {
                    
                    this.Keyword_density_percentage = 0;
                    this.no_of_Keyword_appear = 0;
                }
            }
            //console.log("density", this.Keyword_density_field);

            if (this.character_count == 0 || this.text_in_textarea == "") {
                this.words_count = 0;
                this.sentence_count = 0;
                this.paragraph_count = 0;
                this.characters_without_whitespaces = 0;
                this.Keyword_density_percentage = 0;
            }

            if (this.Keyword_density_field == "" || this.text_in_textarea == "") {
                this.Keyword_density_percentage = 0;
                this.no_of_Keyword_appear = 0;
            }  
        },

        text_length_in_pdf:function(){
            axios.get('/getTxt').then(res => {
                console.log(res.data);
                this.text_in_textarea = res.data;
                // this.words_count  = res.data.words;

                this.text_length();
            }
              ).catch(error =>  console.log(error));
        },
    }
});
