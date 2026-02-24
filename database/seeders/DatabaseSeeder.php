<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        category::factory(200)->create();
        product::factory(200)->create();
    }
}
