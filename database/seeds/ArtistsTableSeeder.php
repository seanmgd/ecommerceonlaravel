<?php

use App\Artist;
use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    public function run()
    {
        Artist::create([
            'name' => 'Mentlec',
            'slug' => 'mentlec',
            'sc_link' => 'https://soundcloud.con',
            'description' => 'music producer'
        ]);
        Artist::create([
            'name' => 'Artiste 2',
            'slug' => 'artiste_2',
            'sc_link' => 'https://soundcloud.con',
            'description' => 'vj producer'
        ]);
        Artist::create([
            'name' => 'Artist 3',
            'slug' => 'artist_3',
            'sc_link' => 'https://soundcloud.con',
            'description' => 'vj producer'
        ]);
    }
}
