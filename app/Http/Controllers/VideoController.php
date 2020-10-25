<?php

namespace App\Http\Controllers;

use App\Video;
use TCG\Voyager\Facades\Voyager;

class VideoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.videos', [
            'videos' => Video::all()
        ]);
    }

    /**
     * Display a listing of the resource via API.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function indexApi()
    {
        $videos = Video::all();
        $videosUpdated = [];
        foreach ($videos as $video) {
            $video->image_url = Voyager::image($video->image);
            array_push($videosUpdated, $video);
        }
        return response()->json($videosUpdated, 200);
    }

}
