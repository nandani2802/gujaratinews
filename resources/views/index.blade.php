@extends('layouts.app')
@section('content')	
	<!-- corona panel -->
	<div class="container-fluid">
	@if(count($Gujdata)>0)
	<div class="row" style="  background-image: linear-gradient(to right, #2d3945 , #05101A);padding: 10px">
		<div class="col-md-12" style="margin-top: 10px;color: white">
			
			<p style="font-size: 30px;font-family: Bahnschrift ">COVID-19 Updates : Gujarat<img src="images/covid/live1.gif" height="30"> </p>
			
		
		</div>
	</div>

	<div class="row" style="  background-image: linear-gradient(to right, #2d3945 , #05101A);padding: 10px;padding-bottom: 20px">
		@foreach($Gujdata as $GData)
		<div class="col-md-1 col-lg-1 col-sm-12"></div>
		<div class="col-md-2 col-lg-2 col-sm-12" style="background-image: url('images/covid/white.jpg');color: black;margin-top:5px;height:100px;border-radius: 5px;margin-left: 7px;padding:5px">
			<center><img src="images/covid/medical-report.png" height="40">
			
			<h2 style="margin-top: 5px;font-size: 10px"><strong style="font-size: 15px"><?php echo $GData->positive; ?></strong> Cases</h2>
			<p style="color: blue"><b>Confimed/Positive</b></p>
			</center>
		</div>
		<div class="col-md-2 col-lg-2 col-sm-12" style="background-image: url('images/covid/white.jpg');color: black;margin-top:5px;height:100px;border-radius: 5px;margin-left: 7px;padding:5px">
			<center><img src="images/covid/activism.png" height="40">
			<h2 style="margin-top: 5px;font-size: 10px"><strong style="font-size: 15px"><?php echo $GData->activeCase; ?></strong> Cases</h2>
			<p style="color: #E56D14"><b>Active Cases</b></p>
			</center>
		</div>
		<div class="col-md-2 col-lg-2 col-sm-12" style="background-image: url('images/covid/white.jpg');color: black;margin-top:5px;height:100px;border-radius: 5px;margin-left: 7px;padding:5px">
			<center><img src="images/covid/wellness.png" height="40">
			<h2 style="margin-top: 5px;font-size: 10px"><strong style="font-size: 15px"><?php echo $GData->recovered; ?></strong> Cases</h2>
			<p style="color: #17b978"><b>Patient Recovered</b></p>
			</center>
		</div>
		<div class="col-md-2 col-lg-2 col-sm-12" style="background-image: url('images/covid/white.jpg');color: black;margin-top:5px;height:100px;border-radius: 5px;margin-left: 7px;padding:5px" >
			<center><img src="images/covid/rose.png" height="40">
			<h2 style="margin-top: 5px;font-size: 10px"><strong style="font-size: 15px"><?php echo $GData->death; ?></strong> Cases</h2>
			<p style="color: red"><b>Total Death</b></p>
			</center>
		</div>
		<div class="col-md-2 col-lg-2 col-sm-12" style="background-image: url('images/covid/white.jpg');color: black;margin-top:5px;height:100px;border-radius: 5px;margin-left: 7px;padding:5px">
			<center><img src="images/covid/quarantine.png" height="40">
			<h2 style="margin-top: 5px;font-size: 10px"><strong style="font-size: 15px"><?php echo $GData->totalCase; ?></strong> Cases</h2>
			<p style="color: #B91B3C"><b>Total Cases</b></p>
			</center>
		</div>
		<div class="col-md-1 col-lg-1 col-sm-12" ></div>
		@endforeach
	</div>
	<br>
	@endif
