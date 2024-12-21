@extends('clothes.master')

@section('data')
<h3 class="bg-success myHeadings"> Items Edit Form </h3>
    <hr>

    <div class="w-50 mx-auto">

    <form method="POST" action="{{route('clothes.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Item ID</label>
            <input type="text" class="form-control" 
             name="txtID" readonly placeholder="txt ID">    
        </div>
        

        <div class="form-group">
            <label for="exampleInputEmail1">Item Name</label>
            <input type="text" class="form-control" 
         name="txtName" placeholder="Product Name">    
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


    @endsection

