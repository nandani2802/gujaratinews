@extends('layouts.app')
@section('content')	
<!-- Breadcrumb -->

			
	<!-- Content -->
	<section class="bg0 p-b-70 p-t-5">
		<!-- Title -->
		@if(count($data)>0)
            @foreach($data as $row)
            
        <div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-10 p-tb-4">
			
			<div class="f2-s-1 p-r-30 m-tb-6" style="border-left:4px solid #17b978">
				<h1 style="font-size: 30px;margin-left:20px;color: #1C2833"><strong><?php echo $row->cnm;?></strong></h1>
			</div>
			
		</div>
		</div>

		<!-- Detail -->
		<div class="container p-t-">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-100">

					<div class="p-r-10 p-r-0-sr991">
						
						<div class="p-b-40">
						<br><p class="f1-l-5 cl0  txt-center respon2" style="color: #17b978;font-size: 30px">
							<?php echo $row->heading; ?>
						</p>
						<br>
						<p class="f1-s-11 cl6" style="margin-top: 10px">
								<?php echo $row->description; ?>
						</p>
						@if($row->image != "")
                	 	<br><br>
                	 	<?php 
                	 	$images = json_decode($row->image,true);
                	 	
                	 	$n = count($images);
                	 	$first = ceil($n/3);
                	 	$second = ceil(($n - $first)/2);
                	 	$third = $n-($first + $second);
                	 	
                	 	?>
                		
						
                		<br><br>
           				@endif  

           					<?php 
           						$i=0;
           						for ($i=0; $i < $first ; $i++) {?> 
           							<img src="../storage/app/public/<?php echo $images[$i]; ?>" height="300" width="100%" style="border: 1px solid #E5E8E8;border-radius: 3px">
           						<?php }
           					?>
           					<p class="f1-l-5 cl0  respon2" style="font-size: 20px;color: black;margin-top: 10px">
							<?php echo $row->heading2; ?>
							</p>
							<p class="f1-s-11 cl6 p-b-25" style="margin-top: 10px">
								<?php echo $row->Details; ?>
							</p>

							<p class="f1-s-11 cl6 p-b-25" style="margin-top: 10px">
								<?php echo $row->extraDetails; ?>
							</p>
							
							<?php

           						for ($i=$first; $i < $second + $first  ; $i++) { 
           							
           							?> 

           							<img src="../storage/app/public/<?php echo $images[$i]; ?>" height="300" width="100%" style="border: 1px solid #E5E8E8;border-radius: 3px">
           						<?php }
           					?>
           					<p class="f1-l-5 cl0  respon2" style="color:black;font-size: 20px;margin-top: 10px">
							<?php echo $row->heading3; ?>
							</p>
							<p class="f1-s-11 cl6 p-b-5"  style="margin-top: 10px">
								<?php echo $row->para_4; ?>
							</p>
							<br>
							<p class="f1-s-11 cl6 p-b-5" style="margin-top: 10px">
								<?php echo $row->para_5; ?>
							</p>
							

							<div class="fbemd">
		                		<div class="row">
		                			<div class="col-md-12 col-sm-12 col-lg-12">
		                				<center>
		                				<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>

								<?php 
								echo $row->FbEmd; 
								
								?></center>
		                			</div>
		                		</div>
								
							</div>

							<div class="Instaemd">
		                		<div class="row">
		                			<div class="col-md-12 col-sm-12 col-lg-12">
		                				<center>
		                				<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>

								<?php 
								echo $row->InstaEmd; 
								
								?></center>
		                			</div>
		                		</div>
								<!-- <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsurat.studyoverseas.5%2Fposts%2F115427730112188%3A1&width=500" width="500" height="535" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->
								
							</div>

							<div class="YTemd">
		                		<div class="row">
		                			<div class="col-md-12 col-sm-12 col-lg-12">
		                				<center>
		                				<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>

								<?php 
								echo $row->YoutubeEmd; 
								
								?></center>
		                			</div>
		                		</div>
								
							</div>

							<div class="twitcls">
								<center>
								<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>

								<?php 
								echo $row->twitEmd; 
								
								?></center>
							</div>


							<?php 
           						for ($i=$first + $second ; $i < $n ; $i++) {?> 
           							<img src="../storage/app/public/<?php echo $images[$i]; ?>" height="300" width="100%" style="border: 1px solid #E5E8E8;border-radius: 3px">
           						<?php }
           					?>
           					<p class="f1-s-11 cl6" style="color:black;font-size: 20px;margin-top: 10px">
								<?php echo $row->heading4; ?>
							</p>
							<p class="f1-s-11 cl6 p-b-25"  style="margin-top: 10px">
								<?php echo $row->para_6; ?>
							</p>



		                	

							@if($row->video != "[]")
                			
		                    <?php
		                        $myvideo = JSON_decode($row->video);
		                      ?>
		                    <video width="100%" height="400" controls>   

		                        <source src="../storage/app/public/{{$myvideo[0]->download_link}}" type="video/mp4">
		                    </video>
		                	
		                	@endif


		                	@if($row->audio != "[]")
			                <center>
			                    <?php
			                        $myaudio = JSON_decode($row->audio);
			                      ?>
			                    <audio width="100%" height="400" controls>   

			                        <source src="../storage/app/public/{{$myaudio[0]->download_link}}" type="video/mp4">
			                    </audio>
			                </center>
			                @endif
							<br>

							<p class="f1-s-11 cl6 "  style="color:black;font-size: 20px;margin-top: 10px">
								<?php echo $row->heading5; ?>
							</p>
							<br>
							<p class="f1-s-11 cl6 p-b-5"  style="margin-top: 10px">
								<?php echo $row->para_7; ?>
							</p>
							


							

							<!-- <div class="flex-s-s" style="margin-top: 10px">
								<span class="f1-s-12 cl5 p-t-1 m-r-15">
									
								</span>
								
								<div class="flex-wr-s-s size-w-0">
									<a href="#" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-facebook-f m-r-7"></i>
										Facebook
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-twitter m-r-7"></i>
										Twitter
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-google-plus-g m-r-7"></i>
										Google+
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-pinterest-p m-r-7"></i>
										Pinterest
									</a>
								</div>
							</div> -->


						</div>

						
						<div>
							@if(\Session::has('success'))
                			<div class="alert alert-success">
                  				<p>{{\Session::get('success')}}</p>
              				</div>
              				@endif
							<h4 class="f1-l-4 cl3 p-b-12">
								Leave a Comment
							</h4>

							<p class="f1-s-13 cl8 p-b-40">
								Your email address will not be published. Required fields are marked *
							</p>

							<form method="post" role="form"  action="{{url('Commentstore')}}">
								@csrf
								<textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="message" placeholder="Comment..."></textarea>

								<input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="name" placeholder="Name*">

								<input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="email" placeholder="Email*">

								<!-- <input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="website" placeholder="Website"> -->
								<input type="submit" name="submit" value="Post Comment" class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10">
								
							</form>
						</div>
					</div>
				</div>
				
				<div class="col-md-10 col-lg-4 p-b-100">
					<div class="p-l-10 p-rl-0-sr991">
						
						<div class="flex-c-s">
							<a href="#">
								<img class="max-w-full" src="images/banner-02.jpg" alt="IMG">
							</a>
						</div>
					</div>
					<br><br>
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
				</div>
			</div>

			<div class="row">
				<div class="how2 how2-cl4 flex-s-c" style="width: 100%">
					<h3 class="f1-m-2 cl3 tab01-title">
						Related News
					</h3>
				</div>
			</div>
			<br>
			<div class="row">
				@if(count($RelData)>0)
            	@foreach($RelData as $Rdata)
            	@if($Rdata->cnm == $row -> cnm)
				<div class="col-md-3 col-lg-3 p-b-30" style="border-right: 1px dotted #ABB2B9">
						<center>
						<?php 
                	 		$images = json_decode($Rdata ->image,true);
                		?>
						<a href="blogview?nid=<?php echo $Rdata->id; ?>" class="size-w-4 wrap-pic-w hov1 trans-03">
                         <img src="../storage/app/public/{{$images[0]}}" alt="IMG" height="60" width="60"></a>
                         <br>
						<a href="blogview?nid=<?php echo $Rdata->id; ?>" style="color:#0B5034"><p><?php echo $Rdata->heading; ?></p></a>
						</center>
				</div>
				@endif
				@endforeach
				@endif
			</div>
		</div>
		@endforeach
        @endif
	</section>


	

	@endsection