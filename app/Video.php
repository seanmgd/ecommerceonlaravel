<?php

namespace App;

use App\Http\Requests\VideoRequest;
use Illuminate\Database\Eloquent\Model;


class Video extends Model
{
    protected $fillable = ['name', 'slug', 'link', 'image'];

    public function createFromRequest(VideoRequest $request)
    {
        $video_image = $request->file('image');
        $video_image->store('/', 'public');

        Video::create([
            'name' => $request->get('name'),
            'slug' => $request->get('slug'),
            'link' => $request->get('link'),
            'image' => $video_image->hashName()
        ]);
    }
}
