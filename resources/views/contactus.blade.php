@extends('index')
@section('content')
	<br><br><br><br>
	<div class="container">
		<section>
			
			<div class="row">

				<div class="col-sm-4">
					<h2>We are happy to hear your suggestions.</h2>
					<form>

						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your name here ...">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your email here ...">
						</div>
						<div class="form-group">
							<textarea rows="20" cols="10" class="form-control" placeholder="Your message here ..."></textarea>
						</div>
						<div class="pull-right">
							<input type="submit" class="btn btn-success" value="Send Message">
						</div>

					</form>

				</div>
				<div class="clearfix">
				<div class="col-sm-8">
					<h2>Contact Details</h2>
					<p>Phone Number : (00) 000-0000</p>
					<p>Mobile Number : (+639) 000-0000-000</p>
					<p>FAX : 000-000-000</p>
					<h2>Office Location</h2>
					<p>Somewhere over the rainbow. Where seabirds fly.</p>
					<div id="gmap"></div>
					<script>
				      function initMap() {
				        var somewhereThere = {lat: 14.6206, lng: 120.9660};
				        var map = new google.maps.Map(document.getElementById('gmap'), {
				          zoom: 4,
				          center: somewhereThere
				        });
				        var marker = new google.maps.Marker({
				          position: somewhereThere,
				          map: map
				        });
				      }
				    </script>
				    <script async defer
				    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI7idZvSVWYVfnB4r6y9LH9Hc9U07rcXw&callback=initMap">
				    </script>
				</div>
			</div>
		</section>
		
	</div>
@endsection