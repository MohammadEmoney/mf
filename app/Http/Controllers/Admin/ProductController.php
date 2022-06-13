<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->with(['category', 'images', 'featuredImage'])->paginate();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'categories' => Category::pluck('name', 'id'),
            'attributes' => ProductAttribute::pluck('name', 'id'),
            'products' => Product::pluck('name', 'id'),
            'statuses' => Product::STATUS,
        ];
        return view('admin.products.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->validated());

        $product->productAttribute()->attach($request->product_attribute_id);

        $data = [
            'categories' => Category::pluck('name', 'id'),
            'attributes' => ProductAttribute::pluck('name', 'id'),
            'products' => Product::pluck('name', 'id'),
            'statuses' => Product::STATUS,
        ];
        return view('admin.products.edit', compact('product', 'data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data = [
            'categories' => Category::pluck('name', 'id'),
            'attributes' => ProductAttribute::pluck('name', 'id'),
            'products' => Product::pluck('name', 'id'),
            'statuses' => Product::STATUS,
        ];
        return view('admin.products.edit', compact('product', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        $product->productAttribute()->sync($request->product_attribute_id);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(true);
    }
}
