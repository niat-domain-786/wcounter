<template>
<div class="row">
	<div class="col-md-6 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<!-- <h4 class="card-title">Aggratate Offer</h4> -->
				<h4 class="card-description my-2">
					Schema/JSON-LD for News Article
				</h4>

				<form class="forms-sample">

					<div class="form-group">
						<label>Headline </label>
						<input type="text" class="form-control" v-model="headline">
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea  class="form-control"  cols="50" rows="10" v-model="description"></textarea>
					</div>
					<div class="form-group">
						<label>Date Published (yyyy-mm-dd) </label>
						<input type="date" class="form-control" v-model="publish_date">
					</div>
					<div class="form-group">
						<label>Image URL</label>
						<input type="url" class="form-control" v-model="image_url">
					</div>

					<div class="col-md-12  d-flex">
						
			  		    <div class="form-group col-md-6 col-sm-12">
							<label>Image Height (px)</label>
							<input type="text" class="form-control" v-model="image_height">
						</div>	
			  		    <div class="form-group col-md-6 col-sm-12">
							<label>Image Width (px)</label>
							<input type="text" class="form-control" v-model="image_width">
						</div>

					</div>


					<div class="form-group">
						<label>Image Alt Text</label>
						<input type="text" class="form-control" v-model="image_alt_text">
					</div>

					<div class="col-md-12  d-flex">
						
			  		    <div class="form-group col-md-6 col-sm-12">
							<label>Author</label>
							<input type="text" class="form-control" v-model="author">
						</div>	
			  		    <div class="form-group col-md-6 col-sm-12">
							<label>Publisher</label>
							<input type="text" class="form-control" v-model="publisher">
						</div>
						
					</div>
					
					
					<div class="form-group">
						<label for="author">Publisher Logo URL</label>
						<input type="url" class="form-control" v-model="publisher_logo_url" >
					</div>
					<div class="form-group">
						<label for="author">Logo Alt Text</label>
						<input type="text" class="form-control" v-model="logo_alt_text" >
					</div>
					
					<div class="form-group">
						<label for="author">Full Article Content</label>
						<textarea type="text" class="form-control" cols="50" rows="30" v-model="full_article_content" ></textarea>
					</div>
					
					
				
					
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">JSON-LD</h4>
				
<textarea class="form-control result" ref="json_result" cols="30" rows="25" id="result" readonly>
<!-- news Article Schema -->

<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "NewsArticle",
  "headline": "{{headline}}",
  "datePublished": "{{publish_date}}",
  "description": "{{description}}",
  "image": {
    "@type": "ImageObject",
    "height": "{{image_height}}",
    "width": "{{image_width}}",
    "url": "{{image_url}}"
  },
  "author": "{{author}}",
  "publisher": {
    "@type": "Organization",
    "logo": {
      "@type": "ImageObject",
      "url": "{{publisher_logo_url}}"
    },
    "name": "{{publisher}}"
  },
  "articleBody": "{{full_article_content}}"
}
</script>

<!-- /news Article Schema ends -->


</textarea>
				<div class="form-group">
					<button class="btn btn-primary my-2" v-on:click="copy_microdata">Copy Code</button>
					
				</div>
				<hr />
				<h4 class="card-title">Microdata</h4>
				
				<textarea class="form-control result" ref="microdata_result" cols="50" rows="25" id="result" readonly>
<!-- News Article Schema-->

<div itemscope itemtype="http://schema.org/NewsArticle">
    <h1 itemprop="headline">{{headline}}</h1>
    <span itemprop="datePublished" content="{{publish_date}}">{{publish_date}}</span>
    <span itemprop="description">{{description}}</span><br>
    <div itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
        <meta itemprop="height" content="{{image_height}}">
        <meta itemprop="width" content="{{image_width}}">
        <meta itemprop="url" content="{{image_url}}">
        <img src="{{image_url}}" alt="{{image_alt_text}}">
    </div>
    Author: <span itemprop="author">{{author}}</span><br>
    <div itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
        <div itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
            <meta itemprop="url" content="{{publisher_logo_url}}">
            <img src="{{publisher_logo_url}}" alt="{{logo_alt_text}}">
        </div>
        <span itemprop="name">{{publisher}}</span>
    </div>
    <span itemprop="articleBody">{{full_article_content}}</span>
</div>

<!-- News Article Schema-->
				</textarea>
				<div class="form-group">
					<button class="btn btn-primary my-2" v-on:click="copy_json">Copy Code</button>
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
				headline:'',
				description:'',
				publish_date:'',
				image_url:'',
				image_width:'',
				image_height:'',
				author:'',
				publisher:'',
				publisher_logo_url:'',
				full_article_content:'',
				logo_alt_text:'',
				image_alt_text:'',

				microdata_result:'',
				json_result:'',

			}
		},
		methods:{
			copy_microdata:function(){
				this.$refs.json_result.select();
				document.execCommand('copy');

			},
			copy_json:function(){
				this.$refs.microdata_result.select();
				document.execCommand('copy');
			}
		}
	}
</script>

