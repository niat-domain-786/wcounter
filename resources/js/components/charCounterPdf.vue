

<template>
  <div>
                    <div class="row">
                        <div class="col-md-2 grid-margin">
                            <div class="card">
                                <div class="card-body py-3">
                                    <div class="d-flex flex-row justify-content-center align-items">
                                        <!-- <i class="mdi mdi-facebook text-facebook icon-md"></i> -->
                                        <p class="font-weight-semibold"><span v-text="this.$parent.words_count"></span><br> Words</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 grid-margin">
                            <div class="card">
                                <div class="card-body py-3">
                                    <div class="d-flex flex-row justify-content-center align-items">
                                        <!-- <i class="mdi mdi-facebook text-facebook icon-md"></i> -->
                                        <p class="font-weight-semibold"><span v-text="this.$parent.character_count"></span><br> Characters</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 grid-margin">
                            <div class="card">
                                <div class="card-body py-3">
                                    <div class="d-flex flex-row justify-content-center align-items">
                                        <!-- <i class="mdi mdi-facebook text-facebook icon-md"></i> -->
                                        <p class="font-weight-semibold"><span v-text="this.$parent.characters_with_whitespaces"></span> <br>characters & whitespaces</p>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 grid-margin">
                            <div class="card">
                                <div class="card-body py-3">
                                    <div class="d-flex flex-row justify-content-center align-items">
                                        <!-- <i class="mdi mdi-facebook text-facebook icon-md"></i> -->
                                        <p class="font-weight-semibold"><span v-text="this.$parent.sentence_count"></span> <br> Sentences</p>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 grid-margin">
                            <div class="card">
                                <div class="card-body py-3">
                                    <div class="d-flex flex-row justify-content-center align-items">
                                        <!-- <i class="mdi mdi-facebook text-facebook icon-md"></i> -->
                                        <p class="font-weight-semibold"><span  v-text="this.$parent.paragraph_count"></span> <br>Paragraphs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <h5 class="card-title mb-4">Keywor Density</h5> -->

                                    <div class="row">

                                               <div class="ticket-details col-md-3">
                      <!-- <label for="pdfFile">Upload PDF File</label> -->
                      <!-- <label class=" text-white p-1" for="pdfFile" style="background: rgb(18, 127, 252);display: inline-block;border-radius: 4px;cursor: pointer;">
                        <input type="file" id="pdfFile" style="display: none;">
                        <i class="mdi mdi-file-pdf"></i> Upload PDF File

                      </label> -->

                         <label class="custom-file-upload">
               <input type="file" id="file" name="pdffile" v-on:change="fileupload" >
        <span v-if="loading == 0">Upload PDF File</span> <span v-if="loading == 1">
          <img src="/images/loader.gif" width="12px">&nbsp;Please wait...</span>
       </label>
       <small v-if="fileError == 1" class="text-danger">Something went wrong. Please try again!</small>

               <!-- <button v-on:click='fileupload'>upload file</button> -->

               <input type="hidden" v-model="filepath" >


                    </div>
      

                                        <div class="ticket-details col-md-4 my-1">
                                            <input class="form-control bg-light"        
                                            name="k_field"
                                            placeholder="Input keyword to find keyword density"
                                            v-model="input_text"
                                            v-on:keyup="emit_input"
                                            v-on:change="emit_input"
                                            v-on:input="emit_input"
                                            v-on:paste="emit_input">

                                        </div>

                                        <div class="ticket-details col-md-4 my-1">
                                            <label class="p-1 bg-light" style="display: inline-block;border-radius: 4px;cursor: pointer;"> 
                                             Keyword Density is &nbsp;<span v-text="this.$parent.Keyword_density_percentage"></span>% &amp;&nbsp;repeats: <span v-text="this.$parent.no_of_Keyword_appear"></span> <span v-if="this.$parent.no_of_Keyword_appear > 1">times</span><span v-else >time</span> </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>

  </div>
</template>
<style type="text/css" scoped>

input[type="file"] {
    display: none;
}  

.custom-file-upload {
    border: 1px solid rgb(202, 197, 197);
    display: inline-block;
    padding: .4rem;
    border-radius: 4px;
    cursor: pointer;
    margin-bottom: 10px;
}
  .font-weight-semibold{
      font-weight: 600;
      font-size: .9rem;
  }
  

</style>

<script type="text/javascript">
export default {
    data() {
        return {
            input_text: this.$parent.Keyword_density_field,
            filepath:'',
            fileError:0,
            loading:0,
            
        };
    },
    methods: {
        emit_input: function() {
            this.$parent.Keyword_density_field = this.input_text;
            this.$emit("keyword_changed");
        },
    
        fileupload: function() {
              this.loading = 1;
              this.fileError =0;
            
              var formData = new FormData();
              var imagefile = document.querySelector('#file');
          
              formData.append("image", imagefile.files[0]);
              axios.post('uploadpdf', formData, {
                  headers: {
                    'Content-Type': 'multipart/form-data'
                  }

              }).then(res => {

              this.filepath =  res.data;
              this.$parent.text_in_textarea = res.data;
              this.$parent.text_length();
              this.loading = 0;

              } ).catch(error  => {

                this.fileError =1;
                this.loading =0;


              });
        },
    }
};
</script>
