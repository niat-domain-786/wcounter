<template>
  <div>
                    <div class="row">
                        <div class="col-md-2 grid-margin">
                            <div class="card">
                                <div class="card-body py-3">
                                    <div class="d-flex flex-row justify-content-center align-items">
                                        <!-- <i class="mdi mdi-facebook text-facebook icon-md"></i> -->
                                        <p class="font-weight-semibold">
                                            <span v-text="this.$parent.words_count"></span><br> Words </p>
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
      

                                        <div class="ticket-details col-md-6 my-1">
                                            <input class="form-control bg-light"        
                                            name="k_field"
                                            placeholder="Input keyword to find keyword density"
                                            v-model="input_text"
                                            v-on:keyup="emit_input"
                                            v-on:change="emit_input"
                                            v-on:input="emit_input"
                                            v-on:paste="emit_input">

                                        </div>

                                        <div class="ticket-details col-md-6 my-1">
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
input[type='text']{
  padding: 1.3rem;
  border:1px solid #eee;
}
  button{
   margin-bottom: 1.5rem; 
  }
  p{
    height: 20px;
    font-size: 0.8rem;
  }
  .card{
    margin-bottom: 1px;
    border:1px solid #eee;
  }
  .keyword_status{
    color: #00bcd4;
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
