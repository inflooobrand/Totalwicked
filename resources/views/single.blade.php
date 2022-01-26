<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>

<section class="rick-boder">
		<div class="container">
			<div class="rick-menu-box">
				<div class="rick-image-img">
					<img src="{{ $data['image'] }}" height="" class="image-curve" width="" width="" alt="">
				</div>
				
				<div class="rick-description">
					<span class="text_style"><h3>{{$data['name']}}</h3></span>
					<div class="alive_status">
						@if($data['status']=='Alive')
						<span class="circle_green "></span>
						@elseif($data['status']=='Dead')
						<span class="circle_red"></span>
						@else($data['status']=='Unknown')
						<span class="circle_gray"></span>
						@endif
						<div class="status_dead">	
						<p class="size-p">{{$data['status']}} <span>- {{$data['species']}}</span></p>
						</div>
					</div>
					<div class="section">
						<span class="text-gray">Last known location:</span><br>
						<div class="space_location">							
						<a href="api/location/{{$data['id']}}" rel="" target="_blank" class="location_link">{{$data['location']['name']}}</a>
						</div>
					</div>
					<br>
					<div class="section">
						<span class="text-gray">First seen in:</span><br>
						<?php 
							$id=$details['id'];
							$result= App\Http\Controllers\TotallywickedController::getEpisode($id);
							
						?>

						<a href="api/episode/{{ $data['id'] }}" rel="" target="_blank" class="location_link space">{{$result['name']}}</a>
					</div>

				</div>

			</div>
			<!-- <div class="clear-space1"></div> -->
		</div>	
</section>
</body>
</html>




<style type="text/css">
	*{padding: 0; margin: 0; box-sizing: border-box;}

body{
	scroll-behavior: smooth;
	overflow-x: hidden;
}
header{
	width: 100%;
	height: 90vh;
	background: linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.8)),
	url('/images/rick.jpg');
	background-size: cover;
	background-attachment: fixed;
}
nav{
	width: 100%;
	height: 50px;
	background: white;
	color: black;
	display: flex;
	justify-content: space-between;
	padding: 0px 80px;
	align-items: center;
	position: fixed;
	top: 0px;
}
.logo{
	font-family: fantasy;
	font-size: 1.5em;
}
.logo span{
	color: #e74c3c;
}
.menu a{
	text-decoration: none;
	color: black;
	padding: 10px 20px;
	font-family: sans-serif;
	font-size: 15px;
}
.menu a:first-child{
	color: #e74c3c;
}
.menu a:hover{
	color: #e74c3c;
}
.h-text{
	color: white;
	max-width: 700px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	text-align: center;
}
.h-text h1{
	font-family: sans-serif;
	font-size: 3em;
	line-height: 1.5em;
}
.h-text input{
	width: 80%;
	padding: 8px;
	border: none;
	outline: none;
	font-size: 20px;
	border-radius: 8px;
}
.h-text button{
	width: 10%;
	padding: 10px;
	background: #e74c3c;
	color: white;
	border: none;
	outline: none;
	border-radius: 8px;
	font-size: 20px;
}

.rick-boder{
	background-color: #491A11;
	padding: 1%;

}

.container{
	
	width: 80%;
	margin: 0 auto;
	padding: 10px;
	
}
.make-center{
	text-align: center;
	font-size: 2rem;
	color: #2f3542;
}
.rick-menu-box{
    margin-top: 108px !important;
    width: 62%;
    margin: 21%;
    float: left;
    padding: 0%;
    background-color: white;
    border-radius: 10px;
}
.rick-image-img{
	float: left;

}
.image-curve{
	border-radius: 15px;
}

.rick-description{
	margin-left: -9%;
	float: left;
	width: 55%;
}
.size-p{
	font-size: 1.2rem;
	margin: 2% 0;
}
.descrip{
	font-size: 1rem;
	color: #747d8c;
	margin: 3% 0;

}
.button{
	border-radius: 5px;
}
.button{
    border: 0.2px solid black;
    padding: 5px 10px;
    display: inline-block;
    font-size: 15px;
    margin: 1px auto;
    cursor: pointer;
    text-decoration:none;
    background-color: #ececec;
}
.size-p{
	font-size: 1.2rem;
	margin: 2% 0;
}
.descrip{
	font-size: 1rem;
	color: #747d8c;
	margin: 3% 0;

}
.clear-space1{
	padding: 30%;	
}

.rick-image-img img {
    width: 70%;
    height: 100%;
    margin: 0px;
    opacity: 1;
    transition: opacity 0.5s ease 0s;
    object-position: center center;
    object-fit: cover;
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

.alive_status{
	margin-top: 9px;
}
.status_dead{
	margin-top: -26px;
    margin-left: 11px;
}
.text_style{
	font-family: auto;
	font-size: 1.5rem;
	    clear: both;
    display: inline-block;
    overflow: hidden;
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

.location_link a{

}
.location_link a:hover{
	color: #e74c3c;
}
</style>