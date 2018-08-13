@extends('layouts.app')

@section('title', 'Welcome To FootyPortal')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex justify-content-center align-items-center">
						<div class="banner-content col-lg-9 col-md-12 justify-content-center ">
							<h1>
								Welcome to FootyPortal		
							</h1>
							<h2 class="text-white mx-auto">AI-Powered Sentiment Analysis for Football</h2>
							<p class="text-white mx-auto">
								Want to know how fellow fans are feeling about your club? Well we've hooked our powerful system into Twitter to instantly show you what they're saying.</p>

							<p class="text-white mx-auto">
								Start by choosing your team below:
							</p>
							<a href="#" class="primary-btn header-btn text-uppercase mt-10">Get Started</a>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->									

			<!-- Start brands Area -->
			<section class="brands-area pb-60 pt-60">
				<div class="container no-padding">
					<div class="brand-wrap">
						<div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
							<div class="col single-brand">
								<a href="/clubs/1"><img class="mx-auto" src="img/club1.png" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="/clubs/2"><img class="mx-auto" src="img/club2.png" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="/clubs/3"><img class="mx-auto" src="img/club3.png" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="/clubs/4"><img class="mx-auto" src="img/club4.png" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="/clubs/5"><img class="mx-auto" src="img/club5.png" alt=""></a>
							</div>		
							<div class="col single-brand">
								<a href="/clubs/6"><img class="mx-auto" src="img/club6.png" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="/clubs/7"><img class="mx-auto" src="img/club7.png" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="/clubs/8"><img class="mx-auto" src="img/club8.png" alt=""></a>
							</div>	
							<div class="col single-brand">
								<a href="/clubs/9"><img class="mx-auto" src="img/club9.png" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="/clubs/10"><img class="mx-auto" src="img/club10.png" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="/clubs/11"><img class="mx-auto" src="img/club11.png" alt=""></a>
							</div>	
							<div class="col single-brand">
								<a href="/clubs/12"><img class="mx-auto" src="img/club12.png" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="/clubs/13"><img class="mx-auto" src="img/club13.png" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="/clubs/14"><img class="mx-auto" src="img/club14.png" alt=""></a>
							</div>	
							<div class="col single-brand">
								<a href="/clubs/15"><img class="mx-auto" src="img/club15.png" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="/clubs/16"><img class="mx-auto" src="img/club16.png" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="/clubs/17"><img class="mx-auto" src="img/club17.png" alt=""></a>
							</div>			
							<div class="col single-brand">
								<a href="/clubs/18"><img class="mx-auto" src="img/club18.png" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="/clubs/19"><img class="mx-auto" src="img/club19.png" alt=""></a>
							</div>
							<div class="col single-brand">
								<a href="/clubs/20"><img class="mx-auto" src="img/club20.png" alt=""></a>
							</div>					
						</div>																			
					</div>
				</div>	
			</section>
			<!-- End brands Area -->	
@endsection