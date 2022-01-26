<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Rick and Morty</title>
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<header>
	<nav>
		<div class="logo">
			Rick <span>Morty</span>
		</div>
	</nav>
	<section class="h-text">
		<!-- <h1>Search by names</h1> -->
		<input type="text" name="" placeholder="Search here....">
		<button><i class="fa fa-search"></i></button>
	</section>
</header>

<body>
	<div class="display" style="background: rgb(36, 40, 47);">
		<div class="container">
			<div class="row">
	@foreach ($data as $user)
				<div class="card">
					<img src="{{ $user['image'] }}"  class="image-curve" alt="">
					<div class="">
						<a href="api/character/{{$user['id']}}" rel="" target="_blank" class="location_link">
						<span class="text_style"><h3>{{$user['name']}}</h3></span>
						</a>
					</div>
					<div class="alive_status">
						@if($user['status']=='Alive')
						<span class="circle_green "></span>
						@elseif($user['status']=='Dead')
						<span class="circle_red"></span>
						@else($user['status']=='Unknown')
						<span class="circle_gray"></span>
						@endif
						<div class="status_dead">	
						<p class="size-p">{{$user['status']}} <span>- {{$user['species']}}</span></p>
						</div>
					</div>

					<div class="section">
						<span class="text-gray">Last known location:</span>
						<div class="space_location">							
						<a href="{{$user['location']['url']}}" rel="" target="_blank" class="location_link">{{$user['location']['name']}}</a>
						</div>
					</div>

					<div class="section">
						<span class="text-gray">First seen in:</span><br>
						<?php 
							$id=$user['id'];
							$result= App\Http\Controllers\TotallywickedController::getEpisode($id);
							
						?>
						<a href="api/episode/{{ $user['id'] }}" rel="" target="_blank" class="">{{$result['name']}}</a>
					</div>
				</div>
	@endforeach
			</div>
		</div>
	</div>
</body>
</html>