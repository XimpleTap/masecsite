<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>MASEC Test site</title>


    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('css/carousel.css')}}" rel="stylesheet" />
    <script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>

	<div class="navbar-wrapper">
		<div class="container">
			<nav class="navbar navbar-custom navbar-static-top">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-head">
			     		<span class="fa fa-bars collapsible-bar"></span>
			      </button>
			      
			    </div>
			    <div class="collapse navbar-collapse" id="navbar-head">
			    	
			    	<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="{{ url('/') }}">Home</a></li>
						<li class=""><a href="{{ url('/aboutus') }}">About Us</a></li>
						<li class=""><a href="{{ url('/contactus') }}">Contact Us</a></li>
						<li class=""><a href="{{ url('/currentprojects') }}">Current Projects</a></li>
					</ul>
			    </div>
			  </div>
			</nav>
			
		</div>
	</div>
	@section('content')
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>

	  <div class="carousel-inner">
	  <!-- loaded from database -->
	    <div class="item active">
	      <img src="{{ asset('images/GamersLives.png') }}" alt="Please padesign na kayo :3">
	    </div>

	    <div class="item">
	      <img src="{{ asset('images/ShadesOfGrey.png') }}" alt="Please padesign na kayo :3">
	    </div>

	    <div class="item">
	      <img src="{{ asset('images/GGKids.png') }}" alt="Please padesign na kayo :3">
	    </div>
	  <!-- loaded from database -->
	  </div>

	  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<div class="container">
		<div class="articles row">
			<div class="article col-sm-3">
				<h2>Article Heading</h2>
				<div class="article-content">
				<p>Lorem ipsum dolor sit amet, vix mazim semper antiopam ne. Altera cetero quo ne. Mei in minimum accusam scripserit, duo sonet discere appellantur in. Modo illum eleifend ius et, no hinc error voluptatibus ius. Ex solet soleat mentitum eos.</p>
				</div>
				<div class="article-footer">
					<span class="pull-right">
						<a class="btn btn-default" href="#" role="button">Read More »</a>
					</span>
				</div>
			</div>
			<div class="article col-sm-3">
				<h2>Article Heading</h2>
				<div class="article-content">
				<p>Lorem ipsum dolor sit amet, vix mazim semper antiopam ne. Altera cetero quo ne. Mei in minimum accusam scripserit, duo sonet discere appellantur in. Modo illum eleifend ius et, no hinc error voluptatibus ius. Ex solet soleat mentitum eos.</p>
				</div>
				<div class="article-footer">
					<span class="pull-right">
						<a class="btn btn-default" href="#" role="button">Read More »</a>
					</span>
				</div>
			</div>
			<div class="article col-sm-3">
				<h2>Article Heading</h2>
				<div class="article-content">
				<p>Lorem ipsum dolor sit amet, vix mazim semper antiopam ne. Altera cetero quo ne. Mei in minimum accusam scripserit, duo sonet discere appellantur in. Modo illum eleifend ius et, no hinc error voluptatibus ius. Ex solet soleat mentitum eos.</p>
				</div>
				<div class="article-footer">
					<span class="pull-right">
						<a class="btn btn-default" href="#" role="button">Read More »</a>
					</span>
				</div>
			</div>
			<div class="article col-sm-3">
				<h2>Article Heading</h2>
				<div class="article-content">
				<p>Lorem ipsum dolor sit amet, vix mazim semper antiopam ne. Altera cetero quo ne. Mei in minimum accusam scripserit, duo sonet discere appellantur in. Modo illum eleifend ius et, no hinc error voluptatibus ius. Ex solet soleat mentitum eos.</p>
				</div>
				<div class="article-footer">
					<span class="pull-right">
						<a class="btn btn-default" href="#" role="button">Read More »</a>
					</span>
				</div>
			</div>
		</div>
	@endsection
	</div>
	@yield('content')
	<hr>
	
	
<body>

</body>
</html>
