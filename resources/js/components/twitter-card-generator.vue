<template>
<div class="col-md-12">
  <div class="col-md-12 card">
    <h3><small>Twitter Card Generator</small></h3>
    <p class="card-description">Select the type</p>
    <!-- Tabs on Plain Card -->
    <div class="card card-nav-tabs card-plain">
      <div class="card-header card-header-rose">
        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#home" data-toggle="tab">App</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#updates" data-toggle="tab">Player</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#product" data-toggle="tab">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#summary" data-toggle="tab">summary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#summarywithimage" data-toggle="tab">Summary With Large Image</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body ">
        <div class="tab-content text-center">
          <div class="tab-pane active" id="home">
            <!-- app start -->
            <div class="tab-pane fade active show" id="App" role="tabpanel" aria-labelledby="App-tab">
              <div class="media">
                <!-- <img class="mr-3 w-25 rounded" src="https://cdn.jpegmini.com/user/images/slider_puffin_before_mobile.jpg" alt="sample image"> -->
                
                <div  class="col-md-6">
                  <h2 class="mt-0"> App</h2>
                  
                  <form action="" class="form-group">
                    <div class="form-group bmd-form-group">
                      <label for="username" class="bmd-label-floating"> @username </label>
                      <input type="text" class="form-control"  required="true" name="username" aria-required="true" v-model="username">
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="appname" class="bmd-label-floating"> App Name </label>
                      <input type="text" class="form-control" id="appname" required="true" name="appname" aria-required="true" v-model="app_name">
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="ipnone_app_id" class="bmd-label-floating"> Iphone App ID </label>
                      <input type="text" class="form-control" id="iphone_app_id" required="true" name="iphone_app_id" aria-required="true" v-model="iphone_app_id" placeholder="E.g. 405645375">
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="ipnone_app_id" class="bmd-label-floating"> Ipad App ID </label>
                      <input type="text" class="form-control" id="ipad_app_id" required="true" name="ipad_app_id" aria-required="true" v-model="ipad_app_id" placeholder="E.g. 667645375">
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="ipnone_app_id" class="bmd-label-floating"> Google Play App ID </label>
                      <input type="text" class="form-control" id="google_play_app_id" required="true" name="google_play_app_id" aria-required="true" v-model="google_play_app_id" placeholder="E.g. com.android.app">
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="ipnone_app_id" class="bmd-label-floating">App Country (If Not Available in US Store) </label>
                      <input type="text" class="form-control" required="true" name="google_play_app_id" aria-required="true"  placeholder="E.g. UK" v-model="app_country">
                    </div>
                    <div class="form-group bmd-form-group">
                      <!-- <label for="ipnone_app_id" class="bmd-label-floating">Description </label> -->
                      <textarea required="true" aria-required="true" class="form-control" placeholder="Say something about your app" v-model="description"></textarea>
                    </div>
                  </form>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <button
                    class="btn btn-rose"
                    
                    v-on:click="copy_app_tags">
                    Copy Code
                    </button>
                  </div>
                  <textarea
                  class="form-control result"
                  ref="app_tags"
                  cols="40"
                  rows="15"
                  
                  readonly>
                  <!-- twitter card -->
                  &lt;meta name="twitter:card" content="app"&gt;
                  &lt;meta name="twitter:site" content="{{username}}"&gt;
                  &lt;meta name="twitter:description" content="{{description}}"&gt;
                  &lt;meta name="twitter:app:name:iphone" content="{{app_name}}"&gt;
                  &lt;meta name="twitter:app:id:iphone" content="{{iphone_app_id}}"&gt;
                  &lt;meta name="twitter:app:name:ipad" content="{{app_name}}"&gt;
                  &lt;meta name="twitter:app:id:ipad" content="{{ipad_app_id}}"&gt;
                  &lt;meta name="twitter:app:name:googleplay" content="{{app_name}}"&gt;
                  &lt;meta name="twitter:app:id:googleplay" content="{{google_play_app_id}}"&gt;
                  &lt;meta name="twitter:app:country" content="{{app_country}}"&gt;
                  </textarea>
                  
                </div>
              </div>
            </div>
            
            <!-- end app -->
          </div>
          <!-- player -->
          <div class="tab-pane" id="updates">
            <div class="tab-pane"  role="tabpanel" aria-labelledby="Player-tab">
              <div class="media">
                <!-- <img class="mr-3 w-25 rounded" src="https://dyl80ryjxr1ke.cloudfront.net/external_assets/hero_examples/hair_beach_v1785392215/original.jpeg" alt="sample image"> -->
                <div class="media-body col-md-12 d-flex ">
                  <div  class="col-md-6">
                    <h2 class="mt-0"> Player</h2>
                    <form action="">
                      <div class="form-group bmd-form-group">
                        <label for="username" class="bmd-label-floating"> @username </label>
                        <input type="text" class="form-control"  required="true" name="username" aria-required="true" v-model="username">
                      </div>
                      <div class="form-group bmd-form-group">
                        <label for="title" class="bmd-label-floating"> Title </label>
                        <input type="text" class="form-control" required="true" name="title" aria-required="true" v-model="title">
                      </div>
                      
                      <div class="form-group bmd-form-group">
                        <label for="image_url" class="bmd-label-floating"> Image URL </label>
                        <input type="url" class="form-control" required="true" name="image_url" aria-required="true" v-model="image_url">
                      </div>
                      <div class="form-group bmd-form-group">
                        <label for="player_iframe_url" class="bmd-label-floating"> HTTPS URL to IFrame Player </label>
                        <input type="url" class="form-control" id="player_iframe_url" required="true" name="player_iframe_url" aria-required="true" v-model="player_iframe_url">
                      </div>
                      <div class="form-group bmd-form-group">
                        <label for="player_height" class="bmd-label-floating"> Height of player in pixels </label>
                        <input type="url" class="form-control" id="player_height" required="true" name="player_height" aria-required="true" v-model="player_height">
                      </div>
                      <div class="form-group bmd-form-group">
                        <label for="player_width" class="bmd-label-floating"> Width of player in pixels </label>
                        <input type="url" class="form-control" id="player_width" required="true" name="player_width" aria-required="true" v-model="player_width">
                      </div>
                      <div class="form-group bmd-form-group">
                        <label for="description" class="bmd-label-floating">Description </label>
                        <input type="url" class="form-control" required="true" name="description" aria-required="true" v-model="description">
                      </div>
                      
                      
                    </form>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <button
                      class="btn btn-rose"
                      v-on:click="copy_player_tags">
                      Copy Code
                      </button>
                      
                      <textarea
                      class="form-control result"
                      ref="player_tags"
                      cols="40"
                      rows="15"
                      readonly>
                      <!-- twitter card (player) -->
                      &lt;meta name="twitter:card" content="player"&gt;
                      &lt;meta name="twitter:site" content="{{username}}"&gt;
                      &lt;meta name="twitter:title" content="{{title}}"&gt;
                      &lt;meta name="twitter:description" content="{{description}}"&gt;
                      &lt;meta name="twitter:image" content="{{image_url}}"&gt;
                      &lt;meta name="twitter:player" content="{{player_iframe_url}}"&gt;
                      &lt;meta name="twitter:player:height" content="{{player_height}}"&gt;
                      &lt;meta name="twitter:player:width" content="{{player_width}}"&gt;
                      <!-- /twitter card (player) ends -->
                      </textarea>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        <!-- player ends -->
        <!-- product starts -->
        <div class="tab-pane" id="product">
          <div  role="tabpanel" aria-labelledby="Product-tab">
              <div class="media">
                <!-- <img class="mr-3 w-25 rounded" src="https://dyl80ryjxr1ke.cloudfront.net/external_assets/hero_examples/hair_beach_v1785392215/original.jpeg" alt="sample image"> -->
                <div class="media-body col-md-12 d-flex ">
                  <div  class="col-md-6">
                    <h2 class="mt-0"> Product</h2>
                  <form action="">
                      <div class="form-group bmd-form-group">
                        <label for="username" class="bmd-label-floating"> @username </label>
                        <input type="text" class="form-control"  required="true" name="username" aria-required="true" v-model="username">
                      </div>
                      <div class="form-group bmd-form-group">
                        <label for="title" class="bmd-label-floating"> Title </label>
                        <input type="text" class="form-control" required="true" name="title" aria-required="true" v-model="title">
                      </div>
                      <div class="form-group bmd-form-group">
                        <label for="image_url" class="bmd-label-floating"> Image URL </label>
                        <input type="url" class="form-control" required="true" name="image_url" aria-required="true" v-model="image_url">
                      </div>

              
                            
                      <div class="form-group bmd-form-group">
                        <label for="label1" class="bmd-label-floating"> Label 1 </label>
                        <input type="url" class="form-control" id="label1" required="true" name="label1" aria-required="true" v-model="label1" placeholder="in stock, price ...">
                      </div>
                 


                       <div class="form-group bmd-form-group">
                        <label for="data1" class="bmd-label-floating"> Data 1 </label>
                        <input type="url" class="form-control" id="data1" required="true" name="data1" aria-required="true" v-model="data1" placeholder=" location etc">
                      </div>
                    
         
                    
                       <div class="form-group bmd-form-group">
                        <label for="label2" class="bmd-label-floating"> Label 2 </label>
                        <input type="url" class="form-control" id="label2" required="true" name="label2" aria-required="true" v-model="label2" placeholder="$77 etc">
                      </div>
                        

                            
                       <div class="form-group bmd-form-group">
                        <label for="data2" class="bmd-label-floating"> Data 2 </label>
                        <input type="url" class="form-control" id="data2" required="true" name="data2" aria-required="true" v-model="data2" placeholder="address etc">
                      </div>

                            
                       <div class="form-group bmd-form-group">
                        <label for="description" class="bmd-label-floating"> Description </label>
                        <input type="url" class="form-control" required="true" name="description" aria-required="true" v-model="description" >
                      </div>
                    
                 
                  </form>
                </div>
                <div class="col-md-6">
              <!--     <div class="card shadow mt-4">
                    <div class="card-body">
                      <h4 class="card-title">Result</h4>
                      <p class="card-description">
                        Copy and paste it in the
                        <strong>&lt;head&gt;</strong> section.
                      </p> -->
                          <div class="form-group">
                        <button
                        class="btn btn-rose my-2"
                        v-on:click="copy_product_tags">
                        Copy Code
                        </button>
                      </div>
                      <textarea
                      class="form-control result"
                      ref="product_tags"
                      cols="40"
                      rows="15"
                      readonly>
                      <!-- twitter card (product) -->
                      &lt;meta name="twitter:card" content="product"&gt;
                      &lt;meta name="twitter:site" content="{{username}}"&gt;
                      &lt;meta name="twitter:title" content="{{title}}"&gt;
                      &lt;meta name="twitter:description" content="{{description}}"&gt;
                      &lt;meta name="twitter:image" content="{{image_url}}"&gt;
                      &lt;meta name="twitter:label1" content="{{label1}}"&gt;
                      &lt;meta name="twitter:data1" content="{{data1}}"&gt;
                      &lt;meta name="twitter:label2" content="{{label2}}"&gt;
                      &lt;meta name="twitter:data2" content="{{data2}}"&gt;
                      <!-- /twitter card (product) ends -->
                      </textarea>
                  
                  <!--   </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- product ends -->
        <div class="tab-pane" id="summary">
          <div class="tab-pane" role="tabpanel" aria-labelledby="Summary-tab">
            <div class="media">
              <div class="media-body col-md-12 d-flex ">
                <div  class="col-md-6">
                  <h2 class="mt-0"> Summary</h2>
                  <form action="">
                      <div class="form-group bmd-form-group">
                        <label for="username" class="bmd-label-floating"> @username </label>
                        <input type="text" class="form-control"  required="true" name="username" aria-required="true" v-model="username">
                      </div>

                  <div class="form-group bmd-form-group">
                        <label for="title" class="bmd-label-floating"> Title </label>
                        <input type="text" class="form-control" required="true" name="title" aria-required="true" v-model="title">
                      </div>
               

                       <div class="form-group bmd-form-group">
                        <label for="description" class="bmd-label-floating"> Description </label>
                        <input type="text" class="form-control" required="true" name="description" aria-required="true" v-model="description">
                      </div>
                  </form>
                </div>
                <div class="col-md-6">
                 <!--  <div class="card shadow mt-4">
                    <div class="card-body">
                      <h4 class="card-title">Result</h4>
                      <p class="card-description">
                        Copy and paste it in the
                        <strong>&lt;head&gt;</strong> section.
                      </p> -->
                      <div class="form-group">
                        <button
                        class="btn btn-rose my-2"
                        v-on:click="copy_summary_tags">
                        Copy Code
                        </button>
                      </div>
                      <textarea
                      class="form-control result"
                      ref="summary_tags"
                      cols="40"
                      rows="15"
                      readonly>
                      <!-- twitter card (summary) -->
                      &lt;meta name="twitter:card" content="summary"&gt;
                      &lt;meta name="twitter:site" content="{{username}}"&gt;
                      &lt;meta name="twitter:title" content="{{title}}"&gt;
                      &lt;meta name="twitter:description" content="{{description}}"&gt;
                      <!-- /twitter card (summary) ends -->
                      </textarea>
                  
                    </div>
                  </div>
                </div>
              </div>
         <!--    </div>
          </div> -->
          
        </div>
        <!-- summary ends -->
        <div class="tab-pane" id="summarywithimage">
          <div class="tab-pane" role="tabpanel" aria-labelledby="Summary-with-image-tab">
            <div class="media">
              
              <div class="media-body col-md-12 d-flex ">
                <div  class="col-md-6">
                  <h2 class="mt-0"> Summary With Image</h2>
                  <form action="">
                        <div class="form-group bmd-form-group">
                        <label for="username" class="bmd-label-floating"> @username </label>
                        <input type="text" class="form-control"  required="true" name="username" aria-required="true" v-model="username">
                      </div>

                  <div class="form-group bmd-form-group">
                        <label for="title" class="bmd-label-floating">Title </label>
                        <input type="text" class="form-control" required="true" name="title" aria-required="true" v-model="title">
                      </div>
              

                        <div class="form-group bmd-form-group">
                        <label for="image_url" class="bmd-label-floating"> Image URL </label>
                        <input type="text" class="form-control" required="true" name="image_url" aria-required="true" v-model="image_url">
                      </div>
                    
                    
                       <div class="form-group bmd-form-group">
                        <label for="description" class="bmd-label-floating"> Description </label>
                        <input type="text" class="form-control" required="true" name="description" aria-required="true" v-model="description">
                      </div>

                  </form>
                </div>
                <div class="col-md-6">
              <!--     <div class="card shadow mt-4">
                    <div class="card-body">
                      <h4 class="card-title">Result</h4>
                      <p class="card-description">
                        Copy and paste it in the
                        <strong>&lt;head&gt;</strong> section.

                      </p> -->
                          <div class="form-group">
                        <button
                        class="btn btn-rose my-2"
                        v-on:click="copy_summary_with_img_tags">
                        Copy Code
                        </button>
                      </div>
                      <textarea
                      class="form-control result"
                      ref="summary_with_img_tags"
                      cols="40"
                      rows="15"
                      readonly>
                      <!-- twitter card (summary_large_image) -->
                      &lt;meta name="twitter:card" content="summary_large_image"&gt;
                      &lt;meta name="twitter:site" content="{{username}}"&gt;
                      &lt;meta name="twitter:title" content="{{title}}"&gt;
                      &lt;meta name="twitter:description" content="{{description}}"&gt;
                      &lt;meta name="twitter:image" content="{{image_url}}"&gt;
                      <!-- /twitter card (summary_large_image) ends -->
                      </textarea>
                  
                    </div>
                  </div>
                </div>
              </div>
        <!--     </div>
          </div> -->
          
        </div>
      </div>
    </div>
  </div>
        </div>
  <!-- End Tabs on plain Card -->
</div>
</div>
</template>

<script type="text/javascript">
  export default{
    data(){
      return{
        // common
        username:'@',
        title:'',
        description:'',
        image_url:'',

        // app
        app_name:'',
        iphone_app_id:'',
        ipad_app_id:'',
        google_play_app_id:'',
        app_country:'',

        player_width:'',
        player_height:'',
        player_iframe_url:'',

        label1:"",
        label2:"",
        data1:"",
        data2:"",

        app_tags:'',




      }
    },

    methods:{

      copy_app_tags:function(){
        this.$refs.app_tags.select();
        document.execCommand('copy');
        console.log(this.$route.fullPath);
      },

      copy_player_tags:function(){
        this.$refs.player_tags.select();
        document.execCommand('copy');
      },
      copy_product_tags:function(){
        this.$refs.product_tags.select();
        document.execCommand('copy');
      },
      copy_summary_tags:function(){
        this.$refs.summary_tags.select();
        document.execCommand('copy');
      },
      copy_summary_with_img_tags:function(){
        this.$refs.summary_with_img_tags.select();
        document.execCommand('copy');
      },

    }
  }
</script>
