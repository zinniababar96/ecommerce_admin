<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">

.container .image:hover {
      opacity: 0.3;
    }
    </style>
<body>

@extends('clothes.master')

@section('data')
<h1 class="bg-dark myHeadings">Stiched Clothes</h1>
@yield('showimages')
<hr>
<div class="container">
  <div class="row">
	  <div class="col-lg-4 col-sm-6">
      <img id="img1" class="img-thumbnail image" src="{{asset('images/pic1.jpg')}}" width=150px height=150px style="border: black 2px solid;">
      <br>
      <b>PKR 4,700</b>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions"
        id="rd1" value="0" onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio2">s</label>
        </div>
        <div class="form-check form-check-inline">
        <input 
        class="form-check-input" 
        type="radio" 
        name="inlineRadioOptions" 
        id="rd2" 
        value="1"
        onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio2">m</label>
        </div>
        <div class="form-check form-check-inline">
        <input 
        class="form-check-input" 
        type="radio" 
        name="inlineRadioOptions"
        id="rd3" 
        value="2"
        onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio3">l</label>
        </div>
        <br>
        <a href="{{URL('cart')}}">
        <input  type="button" 
    name="btn1" id="btn1" 
    value="Add to Cart"> </a> 
	
</div>

<div class="col-lg-4 col-sm-6">
      <img id="img1" class="img-thumbnail image" src="{{asset('images/pic5.jpg')}}" width=150px height=150px style="border: black 2px solid;">
      <br>
      <b>PKR 5,700</b>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions"
        id="rd1" value="0" onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio2">s</label>
        </div>
        <div class="form-check form-check-inline">
        <input 
        class="form-check-input" 
        type="radio" 
        name="inlineRadioOptions" 
        id="rd2" 
        value="1"
        onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio2">m</label>
        </div>
        <div class="form-check form-check-inline">
        <input 
        class="form-check-input" 
        type="radio" 
        name="inlineRadioOptions"
        id="rd3" 
        value="2"
        onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio3">l</label>
        </div>
        <br> 
        <a href="{{URL('cart')}}">
        <input  type="button"  name="btn1" id="btn1"  value="Add to Cart"></a> 
  
</div>

<div class="col-lg-4 col-sm-6">
  <img id="img1" class="img-thumbnail image" src="{{asset('images/pic3.jpg')}}" width=150px height=150px style="border: black 2px solid;">
      <br>
      <b>PKR 3,500</b>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions"
        id="rd1" value="0" onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio2">s</label>
        </div>
        <div class="form-check form-check-inline">
        <input 
        class="form-check-input" 
        type="radio" 
        name="inlineRadioOptions" 
        id="rd2" 
        value="1"
        onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio2">m</label>
        </div>
        <div class="form-check form-check-inline">
        <input 
        class="form-check-input" 
        type="radio" 
        name="inlineRadioOptions"
        id="rd3" 
        value="2"
        onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio3">l</label>
        </div>
        <br> 
        <a href="{{URL('cart')}}">
        <input  type="button" name="btn1" id="btn1" value="Add to Cart"></a>
  
</div>

</div>
<br>

  <div class="row">
    <div class="col-lg-4 col-sm-6">
      <img id="img1" class="img-thumbnail image" src="{{asset('images/pic4.jpg')}}" width=150px height=150px style="border: black 2px solid;">
      <br>
      <b>PKR 4,700</b>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions"
        id="rd1" value="0" onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio2">s</label>
        </div>
        <div class="form-check form-check-inline">
        <input 
        class="form-check-input" 
        type="radio" 
        name="inlineRadioOptions" 
        id="rd2" 
        value="1"
        onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio2">m</label>
        </div>
        <div class="form-check form-check-inline">
        <input 
        class="form-check-input" 
        type="radio" 
        name="inlineRadioOptions"
        id="rd3" 
        value="2"
        onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio3">l</label>
        </div>
        <br> 
        <a href="{{URL('cart')}}">
        <input  type="button" name="btn1" id="btn1" value="Add to Cart"> </a>
  
</div>

<div class="col-lg-4 col-sm-6">
      <img id="img1" class="img-thumbnail image"  src="{{asset('images/pic5.jpg')}}" width=150px height=150px style="border: black 2px solid;">
      <br>
      <b>PKR 5,700</b>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions"
        id="rd1" value="0" onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio2">s</label>
        </div>
        <div class="form-check form-check-inline">
        <input 
        class="form-check-input" 
        type="radio" 
        name="inlineRadioOptions" 
        id="rd2" 
        value="1"
        onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio2">m</label>
        </div>
        <div class="form-check form-check-inline">
        <input 
        class="form-check-input" 
        type="radio" 
        name="inlineRadioOptions"
        id="rd3" 
        value="2"
        onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio3">l</label>
        </div>
        <br> 
        <a href="{{URL('cart')}}">
        <input type="button" name="btn1" id="btn1" value="Add to Cart"> </a>
  
</div>

<div class="col-lg-4 col-sm-6">
  <img id="img1" class="img-thumbnail image" src="{{asset('images/pic4.jpg')}}" width=150px height=150px style="border: black 2px solid;">
      <br>
      <b>PKR 3,500</b>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions"
        id="rd1" value="0" onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio2">s</label>
        </div>
        <div class="form-check form-check-inline">
        <input 
        class="form-check-input" 
        type="radio" 
        name="inlineRadioOptions" 
        id="rd2" 
        value="1"
        onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio2">m</label>
        </div>
        <div class="form-check form-check-inline">
        <input 
        class="form-check-input" 
        type="radio" 
        name="inlineRadioOptions"
        id="rd3" 
        value="2"
        onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio3">l</label>
        </div>
        <br>
        <a href="{{URL('cart')}}">
        <input  type="button" name="btn1" id="btn1" value="Add to Cart"></a>
  
</div>

</div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</body>
</html>