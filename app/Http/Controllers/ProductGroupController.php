<?php

namespace App\Http\Controllers;

use App\Models\ProductGroup;
use App\Http\Requests\StoreProductGroupRequest;
use App\Http\Requests\UpdateProductGroupRequest;

class ProductGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProductGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductGroup  $productGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ProductGroup $productGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductGroup  $productGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductGroup $productGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductGroupRequest  $request
     * @param  \App\Models\ProductGroup  $productGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductGroupRequest $request, ProductGroup $productGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductGroup  $productGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductGroup $productGroup)
    {
        //
    }
}
