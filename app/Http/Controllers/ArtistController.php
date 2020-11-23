<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Http\Requests\ArtistRequest;
use TCG\Voyager\Facades\Voyager;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource via API.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function indexApi()
    {
        $artists = Artist::all();
        $artistsUpdated = [];
        foreach ($artists as $artist) {
            $artist->image_url = Voyager::image($artist->image);
            unset($artist->image);
            array_push($artistsUpdated, $artist);
        }

        return response()->json($artistsUpdated, 200);
    }

    /**
     * Display the specified resource via API.
     *
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function showApi(string $slug)
    {
        $artist = Artist::where('slug', $slug)->firstOrFail();
        $artist->image_url = Voyager::image($artist->image);
        unset($artist->image);

        return response()->json($artist, 200);
    }

    /**
     * Store a newly created resource in storage via API.
     *
     * @param ArtistRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeApi(ArtistRequest $request)
    {
        (new Artist)->createFromRequest($request);

        return response()->json('Artist successfully added', 200);
    }

    /**
     * Update the specified resource in storage via API.
     *
     * @param ArtistRequest $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateApi(ArtistRequest $request, int $id)
    {
        $artist = Artist::findOrFail($id);
        $artist->update($request->all());

        return response()->json('Artist successfully updated', 200);
    }

    /**
     * Remove the specified resource from storage via API.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroyApi(int $id)
    {
        $artist = Artist::findOrFail($id);
        $artist->delete();

        return response()->json('Artist successfully deleted', 200);
    }
}
