<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout.cart');
    }

    /**
     * Display a listing of the resource via API.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function indexApi()
    {
        return response()->json(Cart::instance('apiTest')->content(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate(['size' => 'required']);
        Cart::add($request->id, $request->name, $request->qty, $request->price, ['size' => $request->size, 'slug' => $request->slug])->associate('App\Product');

        return redirect()->route('cart.index')->with('success', 'Product added to your shopping cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeApi(Request $request)
    {
        Cart::instance('apiTest')->add($request->id, $request->name, $request->qty, $request->price, ['size' => $request->size, 'slug' => $request->slug]);

        return response()->json(200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id)
    {
        Cart::remove($id);

        return back()->with('success', 'Item correctly deleted');
    }

    /**
     * Remove the specified resource from storage via API.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroyApi(int $id)
    {
        Cart::remove($id);

        return response()->json(200);
    }

    public function reset()
    {
        Cart::destroy();

        return redirect()->route('cart.index')->with('success', 'Items correctly deleted');
    }

    public function resetApi()
    {
        Cart::destroy();

        return response()->json(200);
    }
}
