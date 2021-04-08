<template>
  <div class="row">
    
<div class="card">
  <div class="card-body">
    <div class="col-md-12">
      <div class="row">
        
        <div class="col-md-2 col-sm-6 ">
          <p>
            <!-- <i class="icon-sm fa fa-user mr-2"></i> -->
            Characters
          </p>
          <h3 v-text="this.$parent.character_count"></h3>
          <!-- <label class="badge badge-outline-success badge-pill">2.7% increase</label> -->
        </div>
        <div class="col-md-3 col-sm-6 ">
          <p>
            <!-- <i class="icon-sm fas fa-hourglass-half mr-2"></i> -->
            Characters with Whitespaces
          </p>
          <h3 v-text="this.$parent.characters_with_whitespaces"></h3>
          <!-- <label class="badge badge-outline-danger badge-pill">30% decrease</label> -->
        </div>
        <div class="col-md-2 col-sm-6 ">
          <p>
            <!-- <i class="icon-sm fas fa-cloud-download-alt mr-2"></i> -->
            Words
          </p>
          <h3 v-text="this.$parent.words_count"></h3>
          <!-- <label class="badge badge-outline-success badge-pill">12% increase</label> -->
        </div>
        <div class="col-md-2 col-sm-6 ">
          <p>
            <!-- <i class="icon-sm fas fa-check-circle mr-2"></i> -->
            Sentences
          </p>
          <h3 v-text="this.$parent.sentence_count"></h3>
          <!-- <label class="badge badge-outline-success badge-pill">57% increase</label> -->
        </div>
      
        <div class="col-md-2 col-sm-6 ">
          <p>
            <!-- <i class="icon-sm fas fa-circle-notch mr-2"></i> -->
            Keyword Density
          </p>
          <h3>{{this.$parent.Keyword_density_percentage}} %</h3>
          <em class="keyword_status" v-if="this.$parent.Keyword_density_percentage !== 0"><small>Repeated <span  v-text="this.$parent.no_of_Keyword_appear"></span> times</small></em>
          <!-- <label class="badge badge-outline-danger badge-pill">16% decrease</label> -->
        </div>
    </div>
      </div>
  </div>
  <div class="card-footer">
    <dir class="col-md-12">
      <div class="row">
           <div class="col-md-2 ">
      <label class="custom-file-upload">
               <input type="file" id="file" name="pdffile" v-on:change="fileupload" >
        <span v-if="loading == 0">Upload PDF File</span> <span v-if="loading == 1">Please wait.....</span>
       </label>
       <small v-if="fileError == 1" class="text-danger">Error! We only support PDF Files</small>

               <!-- <button v-on:click='fileupload'>upload file</button> -->

               <input type="hidden" v-model="filepath" >
               <!-- <button class="btn btn-info">Get Text</button> -->
            </div>
                <div class="col-md-4">
                  <!-- <label><strong>Input your Keyword to calculate keyword density</strong></label> -->
                <input
                type="text"
                class="form-control"
                name="k_field"
                placeholder="Focus keyword to find density"
                v-model="input_text"
                v-on:keyup="emit_input"
                v-on:change="emit_input"
                v-on:input="emit_input"
                v-on:paste="emit_input"

                />
            </div>

        <!--       <div class="col-md-3">
                <button class="btn btn-info">
                <strong>Keyword Density :</strong>
                <strong v-text="this.$parent.Keyword_density_percentage" ></strong> %</button>

            </div> -->
         
        
      </div>
    </dir>

              
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
    border: 1px solid #000;
    display: inline-block;
    padding: .9rem;
    border-radius: 4px;
    cursor: pointer;
    margin-bottom: 10px;
}
input[type='text']{
  padding: 1.3rem;
  border:1px solid #000;
}
  button{
   margin-bottom: 1.5rem; 
  }
  p{
    height: 20px;
  }
  .card{
    margin-bottom: 1px;
    border:1px solid #eee;
  }
  .keyword_status{
    color: #00bcd4;
  }
  .text-danger{
    color: red;
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

              });
        },
    }
};
</script>
