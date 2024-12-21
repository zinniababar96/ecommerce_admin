<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<style type="text/css">

		

	</style>
</head>
<body>

@extends('clothes.master')


@section('data')




<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="banner1.jpg" class="d-block w-100" alt="banner 1">
    </div>
    <div class="carousel-item">
      <img src="banner2.jpg" class="d-block w-100" alt="banner 2">
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<hr>
<div class="row">
  <div class="col-sm-12 col-lg-6"><img src="{{asset('images/kurta.jpg')}}" width=200px height=250px>
<br>
<a href="{{URL('stiched')}}" class="text-reset">Stiched</a>
</div>
  <div class="col-sm-12 col-lg-6"><img src="{{asset('images/white.jpg')}}" width=200px height=250px>
<br>
<a href="{{URL('unstiched')}}" class="text-reset">Unstiched</a></div>
<div class="row">
  <div class="col-sm-12 col-lg-6"><img src="{{asset('images/bluekurta.jpg')}}" width=200px height=250px>
<br>
<a href="{{URL('Men')}}" class="text-reset">Men</a>
</div>
  <div class="col-sm-12 col-lg-6"><img src="{{asset('images/Kids.jpg')}}" width=200px height=250px>
<br>
<a href="{{URL('Kids')}}" class="text-reset">Kids</a></div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
@endsection


  


