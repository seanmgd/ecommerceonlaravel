<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
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
            unset($video->image);
        }
        return response()->json($videosUpdated, 200);
    }

    /**
     * Display the specified resource via API.
     *
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function showApi(string $slug)
    {
        $video = Video::where('slug', $slug)->firstOrFail();
        $video->image_url = Voyager::image($video->image);
        unset($video->image);

        return response()->json($video, 200);
    }

    /**
     * Store a newly created resource in storage via API.
     *
     * @param VideoRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeApi(VideoRequest $request)
    {
        (new Video)->createFromRequest($request);

        return response()->json('Video successfully added', 200);
    }


    /**
     * Update the specified resource in storage via API.
     *
     * @param VideoRequest $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateApi(VideoRequest $request, int $id)
    {
        $video = Video::findOrFail($id);
        $video->update($request->all());

        return response()->json('Video successfully updated', 200);
    }


    /**
     * Remove the specified resource from storage via API.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroyApi(int $id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        return response()->json('Video successfully deleted', 200);
    }
}
