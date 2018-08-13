@extends('layouts.app')

@section('title', $club->clubname)

@section('content')
	<!-- start banner Area -->
	<section class="banner-area relative" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<img src= {{ $club->img_file_path }} alt={{ $club->clubname }} />
					<h1 class="text-white">
						Sentiment Level for {{ $club -> clubname }}
					</h1>	
					<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> {{ $club-> clubname}}</a></p>					
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- stat chart area -->
	<section class="service-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="single-widget">
						<div id="power-gauge"></div>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="single-widget">
						<div id='stacked-bar'></div>
					</div>
				</div>
			</div>		
			<div style="width:100%;height:50px"></div>
			<div class="row">
				<div class="col-sm-6">
					<div class="single-widget">
						<div id='best-container'></div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="single-widget">
						<div id="worst-container"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End chart Area -->

	<script src="/js/d3.v4.min.js" type="text/javascript"></script>
	<script src="/js/gauge.js" type="text/javascript"></script>
	<script src="/js/gauge-script.js" type="text/javascript"></script>

	<script src="/js/d3.layout.cloud.js" type="text/javascript"></script>
	<script src="/js/alea.min.js" type="text/javascript"></script>
	<script src="/js/wordcloud.js" type="text/javascript"></script>
	<script src="/js/show-wordcloud.js" type="text/javascript"></script>	
	<script src="/js/stackedbarchart.js" type="text/javascript"></script>	
	<script src="/js/show-stackedbarchart.js" type="text/javascript"></script>
@endsection