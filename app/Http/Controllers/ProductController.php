<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Display a listing of the resource via API.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function indexApi()
    {
        $products = Product::all();
        $productsUpdated = [];
        foreach ($products as $product) {
            if (json_decode($product->images, true)) {
                $images = [];
                foreach (json_decode($product->images, true) as $image) {
                    array_push($images, Voyager::image($image));
                }
            }
            (isset($images)) ? $product->images_url = $images : '';
            $product->images_url = Voyager::image($product->image);
            array_push($productsUpdated, $product);
        }
        return response()->json($productsUpdated, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('product.single', [
            'product' => Product::where('slug', $slug)->firstOrFail()
        ]);
    }

    /**
     * Display the specified resource via API.
     *
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function showApi($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $productUpdated = [];
        $product->newImage = Voyager::image($product->image);
        if (json_decode($product->images, true)) {
            $images = [];
            foreach (json_decode($product->images, true) as $image) {
                array_push($images, Voyager::image($product->image));
            }
        }
        $product->newImages = $images;
        $product->newImage = Voyager::image($product->image);
        array_push($productUpdated, $product);

        return response()->json($productUpdated, 200);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
