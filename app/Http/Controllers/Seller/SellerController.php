<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Seller;
use App\Http\Controllers\ApiController;

class SellerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::has('products')->get();
        return response()->json(['data'=>$sellers],200);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seller = Seller::has('products')->findOrFail($id);
        return response()->json(['data'=>$seller],200);
    }

}
