<?php

use App\Video;
use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{

    public function run()
    {
        Video::create([
            'name' => 'Mentlec - Difficile Parfois',
            'slug' => 'difficile_parfois',
            'link' => 'https://player.vimeo.com/video/452865470?autoplay=1&portrait=0',
            'image_url' => 'https://i.ibb.co/52X90Ld/difficile-cover.png'
        ]);
        Video::create([
            'name' => 'Mentlec - Run Away From The Deepest Feelings',
            'slug' => 'deepest_feeling',
            'link' => 'https://player.vimeo.com/video/461800955?autoplay=1&portrait=0',
            'image_url' => 'https://i.ibb.co/g7QycMC/away-cover.png'
        ]);
        Video::create([
            'name' => 'Midnight Vices - Asylum',
            'slug' => 'asylum',
            'link' => 'https://www.youtube.com/embed/eOO6f7EDBxk',
            'image_url' => 'https://i.ibb.co/k2NS68C/asylum-cover.png'
        ]);
    }
}
