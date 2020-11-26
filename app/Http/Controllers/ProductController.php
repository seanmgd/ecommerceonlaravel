<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
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
     * Display the specified resource.
     *
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
        return view('product.single', [
            'product' => Product::where('slug', $slug)->firstOrFail()
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
            $product->image_url = Voyager::image($product->image);
            if (json_decode($product->images, true)) {
                $images = [];
                foreach (json_decode($product->images, true) as $image) {
                    array_push($images, Voyager::image($image));
                }
            }
            (isset($images)) ? $product->images_url = $images : '';
            unset($product->image);
            unset($product->images);
            array_push($productsUpdated, $product);
        }

        return response()->json($productsUpdated, 200);
    }

    /**
     * Display the specified resource via API.
     *
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function showApi(string $slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $productUpdated = [];
        $product->image_url = Voyager::image($product->image);
        if (json_decode($product->images, true)) {
            $images = [];
            foreach (json_decode($product->images, true) as $image) {
                array_push($images, Voyager::image($image));
            }
        }
        (isset($images)) ? $product->images_url = $images : '';
        unset($product->image);
        unset($product->images);
        array_push($productUpdated, $product);

        return response()->json((object)$productUpdated[0], 200);
    }

    /**
     * Store a newly created resource in storage via API.
     *
     * @param ProductRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeApi(ProductRequest $request)
    {
        (new Product)->createFromRequest($request);

        return response()->json('Product successfully added', 200);
    }

    /**
     * Update the specified resource in storage via API.
     *
     * @param ProductRequest $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateApi(ProductRequest $request, int $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json('Product successfully updated', 200);
    }

    /**
     * Remove the specified resource from storage via API.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroyApi(int $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json('Product successfully deleted', 200);
    }
}
