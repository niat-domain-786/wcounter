<template>
<div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
              <!--   <h4 class="card-title">Schema/JSON-LD Generator</h4>
                <hr> -->
                <div>

                <h3>Select Schema Type:&nbsp; </h3>
                <form class="form-group">    
                    
                    <select  class="px-4 py-2" name="schema_type" v-on:change="changeRoute($event)" style="border:1px solid #aaa; border-radius:25px;">
                        <option value="aggregate_offer" >Aggregate Offer</option>
                        <option value="aggregate_rating" >Aggregate Rating</option>
                        <option value="article" >Article</option>
                        <option value="event" >Event</option> 
                        <option value="music_album" >Music Album</option>
                        <option value="music_playlist" >Music Playlist</option>
                        <option value="organization" >Organization</option>
                        <option value="person" >Person</option>
                        <option value="product_offer" >Product Offer</option>
                        <option value="recipe" >Recipe</option>
                        <option value="restaurant" >Restaurant</option>
                        <option value="review" >Review</option>
                        <option value="software_application" >Software Application</option>
                        <option value="video" >Video</option>
                        </select>
            
                    
                </form>
                    
                </div>
            
            </div>
        </div>
    </div>
<aggregateoffer v-if="aggregate_offer == 1" ></aggregateoffer>
<aggregaterating v-if="aggregate_rating == 1" ></aggregaterating>
<newsarticle v-if="article == 1" ></newsarticle>
<eventschema v-if="event == 1" ></eventschema>
<music_album v-if="music_album == 1" ></music_album>
<music_playlist v-if="music_playlist == 1" ></music_playlist>
<organization v-if="organization == 1" ></organization>
<product_offer v-if="product_offer == 1" ></product_offer>
<recipe v-if="recipe == 1" ></recipe>
<restaurant v-if="restaurant == 1" ></restaurant>
<review v-if="review == 1" ></review>
<software_application v-if="software_application == 1" ></software_application>
<person v-if="person == 1" ></person>
<videoschema v-if="video == 1" ></videoschema>

</div>
</template>

<script>
    export default{
        data(){

            return{
                //schema types
                aggregate_offer:1,
                aggregate_rating: 0,
                article:0,
                event:0, 
                music_album:0,
                music_playlist:0,
                organization:0,
                person:0,
                product_offer:0,
                recipe:0,
                restaurant:0,
                review:0,
                software_application:0,
                video:0,
            }
        },

        methods:{

              changeRoute(event) {
                Object.assign(this.$data, this.$options.data.call(this));
                this.['aggregate_offer'] = 0;
                this.$parent.show_textarea = 0;
                this.[event.target.value] = 1;
                // console.log(this.[event.target.value]);             
                }
            }
        }
    
</script>

