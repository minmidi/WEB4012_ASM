<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\Comment;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)->create();
        Category::factory(20)->create();
        Product::factory(20)->create();
        Comment::factory(20)->create();
        CategoryProduct::factory(20)->create();
    }
}
