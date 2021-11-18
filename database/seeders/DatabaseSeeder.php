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
        Storage::disk('public')->deleteDirectory('categories');
        Storage::disk('public')->deleteDirectory('subcategories');
        Storage::disk('public')->makeDirectory('categories');
        Storage::disk('public')->makeDirectory('subcategories');
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
    }
}
