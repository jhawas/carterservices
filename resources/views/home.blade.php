@extends('layouts.app')

@section('content')

<section class="section-banner">
    <div class="parallax-banner" data-parallax="scroll">
    	<div class="container banner-container">
    		<div class="row">
    			<div class="banner-content">
		    		<h1>look and contact best services for you.</h1>
		    		<p>Get Technicians that fit on your needs.</p>
		    	</div>
    		</div>
    	</div>
    </div>
</section>


<section class="section-works">
	<div class="container works-container">
		<h2>How it Works</h2>
		<div class="row">
			<div class="col-md-4 work">
				<span class="fa fa-check"></span>
				<h3>Find</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="col-md-4 work">
				<span class="fa fa-check"></span>
				<h3>Hire</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="col-md-4 work">
				<span class="fa fa-check"></span>
				<h3>Work</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
	</div>
</section>

<section class="section-quote">
			<div class="swiper-container">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide">
		            	<div class="container">
		            		<div class="row">
		            			<div class="col-md-12">
					            	<div class="row">
					            		<div class="col-md-6 text">
					            			<h2>Lorem ipsum dolor sit amet</h2>
					           				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					            		</div>
					            		<div class="col-md-6">
					            			<div class="image-container">
					            				<img src="{{asset('images/banner.jpeg')}}" alt="">
					            			</div>
					            		</div>
					            	</div>
					           	</div>
		            		</div>
		            	</div>
			        </div>
			        <div class="swiper-slide">
		            	<div class="container">
		            		<div class="row">
		            			<div class="col-md-12">
					            	<div class="row">
					            		<div class="col-md-6 text">
					            			<h2>Lorem ipsum dolor sit amet</h2>
					           				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					            		</div>
					            		<div class="col-md-6">
					            			<div class="image-container">
					            				<img src="{{asset('images/banner.jpeg')}}" alt="">
					            			</div>
					            		</div>
					            	</div>
					           	</div>
		            		</div>
		            	</div>
			        </div>
			        <div class="swiper-slide">
		            	<div class="container">
		            		<div class="row">
		            			<div class="col-md-12">
					            	<div class="row">
					            		<div class="col-md-6 text">
					            			<h2>Lorem ipsum dolor sit amet</h2>
					           				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					            		</div>
					            		<div class="col-md-6">
					            			<div class="image-container">
					            				<img src="{{asset('images/banner.jpeg')}}" alt="">
					            			</div>
					            		</div>
					            	</div>
					           	</div>
		            		</div>
		            	</div>
			        </div>
			    </div>
			        <!-- Add Pagination -->
			    <div class="swiper-pagination"></div>
			    <div class="swiper-button-next"></div>
        		<div class="swiper-button-prev"></div>
		</div>
</section>


<section class="section-getstarted">
	<div class="parallax-started" data-parallax="scroll">
		<div class="background-container">
			<div class="container started-container">
				<div class="row">
					<div class="started-content">
						<h2>Let us help you</h2>
						<a href="#"><span class="started">Get Started</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
