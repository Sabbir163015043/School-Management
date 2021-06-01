@extends('front.master')
@section('body')

<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url({{asset('/')}}front/images/img_bg_4.jpg);" >
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">আমাদের প্রতিষ্ঠান এর শিক্ষকমন্ডলী</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	<div id="fh5co-staff">
		<div class="container">
			<div class="row">
				@foreach($details as $key => $detail)
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url({{ asset($detail->image)  }});">
						</div>
						<span>{{ $detail->designation_name }}</span>
						<h3><a href="#">{{ $detail->tittle_name }}</a></h3>
						<p>{{ $detail->full_description }}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	
	</div>
@endsection
	
