window.Vue = require("vue");
import VueRouter from "vue-router";
import axios from "axios";
window.axios = axios;

Vue.use(VueRouter);

require("./bootstrap");

window.axios.defaults.headers.common = {
    "X-Requested-With": "XMLHttpRequest",
    "X-CSRF-TOKEN": document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content")
};

// register components (main menu)
const char_counter = Vue.component("word-counter",
    require("./components/charCounter.vue").default );

const keyword_density_finder = Vue.component("keyword-density-finder",
    require("./components/keyword_density_finder.vue").default );

// const open_graph_generator = Vue.component("open-graph-generator",
//     require("./components/open-graph-generator.vue").default );

// const twitter_card_generator = Vue.component("twitter-card-generator",
//     require("./components/twitter-card-generator.vue").default );

// const meta_tags_generator = Vue.component("meta-tags-generator",
//     require("./components/meta-tags-generator.vue").default );

// const schema_generator = Vue.component("schema-generator",
//     require("./components/schema-generator.vue").default );

// // schema types
// const aggregate_offer = Vue.component("aggregateoffer", 
//     require("./components/schema-types/aggregate-offer.vue").default );

// const aggregate_rating = Vue.component("aggregaterating", 
//     require("./components/schema-types/aggregate-rating.vue").default );

// const news_article = Vue.component("newsarticle", 
//     require("./components/schema-types/news-article.vue").default );

// const eventschema = Vue.component("eventschema", 
//     require("./components/schema-types/event.vue").default );

// const music_album = Vue.component("music_album", 
//     require("./components/schema-types/music-album.vue").default );

// const music_playlist = Vue.component("music_playlist", 
//     require("./components/schema-types/music-playlist.vue").default );

// const organization = Vue.component("organization", 
//     require("./components/schema-types/organization.vue").default );

// const product_offer = Vue.component("product_offer", 
//     require("./components/schema-types/product-offer.vue").default );

// const review = Vue.component("review", 
//     require("./components/schema-types/review.vue").default );

// const software_application = Vue.component("software_application", 
//     require("./components/schema-types/software-application.vue").default );

// const videoschema = Vue.component("videoschema", 
//     require("./components/schema-types/videoschema.vue").default );

// const person = Vue.component("person", 
//     require("./components/schema-types/person.vue").default );

// const recipe = Vue.component("recipe", 
//     require("./components/schema-types/recipe.vue").default );

// const restaurant = Vue.component("restaurant", 
//     require("./components/schema-types/restaurant.vue").default );

// const site_seo_checker = Vue.component("site-seo-checker", 
//     require("./components/site-seo-checker/site_seo_checker.vue").default );



const routes = [
    {
        path: "/",
        component: char_counter
    },

    {
        path: "/keyword-density-finder",
        component: keyword_density_finder
    },

    // {
    //     path: "/open-graph-generator",
    //     component: open_graph_generator
    // },

    // {
    //     path: "/twitter-card-generator",
    //     component: twitter_card_generator
    // },

    // {
    //     path: "/meta-tags-generator",
    //     component: meta_tags_generator
    // },

    // {
    //     path: "/schema-generator",
    //     component: schema_generator
    // },

    // {
    //     path: "/site-seo-checker",
    //     component: site_seo_checker
    // }
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
        }

    }
});
