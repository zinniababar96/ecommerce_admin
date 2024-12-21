<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cart</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">

.container .image:hover {
      opacity: 0.3;
    }
    #main {
      width: 400px;
      height: 200px;
      border: 2px solid black;
    }
    #head1 {
      background-color: grey;
      color: white;
      padding: 10px;
    }

	
</style>
</head>
<body>
  @extends('clothes.master')

@section('data')

@yield('showimages')
<hr>
<div class="w-50 mx-auto">

  <div class="container">
    <div class="row p-3">
      <div class="col-4">
        <p align="center">
          <img src="{{asset('images/pic5.jpg')}}"
          class="img-thumbnail image" id="c1" onclick="showBigImage(this.id)" width=150px height=150px>
        </p>
      </div>
        <div class="col-4">
          <p align="center">
          <img src="{{asset('images/pic5.jpg')}}"
          class="img-thumbnail image" id="c2" onclick="showBigImage(this.id)" width=150px height=150px>
        </p>
        </div>
        <div class="col-4">
          <p align="center">
          <img src="{{asset('images/pic5.jpg')}}"
          class="img-thumbnail image" id="c3" onclick="showBigImage(this.id)" width=150px height=150px>
        </p>
        </div>
    </div>    

    <div class="col-12">
          <p align="center">
          <img src="{{asset('images/pic5.jpg')}}"
          class="img-thumbnail image" id="c3" onclick="showBigImage(this.id)" width=150px height=150px>
        </p>
        </div>
    </div>   

  </div>
  <br>

  <span id="mySelect" style="color: red; font-size: 15px; font-weight: bold;"></span>
  
  <br>
  <div class="container">
    <div class="row">
      <div class="col-4">
        Available Sizes:
      </div>
      <div class="col-8">
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
      </div>
    </div>
    </div>
  </div>
<br><br>
<div>
Select Your Item: 

<select name="cmbProducts" id="cmbProducts" onchange="calcPrice()">
  <option value=0>Select Product</option>
  <option value=100>1 piece</option> 
  <option value=200>2 piece</option> 
  <option value=500>3 piece</option>  
</select>
<br><br>

Price Selected: <input type=number name="txtItemPrice" 
        id="txtItemPrice" readonly><br><br>

Quantity Required: <input type=number name="txtQty" 
          id="txtQty" onchange="calcPrice()"><br><br>

Total Amount: <input type=number name="txtTotal" 
        id="txtTotal" readonly><br><br>
<br><br>
<button type="button" name="btn" id="btn2" class="btn btn-primary" onclick="addRow()">Click Here To Add Item</button>

<br><br>
<table id="myCart"  align="center" border="1px">
  <tr>
    <td id="head1">Product Name</td>
    <td id="head1">Item Price</td>
    <td id="head1">Quantity Selected</td>
    <td id="head1">Total Amount</td>
  </tr> 
</table>

<br><br>
<button type="button" name="btn1" id="btn1" class="btn btn-primary">  Shipping</button>

    
    @endsection
    <script type="text/javascript">

function getPrice(pIndex) {
  var price = [3500 ,3700 ,4000]
  var sizes = ["s" ,"m" ,"l"]
  var rd1 = document.getElementById("rd1")
    var rd2 = document.getElementById("rd2")
    var rd3 = document.getElementById("rd3")
    var ss = document.getElementById("mySelect")

    if(pIndex == "rd1"){
     ss.innerHTML = "Size:" + price[rd1.value]
      //ss.innerHTML += "&nbsp;&nbsp;&nbsp; Price: " + price[rd1.value]
    }
    if (pIndex == "rd2") {
  // console.log (rd2.value)
  ss.innerHTML = "Size: " + price[rd2.value]
 // ss.innerHTML += " &nbsp;&nbsp;&nbsp; Price: " + price[rd2.value]
}
if (pIndex == "rd3") {
  // console.log (rd3.value)
  ss.innerHTML = "Size: " + price[rd3.value]
 // ss.innerHTML += " &nbsp;&nbsp;&nbsp; Price: " + price[rd3.value]
}
    }



function showBigImage(cd){
  console.log(cd)
  var dd = document.getElementById("imageBig")

  if(cd == "c1"){
    dd.src = c1.src
  }
  if (cd == "c2"){
  dd.src = c2.src
}
if (cd == "c3"){
  dd.src = c3.src
}


}

function calcPrice(){
var myProducts = document.getElementById("cmbProducts")
var mySelectedPrice = document.getElementById("txtItemPrice")
var myTotalAmount = document.getElementById("txtTotal")
var myPrice = myProducts.options[myProducts.selectedIndex].value
mySelectedPrice.value = myPrice
var myQty = document.getElementById("txtQty").value
var myTotal = myQty * myPrice
myTotalAmount.value = myTotal
}

function addRow() {
var myProducts = document.getElementById("cmbProducts")
var mySelectedPrice = document.getElementById("txtItemPrice")
var myTotalAmount = document.getElementById("txtTotal")
var myPrice = myProducts.options[myProducts.selectedIndex].value
mySelectedPrice.value = myPrice
var myQty = document.getElementById("txtQty").value
var myTotal = myQty * myPrice

var myTable = document.getElementById("myCart")

var myText = "<td>" + myProducts.value + "</td>" +
        "<td>" + myPrice + "</td>" +
        "<td>" + myQty + "</td>" +
        "<td>" + myTotal + "</td>"
      myTable.innerHTML += myText
}

</script>
  </body>
  </html>