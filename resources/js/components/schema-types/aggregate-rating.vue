<template>
<div class="row">
	<div class="col-md-6 grid-margin stretch-card">
		<div class="card" >
			<div class="card-body">
				<!-- <h4 class="card-title">Aggratate Offer</h4> -->
				<h4 class="card-description my-2">
					Schema/JSON-LD for AggregateRating
				</h4>
				<form class="forms-sample">

					<div class="form-group">
						<label>Name of Product </label>
						<input type="text" class="form-control" v-model="name">
					</div>
					<div class="form-group">
						<label>Average Rating </label>
						<input type="number" class="form-control" v-model="average">
					</div>
					<div class="form-group">
						<label>Number of Ratings</label>
						<input type="number" class="form-control" v-model="total">
					</div>
					<div class="form-group">
						<label>Number of Reviews</label>
						<input type="number" class="form-control" v-model="no_of_reviews">

					</div>

			
		
					
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6 grid-margin stretch-card">
		<div class="card" >
			<div class="card-body">
				<h4 class="card-title">JSON-LD</h4>
				
<textarea class="form-control result" ref="rating_jsonld_result" cols="50" rows="25" id="result" readonly>
	<!-- AggregateRating schema-->

	&lt;script type="application/ld+json"&gt;
	{
	  "@context": "http://schema.org/",
	  "@type": "Product",
	  "name": "{{name}}",
	  "aggregateRating": {
	    "@type": "AggregateRating",
	    "ratingValue" : "{{average}}",
	    "ratingCount": "{{total}}",
	    "reviewCount": "{{no_of_reviews}}"
	  }
	}
	&lt;/script&gt;

	<!-- /AggregateRating schema ends-->

</textarea>
				<div class="form-group">
					<button class="btn btn-primary my-2" v-on:click="copy_jsonld">Copy Code</button>
					
				</div>
				<hr />
				<h4 class="card-title">Microdata</h4>
				
				<textarea class="form-control result" ref="rating_microdata_result" cols="50" rows="25" id="result" readonly>
<!-- AggregateRating schema-->

&lt;div itemscope itemtype="http://schema.org/Product"&gt;
    &lt;span itemprop="name"&gt;{{name}}&lt;/span&gt;&lt;br&gt;
    &lt;div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"&gt;
        Average Rating: &lt;span itemprop="ratingValue"&gt;{{average}}&lt;/span&gt;&lt;br&gt;
        Votes: &lt;span itemprop="ratingCount"&gt;{{total}}&lt;/span&gt;&lt;br&gt;
        Reviews: &lt;span itemprop="reviewCount"&gt;{{no_of_reviews}}&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;

<!-- /AggregateRating schema ends-->

</textarea>
				<div class="form-group">
					<button class="btn btn-primary my-2"  v-on:click="copy_microdata">Copy Code</button>
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
				name:'',
				average:'',
				total:'',
				no_of_reviews:'',
				rating_microdata_result:'',
				rating_jsonld_result:''
			}
		},
			methods:{
				copy_jsonld:function (){
					this.$refs.rating_jsonld_result.select();
					document.execCommand('copy');
				},
				copy_microdata: function (){
					this.$refs.rating_microdata_result.select();
					document.execCommand('copy');
				}
			}
	}
</script>