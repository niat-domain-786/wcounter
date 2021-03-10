<template>
  <div class="row">
    
<div class="card">
  <div class="card-body">
    <div class="col-md-12">
      <div class="row">
        
        <div class="col-md-2 col-sm-6 col-xs-6 ">
          <p>
            <!-- <i class="icon-sm fa fa-user mr-2"></i> -->
            Characters
          </p>
          <h2 v-text="this.$parent.character_count"></h2>
          <!-- <label class="badge badge-outline-success badge-pill">2.7% increase</label> -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 ">
          <p>
            <!-- <i class="icon-sm fas fa-hourglass-half mr-2"></i> -->
            Characters with Whitespaces
          </p>
          <h2 v-text="this.$parent.characters_with_whitespaces"></h2>
          <!-- <label class="badge badge-outline-danger badge-pill">30% decrease</label> -->
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 ">
          <p>
            <!-- <i class="icon-sm fas fa-cloud-download-alt mr-2"></i> -->
            Words
          </p>
          <h2 v-text="this.$parent.words_count"></h2>
          <!-- <label class="badge badge-outline-success badge-pill">12% increase</label> -->
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 ">
          <p>
            <!-- <i class="icon-sm fas fa-check-circle mr-2"></i> -->
            Sentences
          </p>
          <h2 v-text="this.$parent.sentence_count"></h2>
          <!-- <label class="badge badge-outline-success badge-pill">57% increase</label> -->
        </div>
      
        <div class="col-md-2 col-sm-6 col-xs-6 ">
          <p>
            <!-- <i class="icon-sm fas fa-circle-notch mr-2"></i> -->
            Paragraphs
          </p>
          <h2  v-text="this.$parent.paragraph_count"></h2>
          <!-- <label class="badge badge-outline-danger badge-pill">16% decrease</label> -->
        </div>
    </div>
      </div>
  </div>
  <div class="card-footer">
    <dir class="col-md-12">
      <div class="row">
                <div class="col-md-4">
                <input
                type="text"
                class="form-control"
                name="k_field"
                placeholder="Input keyword to find keyword density"
                v-model="input_text"
                v-on:keyup="emit_input"
                v-on:change="emit_input"
                v-on:input="emit_input"
                v-on:paste="emit_input"

                />
            </div>

              <div class="col-md-3">
                <button class="btn btn-info">
                <strong>Keyword Density :</strong>
                <strong v-text="this.$parent.Keyword_density_percentage" ></strong> %</button>

            </div>
            <div class="col-md-5 ">
               <h5 class="keyword_status"><em>The Focus Keyword and combination appears
                    <strong
                        v-text="this.$parent.no_of_Keyword_appear"
                    ></strong>
                    times.</em>
                </h5>
            </div>
        
      </div>
    </dir>

              
  </div>
</div>
</div>

  </div>
</template>
<style type="text/css" scoped>
input[type='text']{
  padding: 1.3rem;
  border:1px solid #eee;
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
</style>

<script type="text/javascript">
export default {
    data() {
        return {
            input_text: this.$parent.Keyword_density_field
        };
    },
    methods: {
        emit_input: function() {
            this.$parent.Keyword_density_field = this.input_text;
            this.$emit("keyword_changed");
        }
    }
};
</script>
