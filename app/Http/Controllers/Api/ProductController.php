<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Product[]|\Illuminate\Database\Eloquent\Collection
     */
   
    public function index()
    {
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Product|\Illuminate\Database\Eloquent\Model
     */
    public function store(Request $request)
    {
        return Product::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Product
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return bool
     */
    public function update(Request $request, Product $product)
    {
        return $product->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @throws \Exception
     */
    public function destroy(Product $product)
    {
        $product->delete();
    }
}
