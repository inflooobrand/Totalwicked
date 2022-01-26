<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div class="box">
		<div class="imgBX">
			<img src="{{$details['image']}}">
		</div>
		<div class="content">
			<span class="text_style"><h3>{{$details['name']}}</h3></span>
						@if($details['status']=='Alive')
					<div class="alive_status">
						<span class="circle_green"></span>
						@elseif($details['status']=='Dead')
						<span class="circle_red"></span>
						@else($details['status']=='Unknown')
						<span class="circle_gray"></span>
						@endif
						<div class="status_dead">	
						<p class="size-p">{{$details['status']}} <span>- {{$details['species']}}</span></p>
						</div>
					</div>
					<div class="section"><br>
						<span class="text-gray">Last known location:</span>
						<div class="space_location">							
						<a href="api/location/{{$details['id']}}" rel="" target="_blank" class="location_link">{{$details['location']['name']}}</a>
						</div>
					</div>

					<div class="section"><br>
						<span class="text-gray">First seen in:</span><br>
						<?php 
							$id=$details['id'];
							$result= App\Http\Controllers\TotallywickedController::getEpisode($id);
							
						?>

						<a href="api/episode/{{ $result['id'] }}" rel="" target="_blank" class="location_link space">{{$result['name']}}</a>
					</div>
		</div>
	</div>
</body>
</html>
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		background: black;

	}
	.box{
		position: absolute;
		top: 50%;
		left: 50%;
		width: 600px;
		transform: translate(-50%,-50%);
		padding: 20px;
		box-sizing: border-box;
		background: #fff;
		border-radius: 4px;
		box-shadow: 0 5px 15px rgba(0,0,0,.5);
		display: flex;
		transform: .5s;
	}
	.box .imgBx{
		width:150px;
		flex: 0 0 150px;
	}
	.box .imgBx img{
		max-width: 100%;
	}
	.box .content{
		padding-left: 20px;
	}
	.box .content h2{
		margin: 0px;
		padding-left: 0;
		color: #ff005c;
		font-size:22px;
	}
	.box .content p{
		margin: 0;
		padding: 10px 0 0;
		text-align: justify;
	}
	.box:hover{
		box-shadow: 0 15px 30px rgba(0, 0, 0, 5);
	}
	.alive_status{
	margin-top: 0px;
}
.circle_green { 
	height: 0.5rem;
    width: 0.5rem;
  background: rgb(85, 204, 68);
  border-radius: 50%;
  display: inline-block;

 }

.circle_red { 
height: 0.5rem;
    width: 0.5rem;
  background: rgb(214, 61, 46);
  border-radius: 50%;
  display: inline-block;

 }
 .circle_gray { 
height: 0.5rem;
    width: 0.5rem;
    background: rgb(158, 158, 158);
  border-radius: 50%;
  display: inline-block;
 }
 .text-gray{	
color: rgb(158, 158, 158);
}
.space_location{
	margin-top: 14px;
	text-decoration: none;
	color: black;
	padding: -2px 2px;
	font-family: sans-serif;
	font-size: 15px;
}
.location_link{

text-decoration: none
}
.size-p{
	margin-left: 22px !important;
	margin-top: -28px !important;
}
.space{
	margin-top: 10px!important;
}
</style>