</div>
	



	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">

			<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c" style="font-size: 15px">
				<strong>
				<span class="text-uppercase cl2 p-r-8" style="color: red">
					LATEST NEWS:
				</span>
				
				<span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
				@if(count($TNdata)>0)
                @foreach($TNdata as $TNews)

					<span class="dis-inline-block slide100-txt-item animated visible-false">
						<a href="blogview?nid=<?php echo $TNews->id; ?>" style="color: gray">{{$TNews->heading}}</a>
					</span>
				@endforeach
				@endif
					
				</span>
				</strong>
			</div>

			<!-- <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				<form class="form-group">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" id="search1" name="searchtxt"  placeholder="Search">
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03 btn">
					<i class="zmdi zmdi-search"></i>
				</button>
				</form>
			</div> -->
			

		</div>
	</div>

	
			<!-- Feature post -->
	
	<section class="bg0">
		<div class="container">
			
			
			<div class="row m-rl--1">
				@if(count($TNdata)>0)
                @foreach($TNdata as $TNews)
				<div class="col-sm-6 col-lg-4 p-rl-1 p-b-2 col-md-3" style="padding:5px;margin-bottom: 5px;border-left: 1px solid #E5E8E8">
					<br>
					<?php 
                	 	$images = json_decode($TNews->image,true);
                	?>
         
					<center><a href="blogview?nid=<?php echo $TNews->id; ?>"><img src="../storage/app/public/{{$images[0]}}" height="300" width="300"></a></center><br>
					<a href="blogview?nid=<?php echo $TNews->id; ?>" class="f1-m-1 cl0 hov-cl10 trans-03" style="color: #1C2833;color: #17b978;font-size: 15px">
									<?php echo $TNews->heading; ?>
					</a><br>
					<a href="blogview?nid=<?php echo $TNews->id; ?>" class="f1-m-1 cl0 hov-cl10 trans-03" style="color: #1C2833;font-size: 15px;font-family:calibri">
									<?php 
									$format = "d M Y H:i:s";
									echo date($format,strtotime($TNews->created_at)); ?>
					</a>
                    <br>
					
				
				</div>
				<br>
				@endforeach
				@endif
			</div>
		</div>
	</section>

	<!-- Post -->
	<section class="bg0 p-t-70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					@if(count($Allcategory)>0)
					@foreach($Allcategory as $AllCat)
					<div class="tab01 p-b-20">
						@if(count($Allnews) > 0)
							<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl12 tab01-title">
									{{$AllCat->cname}}
								</h3>


								<!--  -->
								<a href="CatWiseNews?cid=<?php echo $AllCat->id; ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03" style="margin-left: 420px">
									View all
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>
						@endif
						<br>
						<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
						<div class="row">
							
							<div class="col-sm-12 p-r-25 p-r-15-sr991">
											<!-- Item post -->
											@foreach($Allnews as $Anews)
											@if($Anews->catid == $AllCat->id)	
											<div class="flex-wr-sb-s m-b-30">
												<?php 
                	 								$images = json_decode($Anews->image,true);
                								?>
												<a href="blogview?nid=<?php echo $Anews->id; ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="../storage/app/public/{{$images[0]}}" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<strong><a href="blogview?nid=<?php echo $Anews->id; ?>" class="f1-s-5 cl3 hov-cl10 trans-03" style="color: #085F5F">
															{{$Anews -> heading}}
														</a></strong>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																
														</a>

														<span class="f1-s-3 m-rl-3">
															
														</span>

														<span class="f1-s-3" style="color: ##85929E">
															<?php 
									$format = "d M Y H:i:s";
									echo date($format,strtotime($Anews->created_at)); ?>
														</span>
													</span>
												</div>
											</div>
											@endif
											@endforeach
											
							</div>
						</div>
						</div>
					</div>
					@endforeach
					@endif
				</div>
				<div class="col-md-2 col-lg-4">
					<div class="p-l-10 p-rl-0-sr991 p-b-20">
						<!--  -->
						<div>
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
									<a href="blogview?nid=<?php echo $PopNews->id; ?>" class="size-w-4 wrap-pic-w hov1 trans-03">
									<?php 
                	 					$images = json_decode($PopNews->image,true);
                					?>
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
						<div class="flex-c-s p-t-8">
							<a href="#">
								<img class="max-w-full" src="images/banner-02.jpg" alt="IMG">
							</a>
						</div>
						
						<!--  -->
						<div class="p-t-50">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Stay Connected
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
										<span class="fab fa-facebook-f"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											6879 Fans
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Like
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
										<span class="fab fa-twitter"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											568 Followers
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Follow
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
										<span class="fab fa-youtube"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											5039 Subscribers
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Subscribe
										</a>
									</div>
								</li>
							</ul>

							
						</div>
					</div>

					<div>
					@if(count($Videodata)>0)
					<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Videos
								</h3>
					</div>
					<br>
					@foreach($Videodata as $Vdata)
					<p>{{$Vdata->title}}</p>
					@if($Vdata->video != "")
					<?php
                        $myvideo = JSON_decode($Vdata->video);
                    ?>
					<video height="200" width="330" controls>
						<source src="../storage/app/public/{{$myvideo[0]->download_link}}" type="video/mp4">
					</video>
					@endif
					<br>
					@endforeach
					@endif
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- Banner -->
	<div class="container">
		<div class="flex-c-c">
			<a href="#">
				<img class="max-w-full" src="images/banner-01.jpg" alt="IMG">
			</a>
		</div>
	</div>

	
	<script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>
<script type="text/javascript">
  
  $(document).ready(function(){

    fetch_customer_data();

    function fetch_customer_data(query = '')
    {
      // console.log(query);
      $.ajax({
          url:"{{ route('index.action') }}",
          method:'GET',
          data:{query:query},
          dataType:'json',
          success:function(data)
          {
            $('#results').html(data.table_data);
            $('#total_records').text(data.total_data); 
          }
      })
    }
    $(document).on('keyup','#search1',function(){
    	
        var query = $(this).val();
        fetch_customer_data(query); 
    });
  });
</script>
@endsection