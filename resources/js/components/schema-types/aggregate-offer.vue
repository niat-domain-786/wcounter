<template>
<div class="row">
	<div class="col-md-6">
		<div class="card" >
			<div class="card-body">
				<!-- <h4 class="card-title">Aggratate Offer</h4> -->
				<h4 class="card-description my-2">
					Schema/JSON-LD for Aggratate Offer
				</h4>
				<form class="forms-sample">

					<div class="form-group">
						<label>Brand </label>
						<input type="text" class="form-control"  name="brand" v-model="brand_name">
					</div>
					<div class="form-group">
						<label>Product Name </label>
						<input type="text" class="form-control"  name="product_name" v-model="product_name">
					</div>
					<div class="form-group">
						<label>Product Image URL</label>
						<input type="url" class="form-control"  name="product_image_url" v-model="product_image_url">
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea  class="form-control"  cols="50" rows="10" v-model="product_description"></textarea>
					</div>
						
					
						<div class="form-group col-md-12">
							<label>Product Number Type</label>
						<!-- 	<select  class="form-" v-model="product_number_type" >
								<option value="ASIN">ASIN</option>
								<option value="ISBN">ISBN</option>
								<option value="MPN">MPN</option>
								<option value="SKU">SKU</option>
								<option value="UPC">UPC</option>
						
							</select> -->
							 <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="indexRadios" value="ASIN" checked="" v-model="product_number_type" >ASIN
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
							 <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="indexRadios" value="ISBN" checked=""  v-model="product_number_type">ISBN
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
							 <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="indexRadios" value="MPN" checked=""  v-model="product_number_type">MPN
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
							 <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="indexRadios" value="SKU" checked=""  v-model="product_number_type">SKU
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
							 <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="indexRadios" value="UPC" checked=""  v-model="product_number_type">UPC
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>

						</div>
					
						<div class="form-group col-md-12">
							<label>Product Number</label>
							<input type="text" class="form-control" v-model="product_number">
						</div>
				
					
					
					<div class="form-group">
						<label for="author">Currency Name</label>
						<input type="text" class="form-control"  v-model="currency_name">
					</div>
					
					<div class="form-group">
						<label for="author">Lower Price</label>
						<input type="text" class="form-control"  v-model="lower_price">
					</div>
					
					<div class="form-group">
						<label for="author">Higher Price</label>
						<input type="text" class="form-control"  v-model="higher_price">
					</div>
						<div class="form-group ">
							<label>Condition</label>
					<!-- 		<select  class=" form-control" v-model="product_condition" >
								<option value="new">New</option>
								<option value="used">Used</option>
								<option value="refurbished">Refurbished</option>
							
						
							</select> -->

						 <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="product_conditionRadios" value="new" checked=""  v-model="product_condition">New
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
							 <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="product_conditionRadios" value="used" checked=""  v-model="product_condition">Used
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
							 <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="product_conditionRadios" value="refurbished" checked=""  v-model="product_condition">Refurbished
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>

						</div>
					
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">JSON-LD</h4>
				
<textarea class="form-control result" ref="json_ld_result" cols="50" rows="25" id="result" readonly>
	&lt;script type="application/ld+json"&gt;
	{
	  "@context": "http://schema.org/",
	  "@type": "Product",
	  "brand": {
	    "@type": "Thing",
	    "name": "{{brand_name}}"
	  },
	  "name": "{{product_name}}",
	  "image": "{{product_image_url}}",
	  "description": "{{product_description}}",
	  "productId": "{{product_number_type}}:{{product_number}}",
	  "offers": {
	    "@type": "AggregateOffer",
	    "priceCurrency" : "{{currency_name}}",
	    "lowPrice": "{{lower_price}}",
	    "highPrice": "{{higher_price}}",
	    "itemCondition": "{{product_condition}}"
	  }
	}
	&lt;/script&gt;
</textarea>
				<div class="form-group">
					<button class="btn btn-primary my-2" style="border-radius:2px;" v-on:click="copy_json_ld">Copy Code</button>
					
				</div>
				<hr />
				<h4 class="card-title">Microdata</h4>
				
				<textarea class="form-control result" ref="microdata_result" cols="50" rows="25" id="result" readonly>

<!-- microdata starts -->
&lt;div itemscope itemtype="http://schema.org/Product"&gt;
&lt;span itemprop="brand"&gt;brand_name&lt;/span&gt; - 
&lt;span itemprop="name"&gt;product_name&lt;/span&gt;&lt;br&gt;
&lt;img itemprop="image" src="url_image"&gt;&lt;br&gt;
&lt;span itemprop="description"&gt;the description&lt;/span&gt;&lt;br&gt;
Product number: &lt;span itemprop="productID" content="upc:product_number"&gt;&lt;/span&gt;&lt;br&gt;
&lt;div itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer"&gt;
    &lt;span itemprop="priceCurrency" content="currency name"&gt;&lt;/span&gt;
    From 1&lt;span itemprop="lowPrice"&gt;12.00&lt;/span&gt;&lt;br&gt;
    to 1&lt;span itemprop="highPrice"&gt;122.00&lt;/span&gt;&lt;br&gt;
    Condition: &lt;span itemprop="itemCondition" content="used"&gt;used&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
<!-- microdata ends -->

				</textarea>
				<div class="form-group">
					<button class="btn btn-primary my-2" style="border-radius:2px;" v-on:click="copy_microdata">Copy Code</button>
				</div>
				
			</div>
		</div>
	</div>
</div>
</template>
<script>
	export default{
		data(){
			return {
				      // aggregate offer
        brand_name:'',
        product_name:'',
        product_image_url:'',
        product_description:'',
        product_number_type:'SKU',
        product_number:'',
        currency_name:'',
        lower_price:'',
        higher_price:'',
        product_condition:'used',
        json_ld_result:'',
        microdata_result:''
			}
		},
		methods:{
			copy_json_ld:function (){
				this.$refs.json_ld_result.select();
				document.execCommand('copy');

			},

			copy_microdata:function (){
				this.$refs.microdata_result.select();
				document.execCommand('copy');
			}
		},
	}
</script>