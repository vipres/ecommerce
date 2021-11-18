<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('public/products');
        Storage::makeDirectory('public/products');
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
    }
}
