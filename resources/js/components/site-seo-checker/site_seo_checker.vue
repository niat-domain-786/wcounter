<template>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="col-md-12">
                
                <div class="card-body d-flex">
                    <div class="col-md-8 col-sm-12">
                        <input
                        type="url"
                        class="form-control"
                        name="seo_site_url_field"
                        placeholder="Enter Domain URL"
                        v-model="input_url"
                        
                        />
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <button
                        v-on:click="emit_input_domain_url"
                        class="btn px-4 btn-info my-1"
                        style="border-radius:24px;"
                        
                        >{{ scan_btn_innerHTML }}
                        </button>
                        
                    </div>
                </div>
            </div>
            <div class=" m-3 col-sm-12">
                <button class="btn btn-info">
                <i class="fa fa-spinner fa-spin"></i> &nbsp;  loading ...&nbsp;</button>
                
            </div>
        </div>
    </div>
</div>
</template>
<script type="text/javascript">
export default {
data() {
return {
input_url: this.$parent.domain_url,
scan_btn_innerHTML: "Scan Now",
};
},
methods: {
emit_input_domain_url: function() {
// axios.post()
// .then()
// .catch();
this.$parent.domain_url = this.input_url;
this.$emit("input_domain_url");
this.scan_btn_innerHTML= "Processing...";
}
}
};
</script>