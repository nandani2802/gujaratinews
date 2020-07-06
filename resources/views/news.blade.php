@extends('layouts.app')
@section('content')	

	<!-- Page heading -->
	<br>
	<div class="container-fluid p-t-4 p-b-40" style="margin-left: 150px">
		
		<div class="row">
		<div class="col-md-12 col-lg-12 f2-s-1 p-r-30 m-tb-6" style="border-left:4px solid #17b978">
				<h1 style="font-size: 30px;margin-left:20px;color: #1C2833;text-shadow: 2px 1px #fff;"><strong>સમાચાર યાદી</strong></h1>
		</div>
		<hr>
		</div>
	</div>

	<!-- Post -->
	<section class="bg0 p-b-55">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-80">
					<div class="p-r-10 p-r-0-sr991">
						<div class="m-t--65 p-b-40">
							<!-- Item Blog -->
							@if(count($data)>0)
           					@foreach($data as $row)
							<div class="flex-col-s-c how-bor2 p-t-65 p-b-40">

								<a href="#" class="f1-s-10 cl2 text-uppercase txt-center hov-cl10 trans-03 p-b-10">
									@if($flag == 1)
										<?php echo $row->cname; ?>
									@endif
								</a>
								<h5 class="p-b-10 txt-center">
									<a href="#" class="f1-l-1 cl2 hov-cl10 trans-03 respon2" style="color:#17b978">
										<?php echo $row->heading; ?>
									</a>
								</h5>

								<div class="cl8 txt-center p-b-24">
									<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
										by Gujarati News 24
									</a>

									<span class="f1-s-3 m-rl-3">
										
									</span>

									<span class="f1-s-3">
										
									</span>
								</div>
								<?php 
                	 				$images = json_decode($row->image,true);
                	 			?>

								
						         	<img src="../storage/app/public/{{$images[0]}}" height="300" width="100%" style="border-radius: 6px">
						     	
								
								<br>
								<p class="f1-s-11 cl6 txt-center p-b-22" style="font-size: 12px">
									<?php echo $row->description; ?>
								</p>

								<a href="blogview?nid=<?php echo $row->id; ?>" class="f1-s-1 cl9 hov-cl10 trans-03">
									Read More
									<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
								</a>
							</div>
							@endforeach
							<!-- Pagination -->
							<div class="flex-wr-c-c m-rl--7 p-t-15">
							{{$data->links()}}
							
							</div>
        					@endif
							
						</div>


					</div>
				</div>

				<div class="col-md-10 col-lg-4 p-b-80">
					<div class="p-l-10 p-rl-0-sr991">							
						<!-- Subscribe -->
						<!--<div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-50">
							<h5 class="f1-m-5 cl0 p-b-10">
								Gujarati News 24
							</h5>

							<p class="f1-s-1 cl0 p-b-25">
								દરેક ગુજરાતી જાણશે સત્ય
							</p>

							<form class="size-a-9 pos-relative">
								<input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">

								<button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
									<i class="fa fa-arrow-right"></i>
								</button>
							</form>
						</div>-->

						<!-- Most Popular -->
						<div class="p-b-23">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Most Popular
								</h3>
							</div>

							<ul class="p-t-35">
							@if(count($Mdata)>0)
                   	 		@foreach($Mdata as $PopNews)
								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
									<?php 
                	 				$images = json_decode($PopNews->image,true);
                	 				?>
                					
									<a href="blogview?nid=<?php echo $PopNews->id; ?>" class="size-w-4 wrap-pic-w hov1 trans-03">
                                    <img src="../storage/app/public/{{$images[0]}}" alt="IMG" height="30" width="30"></a>
									</div>
									<a href="blogview?nid=<?php echo $PopNews->id; ?>" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										<?php echo $PopNews->heading; ?>
									</a>
								</li>
							@endforeach
							@endif
								
							</ul>
						</div>

						<!--  -->
						<div class="flex-c-s p-b-50">
							<a href="#">
								<img class="max-w-full" src="images/banner-02.jpg" alt="IMG">
							</a>
						</div>
						
						<!-- Tag -->
						<!--<div>
							<div class="how2 how2-cl4 flex-s-c m-b-30">
								<h3 class="f1-m-2 cl3 tab01-title">
									Tags
								</h3>
							</div>

							<div class="flex-wr-s-s m-rl--5">
								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									રાજકારણ
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									મનોરંજન
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									વ્યવસાય
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									આરોગ્ય
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									રમતગમત
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									ઇન્ડિયા
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									વૈશ્વિક
								</a>
							</div>	
						</div>-->
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection