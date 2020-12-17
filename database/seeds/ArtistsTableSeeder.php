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
            'fb_link' => 'https://facebook.com/',
            'sc_link' => 'https://soundcloud.com/mentelc',
            'yt_link' => 'https://www.youtube.com/',
            'vimeo_link' => 'https://vimeo.com/461800955',
            'ig_link' => 'https://www.instagram.com/clemtlrt/',
            'description' => 'music producer',
            'image_url' => 'https://i.ibb.co/vL3xQCQ/mentlec.jpg',
        ]);
        Artist::create([
            'name' => 'jääj',
            'slug' => 'jaaj',
            'fb_link' => 'https://facebook.com/',
            'sc_link' => 'https://soundcloud.com/',
            'yt_link' => 'https://www.youtube.com/',
            'vimeo_link' => 'https://vimeo.com/',
            'ig_link' => 'https://www.instagram.com/',
            'description' => 'vj producer',
            'image_url' => 'https://i.ibb.co/dMZScXf/I-HM.jpg',
        ]);
        Artist::create([
            'name' => 'hill_wolf',
            'slug' => 'hill_wolf',
            'fb_link' => 'https://facebook.com/',
            'sc_link' => 'https://soundcloud.com/',
            'yt_link' => 'https://www.youtube.com/',
            'vimeo_link' => 'https://vimeo.com/',
            'ig_link' => 'https://www.instagram.com/',
            'description' => 'vj producer',
            'image_url' => 'https://i.ibb.co/0tLHXhL/I-HM2.jpg',
        ]);
    }
}
