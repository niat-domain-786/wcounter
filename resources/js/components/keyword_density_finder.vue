<template>
<div class="row my-0">
    <div class="card">
        <div class="card-body">
            <div class="col-md-12 col-sm-12">
                <input
                type="text"
                class="form-control"
                name="k_field"
                placeholder="Input Keyword"
                v-model="input_text"
                v-on:keyup="emit_input"
                v-on:change="emit_input"
                v-on:input="emit_input"
                v-on:paste="emit_input"
                />
            </div>
            <div class="col-md-12 col-sm-12 mt-3">
                <button
                class="btn btn-round btn-info"
                >
                <strong>Keyword Density :</strong>
                <strong
                    v-text="this.$parent.Keyword_density_percentage"
                ></strong
                >%
                </button>
                <p><strong>The Focus Keyword and combination appears</strong>
                    <strong
                        v-text="this.$parent.no_of_Keyword_appear"
                    ></strong>
                    <strong>times.</strong>
                </p>
            </div>
        </div>
    </div>
</div>
</template>
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
