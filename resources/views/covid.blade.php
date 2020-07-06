@extends('layouts.app')
@section('content')	
<div class="container-fluid">
	@if(count($casedata)>0)
	@foreach($casedata as $CData)
	<div class="row" style="  background-image: linear-gradient(to right, #2d3945 , #05101A);padding: 10px">
		<div class="col-md-12" style="margin-top: 20px;color: white">
			<center>
			<p style="font-size: 30px;font-family: Bahnschrift ">COVID - 19 <?php echo strtoupper($CData->area);?></p>
			
		</center>
		</div>
	</div>

	<div class="row" style="  background-image: linear-gradient(to right, #2d3945 , #05101A);padding: 10px;padding-bottom: 20px">

		<div class="col-md-1 col-lg-1 col-sm-12"></div>
		<div class="col-md-2 col-lg-2 col-sm-12" style="background-image: url('images/covid/white.jpg');color: black;margin-top:20px;height:200px;border-radius: 5px;margin-left: 7px;padding-top: 20px">
			<center><img src="images/covid/medical-report.png">
			
			<h2 style="margin-top: 10px;font-size: 15px"><strong style="font-size: 25px"><?php echo $CData->positive?></strong> Cases</h2>
			<p style="color: #17b978">Confimed/Positive</p>
			</center>
		</div>
		<div class="col-md-2 col-lg-2 col-sm-12" style="background-image: url('images/covid/white.jpg');color: black;margin-top:20px;height:200px;border-radius: 5px;margin-left: 7px;padding-top: 20px">
			<center><img src="images/covid/activism.png">
			<h2 style="margin-top: 10px;font-size: 15px"><strong style="font-size: 25px"><?php echo $CData->activeCase?></strong> Cases</h2>
			<p style="color: #17b978">Active Cases</p>
			</center>
		</div>
		<div class="col-md-2 col-lg-2 col-sm-12" style="background-image: url('images/covid/white.jpg');color: black;margin-top:20px;height:200px;border-radius: 5px;margin-left: 7px;padding-top: 20px">
			<center><img src="images/covid/wellness.png">
			<h2 style="margin-top: 10px;font-size: 15px"><strong style="font-size: 25px"><?php echo $CData->recovered?></strong> Cases</h2>
			<p style="color: #17b978">Patient Recovered</p>
			</center>
		</div>
		<div class="col-md-2 col-lg-2 col-sm-12" style="background-image: url('images/covid/white.jpg');color: black;margin-top:20px;height:200px;border-radius: 5px;margin-left: 7px;padding-top: 20px">
			<center><img src="images/covid/rose.png">
			<h2 style="margin-top: 10px;font-size: 15px"><strong style="font-size: 25px"><?php echo $CData->death?></strong> Cases</h2>
			<p style="color: #17b978">Total Death</p>
			</center>
		</div>
		<div class="col-md-2 col-lg-2 col-sm-12" style="background-image: url('images/covid/white.jpg');color: black;margin-top:20px;height:200px;border-radius: 5px;margin-left: 7px;padding-top: 20px">
			<center><img src="images/covid/quarantine.png">
			<h2 style="margin-top: 10px;font-size: 15px"><strong style="font-size: 25px"><?php echo $CData->totalCase?></strong>Cases</h2>
			<p style="color: #17b978">Total Case</p>
			</center>
		</div>
		<div class="col-md-1 col-lg-1 col-sm-12" ></div>
	</div>
	@endforeach
	<br>
	<div class="row">
		<div class="col-md-12" >
			<img  src="images/banner-01.jpg" width="100% " >
			<!-- <center><p>hello</p></center> -->
		</div>
	</div>
	@endif
</div>
@endsection