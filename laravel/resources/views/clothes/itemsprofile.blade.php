@extends('clothes.master')

@section('data')
<h3 class="bg-success myHeadings"> Items Profile </h3>
    <hr>

    <div class="w-50 mx-auto">

    <form method="POST" action="{{route('itemsprofile.store')}}" enctype="multipart/form-data">
        @csrf
     
        
        <div class="form-group">
            <label for="exampleInputEmail1">Item Name</label>
            <input type="text" class="form-control" 
         name="txtName" placeholder="Product Name">    
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Item Code</label>
            <input type="text" class="form-control" 
         name="itemcode" placeholder="Item Code">    
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Sku Code</label>
            <input type="text" class="form-control" 
         name="skucode" placeholder="Sku Code">    
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Stock Position</label>
            <input type="text" class="form-control" 
         name="stk" placeholder="stock Position">    
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="text" class="form-control" 
         name="Price" placeholder="Price">    
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Color</label>
            <input type="text" class="form-control" 
         name="color" placeholder="Color">    
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Product Category</label>
            <input type="text" class="form-control" 
         name="pdtcty" placeholder="Product Category">    
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Volume</label>
            <input type="text" class="form-control" 
         name="vol" placeholder="Volume">    
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Collection</label>
            <input type="text" class="form-control" 
         name="col" placeholder="Collection<">    
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Fabric</label>
            <input type="text" class="form-control" 
         name="fabric" placeholder="Fabric">    
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Disclaimer</label>
            <input type="text" class="form-control" 
         name="discl" placeholder="Disclaimer">    
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Edition</label>
            <input type="text" class="form-control" 
         name="edtn" placeholder="Edition">    
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Wear Type</label>
            <input type="text" class="form-control" 
         name="weartyp" placeholder="Wear Type">    
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

