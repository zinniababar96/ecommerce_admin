@extends('clothes.master')

@section('data')
<h3 class="bg-dark myHeadings"> Items Management </h3>
    <hr>

    <div class="w-50 mx-auto">

    <form method="POST" action="{{URL('insert')}}">
        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Item Name</label>
            <input type="text" class="form-control" name="txtName" placeholder="Product Name">    
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputPassword1">Item Price</label>
            <input type="text" name="txtPrice" class="form-control"  placeholder="Product Price">
        </div>
    
        <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <br>

    <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Product Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

  @foreach($abc as $pm)
    <tr>
      <th scope="row">{{$pm->id}}</th>
      <td>{{$pm->product_name}}</td>
      <td>{{$pm->price}}</td>
      <td><a href='editRecord/{{$pm->id}}' class="btn btn-outline-info">Edit</a></td>
      <td><a href='deleteRecord/{{$pm->id}}' class="btn btn-outline-danger">Delete</a></td>
    </tr>

    @endforeach
    
  </tbody>
</table>

    @endsection


    @section('showimages')
    <hr>
    <img src="{{asset('images/pic1.jpg')}}" width=300px height=300px>
    @endsection