@extends('clothes.master')

@section('data')
<h3 class="bg-success myHeadings"> Media Uploading </h3>
    <hr>

    <div class="w-50 mx-auto">

    <form method="POST" action="{{route('saveimage.store')}}" enctype="multipart/form-data">
        @csrf
     
        
        <div class="form-group">
            <label for="exampleInputEmail1">Item Name</label>
            <input type="text" class="form-control" 
         name="txtName" placeholder="Product Name">    
        </div>

        
        <div class="form-group">
            <label for="exampleInputEmail1">Item Image File</label>
            <input type="file" class="form-control" 
         name="txtfile" require>    
        </div>
      
        
        <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    @endsection

