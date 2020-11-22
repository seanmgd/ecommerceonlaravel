<?php

namespace App;

use App\Http\Requests\ProductRequest;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'price', 'image', 'images'];
    public function createFromRequest(ProductRequest $request) {
        Product::create([
            'name' => $request->get('name'),
            'slug' => $request->get('slug'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'image' => $request->get('image'),
            'images' => $request->get('images'),
        ]);
    }
}
