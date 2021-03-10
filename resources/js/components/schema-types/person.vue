<template>
<div class="row">
	<div class="col-md-6 grid-margin stretch-card">
		<div class="card" style="border-radius:0px;">
			<div class="card-body">
				<!-- <h4 class="card-title">Person</h4> -->
				<h4 class="card-description my-2">
					Schema/JSON-LD for Person
				</h4>
				<form class="forms-sample">

					<div class="form-group">
						<label>Name of Product </label>
						<input type="text" class="form-control" >
					</div>
					<div class="form-group">
						<label>Average Rating </label>
						<input type="number" class="form-control" >
					</div>
					<div class="form-group">
						<label>Number of Ratings</label>
						<input type="number" class="form-control" >
					</div>
					<div class="form-group">
						<label>Number of Reviews</label>
						<input type="number" class="form-control" >

					</div>

			
		
					
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6 grid-margin stretch-card">
		<div class="card" style="border-radius:0px;">
			<div class="card-body">
				<h4 class="card-title">JSON-LD</h4>
				
<textarea class="form-control result" ref="meta_tags_result" cols="50" rows="25" id="result" readonly>
<!-- AggregateRating schema-->

&lt;script type="application/ld+json"&gt;
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "500",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue" : "4",
    "ratingCount": "10",
    "reviewCount": "40"
  }
}
&lt;/script&gt;

<!-- /AggregateRating schema ends-->

</textarea>
				<div class="form-group">
					<button class="btn btn-primary btn-sm px-3 my-2" style="border-radius:2px;">Copy Code</button>
					
				</div>
				<hr />
				<h4 class="card-title">Microdata</h4>
				
				<textarea class="form-control result" ref="meta_tags_result" cols="50" rows="25" id="result" readonly>
<!-- AggregateRating schema-->

&lt;div itemscope itemtype="http://schema.org/Product"&gt;
    &lt;span itemprop="name"&gt;500&lt;/span&gt;&lt;br&gt;
    &lt;div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"&gt;
        Average Rating: &lt;span itemprop="ratingValue"&gt;4&lt;/span&gt;&lt;br&gt;
        Votes: &lt;span itemprop="ratingCount"&gt;10&lt;/span&gt;&lt;br&gt;
        Reviews: &lt;span itemprop="reviewCount"&gt;40&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;

<!-- /AggregateRating schema ends-->

</textarea>
				<div class="form-group">
					<button class="btn btn-primary btn-sm px-3 my-2" style="border-radius:2px;">Copy Code</button>
				</div>
				
			</div>
		</div>
	</div>
</div>
</template>
<script>
	export default{
		data(){
			return {}
		},
	}
</script>