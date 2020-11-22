<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ProductsTableSeeder::class);
         $this->call(VideosTableSeeder::class);
         $this->call(ArtistsTableSeeder::class);
//         $this->call(VoyagerDatabaseSeeder::class);
    }
}
