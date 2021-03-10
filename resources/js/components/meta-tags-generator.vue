<template>
<div class="col-md-12">
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Meta Tags Generator</h4>
                <p class="card-description">
                    Generate Meta tags for your site
                </p>
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="title">Title <span v-bind:class="title_warning_color">({{title_length}}/60 characters)</span></label>
                        <input
                        type="text"
                        class="form-control py-4"
                        v-model="title"
                        v-on:input="find_title_length"
                        />
                    </div>
                    <div class="form-group">
                        <label for="description">Description <span v-bind:class="description_warning_color">({{description_length}}/150 characters)</span></label>
                        <textarea
                        name="description"
                        cols="40"
                        rows="8"
                        class="form-control"
                        v-model="description"
                        v-on:input="find_description_length"
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Keywords">Site Keywords(separate with comma)</label>
                        <input
                        name="Keywords"
                        type="text"
                        class="form-control py-4"
                        placeholder="E.g. Keyword 1, Keyword 2"
                        v-model="Keywords"
                        />
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="robots">Allow robots to index your website?</label>
                        
                        <div class="col-md-12">
                        <div class="col-sm-5 checkbox-radios">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="indexRadios" value="index" checked="" v-model="index_site">YES
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="indexRadios" value="noindex" v-model="index_site"> NO
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </div>
                      
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="follow_links">Allow robots to follow all links?</label>
                        
                        <div class="col-md-12">
                       
                     

                          <div class="col-sm-12 checkbox-radios">
                     <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="folowRadios" value="follow"  v-model="follow_links" checked="">Follow
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="folowRadios" value="nofollow" v-model="follow_links"> No Follow
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </div>
                         </div>

                    </div>
                    
                    <div class="form-group">
                        <label  for="content_type">What type of content will your site display?</label>
                        <div class="col-md-12">

                    <div class="col-sm-5 checkbox-radios">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="contentTypeRadios" value="text/html; charset=utf-8" checked="" v-model="content_type">UTF-8
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>

                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="contentTypeRadios" value="text/html; charset=utf-16" checked="" v-model="content_type">UTF-16
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>

                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="contentTypeRadios" value="text/html; charset=iso-8859-1" checked="" v-model="content_type">ISO-8859-1
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>

                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="contentTypeRadios" value="text/html; charset=windows-1252" checked="" v-model="content_type">WINDOWS-1252
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                       
                      </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="site_language">What is your site primary language?</label>
                        
                        <div class="col-md-12">
                    <input
                        type="text"
                        class="form-control py-4"
                        v-model="language"
                    />

              
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="revisit_days">Search engines should revisit this page after</label>
                    <div class="col-md-12">
                       
                     <div class="col-sm-5 checkbox-radios">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="return_days" value="1 day" checked="" v-model="revisit_days">1 day
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="return_days" value="2 days" v-model="revisit_days"> 2 days
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="return_days" value="3 days" v-model="revisit_days"> 3 days
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="return_days" value="7 days" v-model="revisit_days"> 7 days
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="return_days" value="15 days" v-model="revisit_days"> 15 days
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="return_days" value="30 days" v-model="revisit_days"> 30 days
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </div>
                         </div>
                    </div>
                <div class="form-group">
                    <label for="author">Site author</label>
                    <input type="text" class="form-control" v-model="author" name="author">
                </div>
                
            </form>
            </div>
        </div>
    </div>
<div class="col-md-6 grid-margin stretch-card">
    <div class="card" style="border-radius:0px;">
        <div class="card-body">
            <h4 class="card-title">Result</h4>
            <p class="card-description">
                Copy and paste it in the
                <strong>&lt;head&gt;</strong> section.
            </p>
            <textarea class="form-control result" ref="meta_tags_result" cols="50" rows="15" id="result" readonly>
    <!-- meta tags start  -->
    &lt;meta name="title" content="{{title}}"&gt;
    &lt;meta name="description" content="{{description}}"&gt;
    &lt;meta name="keywords" content="{{Keywords}}"&gt;
    &lt;meta name="robots" content="{{index_site}}, {{follow_links}}"&gt;
    &lt;meta http-equiv="Content-Type" content="{{content_type}}"&gt;
    &lt;meta name="language" content="{{language}}"&gt;
    &lt;meta name="revisit-after" content="{{revisit_days}}"&gt;
    &lt;meta name="author" content="{{author}}"&gt;
    <!-- meta tags end  -->
            </textarea>
            <div class="form-group">
                <button
                class="btn btn-primary btn-sm px-3 my-2"
                style="border-radius:2px;"
                v-on:click="copy_meta_tags"
                >
                Copy Code
                </button>
                <!--  <button  class="btn btn-primary btn-sm px-3" style="border-radius:2px;" v-on:click="enable_loader" >Preview</button> -->
            </div>
            <hr />
            
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
            description: "",
            Keywords: "",
            index_site: "index",
            content_type: "text/html; charset=utf-8",
            revisit_days: "7 days",
            language: "English",
            follow_links: "follow",         
            author: "",  

            description_length:150,
            title_length:60,

            title_warning_color:'text-success',
            description_warning_color:'text-success',
             
        };
    },
    methods: {
         
        copy_meta_tags: function() {
            this.$refs.meta_tags_result.select();
            document.execCommand("copy");
        },
         
        find_title_length: function() {
            if (this.title.length >= 61) {
                this.title_warning_color = "text-danger";
            }else{
                this.title_warning_color="text-success";
            }
            this.title_length = this.title.length;
            
        },

        find_description_length: function() {
            if (this.description.length >= 151) {
                this.description_warning_color = "text-danger";
            }else{
                this.description_warning_color="text-success";
            }
            this.description_length = this.description.length;
        },
         
    }
};
</script>

