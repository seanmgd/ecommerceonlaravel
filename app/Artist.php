<?php

namespace App;

use App\Http\Requests\ArtistRequest;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['name', 'slug', 'fb_link', 'sc_link', 'yt_link', 'vimeo_link', 'ig_link', 'description', 'image'];

    public function createFromRequest(ArtistRequest $request)
    {
        $artist_image = $request->file('image');
        $artist_image->store('', 'public');

        Artist::create([
            'name' => $request->get('name'),
            'slug' => $request->get('slug'),
            'fb_link' => $request->get('fb_link'),
            'sc_link' => $request->get('sc_link'),
            'yt_link' => $request->get('yt_link'),
            'vimeo_link' => $request->get('vimeo_link'),
            'ig_link' => $request->get('ig_link'),
            'image' => $artist_image->hashName(),
            'description' => $request->get('description'),
        ]);
    }
}
