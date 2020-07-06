@extends('layouts.app')
@section('content')	
	

	<!-- Page heading -->
	<div class="container p-t-4 p-b-40">
		<h2 class="f1-l-1 cl2">
			Contact Us
		</h2>
	</div>

	<!-- Content -->
	<section class="bg0 p-b-60">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-8 p-b-80">
					<div class="p-r-10 p-r-0-sr991">
						@if(\Session::has('success'))
                		<div class="alert alert-success">
                  			<p>{{\Session::get('success')}}</p>
              			</div>
              			@endif
              		
						<form method="post" role="form" class="contactForm" action="{{url('store')}}">
							@csrf
							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="name" placeholder="Name" required="required">

							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="email" name="email" placeholder="Email" required="required">

							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="tel" name="pno" placeholder="Phone Number" required="required">

							<textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="message" placeholder="Your Message"></textarea>

							<input class="size-a-20 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-20" type="submit" name="submit" value="Send">

							
						</form>
					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-md-5 col-lg-4 p-b-80">
					<div class="p-l-10 p-rl-0-sr991">
						<!-- Popular Posts -->
						<div>
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Popular News
								</h3>
							</div>

							<ul class="p-t-35">
							@if(count($Mdata)>0)
                   	 		@foreach($Mdata as $PopNews)
								<li class="flex-wr-sb-s p-b-30">
									<a href="blogview?nid=<?php echo $PopNews->id; ?>" class="size-w-10 wrap-pic-w hov1 trans-03">
										
									<?php 
                	 					$images = json_decode($PopNews->image,true);
                					?>
                                    <img src="../storage/app/public/{{$images[0]}}" alt="IMG" >					
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blogview?nid=<?php echo $PopNews->id; ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
												<?php echo $PopNews->heading; ?>
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
											

											<span class="f1-s-3">
												<?php 
													$format = "d M Y ";
													echo date($format,strtotime($PopNews->created_at)); ?>
											</span>
										</span>
									</div>
								</li>
							@endforeach
							@endif

								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection