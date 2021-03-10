<template>
<div class="row">
	<div class="col-md-6 grid-margin stretch-card">
		<div class="card" >
			<div class="card-body">
				<!-- <h4 class="card-title">Aggratate Offer</h4> -->
				<h4 class="card-description my-2">
					Schema/JSON-LD for Event
				</h4>
				<form class="forms-sample">

					<div class="form-group">
						<label>Event Name </label>
						<input v-model="event_name" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea v-model="the_description"  class="form-control"  cols="50" rows="10"></textarea>
					</div>
					

					<div class="form-group">
						<label>Start Date (yyyy-mm-dd) </label>
						<input v-model="startDate" type="date" class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label>End Date (yyyy-mm-dd) </label>
						<input v-model="endDate" type="date" class="form-control" placeholder="">
					</div>
				

					<div class="form-group">
						<label>Location</label>
						<input v-model="location_name" type="text" class="form-control">
					</div>

					
						
			  		    <div class="form-group">
							<label>Street Address</label>
							<input v-model="street_address" type="text" class="form-control">
						</div>	
			  		    <div class="form-group">
							<label>City</label>
							<input v-model="city_name" type="text" class="form-control">
						</div>

				

			  		    <div class="form-group">
							<label>State / Province / Region</label>
							<input v-model="state_provience_region" type="text" class="form-control">
						</div>	
					
						
					
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6 grid-margin stretch-card">
		<div class="card" >
			<div class="card-body">
				<h4 class="card-title">JSON-LD</h4>
				
<textarea class="form-control result" ref="json_result" cols="50" rows="25" id="result" readonly>
<!-- Event Schema -->

<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Event",
  "name": "{{event_name}}",
  "description": "{{the_description}}",
  "startDate": "{{startDate}}",
  "endDate": "{{endDate}}",
  "location": {
    "@type": "Place",
    "name": "{{location_name}}",
    "address": {
      "streetAddress": "{{street_address}}",
      "addressLocality": "{{city_name}}",
      "addressRegion": "{{state_provience_region}}"
    }
  }
}
</script>

<!-- /Event Schema ends -->


</textarea>
				<div class="form-group">
					<button class="btn btn-primary my-2" v-on:click="copy_json" >Copy Code</button>
					
				</div>
				<hr />
				<h4 class="card-title">Microdata</h4>
				
				<textarea class="form-control result" ref="microdata_result" cols="50" rows="25" id="result" readonly>
<!-- Event Schema-->

<div itemscope itemtype="http://schema.org/Event">
    <span itemprop="name">{{event_name}}</span><br>
    <span itemprop="description">{{the_description}}</span><br>
    When: <time itemprop="startDate" datetime="{{startDate}}"></time> - 
    <time itemprop="endDate" datetime="{{endDate}}"></time><br>
    <div itemprop="location" itemscope itemtype="http://schema.org/Place">
        Where: <span itemprop="name">{{location_name}}</span><br>
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">{{street_address}}</span><br>
            <span itemprop="addressLocality">{{city_name}}</span><br>
            <span itemprop="addressRegion">{{state_provience_region}}</span> 
        </div>
    </div>
</div>

<!-- Event Schema-->
				</textarea>
				<div class="form-group">
					<button class="btn btn-primary my-2" v-on:click="copy_microdata" >Copy Code</button>
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
				event_name:'',
				the_description:'',
				startDate:'',
				endDate:'',
				location_name:'',
				city_name:'',
				street_address:'',
				state_provience_region:'',
				json_result:'',
				microdata_result:'',
			}
		},
		methods:{
			copy_json:function(){
				this.$refs.json_result.select();
				document.execCommand('copy');
			},
			copy_microdata:function(){
				this.$refs.microdata_result.select();
				document.execCommand('copy');
			}
		}
	}
</script>

