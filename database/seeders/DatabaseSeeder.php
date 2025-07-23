<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::create([
        //     'name' => 'UI Design',
        //     'slug' => 'ui-design'
        // ]);

        // Post::create([
        //     'title' => 'judul 1',
        //     'author_id' => '1',
        //     'category_id' => '1',
        //     'slug' => 'judul-1',
        //     'body' => 'ini adalah tampilan untuk judul artikel pertama'

        // ]);
        $this->call([CategorySeeder::class, UserSeeder::class]);
        
        Post::factory(100)->recycle([
            Category::all(),
            User::all()

        ])->create();
    }
}
