@extends('layouts.app')
@section('content')	

	<!-- Breadcrumb -->
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="index.html" class="breadcrumb-item f1-s-3 cl9">
					Home 
				</a>

				<span class="breadcrumb-item f1-s-3 cl9">
					About Us
				</span>
			</div>

			
		</div>
	</div>

	<!-- Page heading -->
	<div class="container p-t-4 p-b-35">
		<h2 class="f1-l-1 cl2" style="color: #162E44">
			About Us
		</h2>
	</div>

	<!-- Content -->
	<section class="bg0 p-b-110">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991">
						<p class="f1-s-11 cl6 p-b-25" style="font-size: 15px;color: #4E5256">
							દેશ અને દુનિયામાં વસતા ગુજરાતીઓ અને ગુજરાતી ભાષા પ્રેમીઓ માટે ખુબજ સચોટ, નિષ્પક્ષ અને વિશ્લેષણાત્મક ખબરો,માહિતીને  ચિત્રો, કેરેક્ટરો અને પુરાવા સહીત રજુ કરતુ એકમાત્ર સોશિયલ મીડિયા પોર્ટલ.
આ સાથે આપ જાણી શકશો આરોગ્ય, એજ્યુકેશન, ટેકનોલોજી, અવનવા અને અજબ-ગજબના અહેવાલો આપની પોતાની  ગુજરાતી ન્યુઝ ૨૪ પર.

						</p>

					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-md-5 col-lg-4 p-b-30">
					<div class="p-l-10 p-rl-0-sr991 p-t-5">
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