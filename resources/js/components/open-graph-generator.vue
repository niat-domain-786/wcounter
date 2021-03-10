<template>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title py-3">Open Graph Generator</h3>
                    <!-- <hr> -->
                   <!--  <p class="card-description">
                        Generate open graphs
                    </p> -->
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input
                                type="text"
                                class="form-control"
                                
                                v-model="title"
                            />
                        </div>
                        <div class="form-group">
                            <label for="site_name">Site Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="site_name"
                                
                                v-model="site_name"
                            />
                        </div>
                        <div class="form-group">
                            <label for="site_url">Site/Page Url</label>
                            <p
                                v-text="site_url_error"
                                class="text-danger py-2"
                            ></p>

                            <input
                                type="url"
                                class="form-control"
                                id="site_url"
                                
                                v-model="site_url"
                                v-on:input="validateUrl"
                            />
                        </div>
                        <div class="form-group">
                            <label for="type_of_metatags">Select Type: &nbsp;</label>
                            <select
                                
                                id="type_of_metatags"
                                v-model="type"
                                style="padding:5px 20px; border-radius:24px; border:1 px solid #aaa;"
                            >
                                <option value="">--select--</option>
                                <option value="article">Article</option>
                                <option value="book">Book</option>
                                <option value="books.author"
                                    >Book Author</option
                                >
                                <option value="books.genre">Book Genre</option>
                                <option value="business.business"
                                    >Business</option
                                >
                                <option value="fitness.course"
                                    >Fitness Course</option
                                >
                                <option value="music.album">Music Album</option>
                                <option value="music.musician"
                                    >Music Musician</option
                                >
                                <option value="music.playlist"
                                    >Music Playlist</option
                                >
                                <option value="music.radio_station"
                                    >Music Radio Station</option
                                >
                                <option value="music.song">Music Song</option>
                                <option value="object"
                                    >Object (Generic Object)</option
                                >
                                <option value="place">Place</option>
                                <option value="product">Product</option>
                                <option value="product.group"
                                    >Product Group</option
                                >
                                <option value="product.item"
                                    >Product Item</option
                                >
                                <option value="profile">Profile</option>
                                <option value="quick_election.election"
                                    >Election</option
                                >
                                <option value="restaurant">Restaurant</option>
                                <option value="restaurant.menu"
                                    >Restaurant Menu</option
                                >
                                <option value="restaurant.menu_item"
                                    >Restaurant Menu Item</option
                                >
                                <option value="restaurant.menu_section"
                                    >Restaurant Menu Section</option
                                >
                                <option value="video.episode"
                                    >Video Episode</option
                                >
                                <option value="video.movie">Video Movie</option>
                                <option value="video.tv_show"
                                    >Video TV Show</option
                                >
                                <option value="video.other">Video Other</option>
                                <option value="website">Website</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="no_of_pages">Image URL</label>
                            <p
                                v-text="image_url_error"
                                class="text-danger py-2"
                            ></p>

                            <input
                                type="url"
                                class="form-control"
                                id="image"
                                v-model="image"
                                v-on:input="validateUrl"
                            />
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea
                                name="description"
                                cols="40"
                                rows="20"
                                class="form-control"
                                
                                v-model="description"
                            ></textarea>
                        </div>
                        <!-- 
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button> -->
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Result</h4>
                    <p class="card-description">
                        Copy and paste it in the
                        <strong>&lt;head&gt;</strong> section.
                    </p>

                    <textarea
                    class="form-control result"
                        ref="meta_tags_result"
                        cols="50"
                        rows="10"
                        id="result"
                        readonly
                    >

    <!-- facebook openGraph -->

    &lt;meta property="og:title" content="{{ title }}"&gt;
    &lt;meta property="og:site_name" content="{{ site_name }}"&gt;
    &lt;meta property="og:url" content="{{ site_url }}"&gt;
    &lt;meta property="og:type" content="{{ type }}"&gt;
    &lt;meta property="og:image" content="{{ image }}"&gt;
    &lt;meta property="og:description" content="{{ description }}"&gt;

</textarea>
                    <div class="form-group">
                        <button
                            class="btn btn-primary"
                            style="border-radius:2px;"
                            v-on:click="copy_meta_tags"
                        >
                            Copy Code
                        </button>
                        <!--  <button  class="btn btn-primary btn-sm px-3" style="border-radius:2px;" v-on:click="enable_loader" >Preview</button> -->
                    </div>
                    <hr />
                    <div class="form-group">
                        <!-- card preview -->
                        <div class="card" width="80%">
                            <img
                                v-if="image == ''"
                                class="card-img-top"
                                src="https://via.placeholder.com/100"
                                alt="Card image cap"
                            />
                            <img
                                v-if="image != ''"
                                class="card-img-top"
                                v-bind:src="image"
                                alt="Card image cap"
                            />
                            <div class="card-body">
                                <h4 v-if="title == ''" class="card-title">
                                    Your Title Here
                                </h4>
                                <h4 v-if="title != ''" >
                                    {{ title }}
                                </h4>
                                <p v-if="description == ''" class="card-text">
                                    Your Description - A brief description of
                                    the content, usually between 2 and 4
                                    sentences. This will displayed below the
                                    title of the post on Facebook.
                                </p>
                                <p v-if="description != ''" class="card-text">
                                    {{ description }}
                                </p>
                                <hr />
                                <div>
                                    Test Your Link -
                                    <a v-bind:href="site_url">{{
                                        site_name
                                    }}</a>
                                </div>
                            </div>
                        </div>
                        <!-- /card preview -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            title: "",
            image: "",
            site_name: "",
            site_url: "",
            description: "",
            type: "",
            site_url_error: "",
            image_url_error: ""
        };
    },
    methods: {
        updatemeta: function() {
            //
        },

        enable_loader: function() {
            this.loader = !this.loader;
        },
        copy_meta_tags: function() {
            this.$refs.meta_tags_result.select();
            document.execCommand("copy");
        },

        validateUrl: function() {
            // var expression = /[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)?/gi;
            var expression = /(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})/gi;
            var regex = new RegExp(expression);
            // return this.url.match(regex);
            if (this.site_url != "" && !this.site_url.match(regex)) {
                this.site_url_error =
                    "please input a valid URL (include http:// or https://)";
            } else {
                this.site_url_error = "";
            }
            if (this.image != "" && !this.image.match(regex)) {
                this.image_url_error =
                    "please input a valid URL (include http:// or https://)";
            } else {
                this.image_url_error = "";
            }
        }
    }
};
</script>

