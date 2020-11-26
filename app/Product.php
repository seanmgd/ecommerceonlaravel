<?php

namespace App;

use App\Http\Requests\ProductRequest;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'price', 'image', 'images'];

    public function createFromRequest(ProductRequest $request)
    {
        $product_image = $request->file('image');
        $product_image->store('', 'public');

        $product_images = [];
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $image->store('', 'public');
                $product_images[] = $image->hashName();
            }
        }

        Product::create([
            'name' => $request->get('name'),
            'slug' => $request->get('slug'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'image' => $product_image->hashName(),
            'images' => json_encode($product_images)
        ]);
    }
}
