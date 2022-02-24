<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Flipkart;
use Illuminate\Http\Request;

class FlipkartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        //
          return DB::table('products')
        ->join('customers','products.id','=','customers.product_id')
                ->get();

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flipkart  $flipkart
     * @return \Illuminate\Http\Response
     */
    public function show(Flipkart $flipkart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flipkart  $flipkart
     * @return \Illuminate\Http\Response
     */
    public function edit(Flipkart $flipkart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flipkart  $flipkart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flipkart $flipkart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flipkart  $flipkart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flipkart $flipkart)
    {
        //
    }
}
