<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\productimage;

class resSaveImage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('clothes.saveimage'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        echo "Save Image Resource Store Function";
        
        echo "<br>";
        $img_file = $request->file('txtfile');
        $img_ext = $img_file->getClientOriginalExtension();

       $img_fullname = "picture_" .rand(123456,999999) . "." . $img_ext;

        echo $request->txtName . "<br>";
        echo $img_fullname;

        $ping = new productimage();
        $ping->item_name = $request->txtName;
        $ping->item_image = $img_fullname;

        $ping->save();

        echo "<h1>Product Image Loaded and Saved Successfully</h1>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
