<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Productmaster;
use Mail;
use App\Mail\ProductsEmailClass;

class testctrl extends Controller
{
    //
    function xyz(){
        return view('clothes.contact');
    }
    

    function itemsFunc(){

       $pm = Productmaster::all();
     
       return view('clothes.items')->with('abc', $pm);
    }

    function homeFunc(){
        return view('clothes.home');
    }

    
    function saveProducts(Request $myReq){
     
         $Productmaster = new Productmaster();

         $Productmaster->product_name = $myReq->txtName;
         $Productmaster->price = $myReq->txtPrice;
 
         $Productmaster->save();
       
         return view('clothes.items');
    }

    function editCommit(Request $myReq){
    
        echo $myReq->txtID;
        $pm = Productmaster::find($myReq->txtID);
        $pm->product_name = $myReq->txtName;
        $pm->price = $myReq->txtPrice;

        $pm->save();
      
        return redirt('items');
    }
    function stichedFunc(Request $myReq){
        return view('clothes.stiched');
    
    }

    function unstichedFunc(Request $myReq){
        return view('clothes.unstiched');
    
    }
    function cartFunc(Request $myReq){
        return view('clothes.cart');
    
    }
    function deleteCommit(Request $myReq, $id){
          
        $pm = Productmaster::destroy($id);
        return redirt('items');
    }
    function editForm(Request $req, $selectedID){

        $pm = Productmaster::find($selectedID);

        return view('clothes.editForm')->with('abc', $pm);
    }
    function sendemail()
    {
        Mail::to('xiniababar96@gmail.com')->send(new productsEmailClass());
        if(Mail::failures()){ 
            echo"Email not sent";
        }else {
            echo"mail sent successfully";
        }    
    }

    //API function-----
    function testAPIfunc(Request $req) {
        return response()->json("JSON response generated...");

    }

    function sendItemsAPI(Request $req) {
        $pm = new Productmaster();
        $products = Productmaster::all();
        return response()->json($products);
    
    }

    function sendItemsPriceAPI($id) {
        $pm = Productmaster::find($id);
        return response()->json($pm->price);
    }

    function storeItemsAPI(Request $req) {
        $pmm = new Productmaster();
         $pmm->product_name = $req->item_name;
         $pmm->price = $req->tem_price;
         $pmm->save();
        return response()->json($req->item_name . "Item saved in our database - Using API");
    }

    function editItemsAPI(Request $req, $id) {
        $pm = Productmaster::find($id);
         $pm->product_name = $req->item_name;
         $pm->price = $req->tem_price;
         $pm->save();
        return response()->json($req->item_name . "Item saved in our database - Using API");
    }

    function deleteItemsAPI(Request $req, $id) {
        $pm = Productmaster::destroy($id);
        return response()->json($req->item_name . "Item saved in our database - Using API");
    }

}
