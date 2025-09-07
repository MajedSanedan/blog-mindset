<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         // إنشاء مستخدمين
        User::factory(10)->create();

        // إنشاء 10 كاتيجوريز فريدة
        $categories = Category::factory()->count(1)->create();

        // إنشاء 30 بوست
        $posts = Post::factory()->count(30)->create();

        // ربط كل بوست بـ 3 كاتيجوريز عشوائية
        foreach ($posts as $post) {
            $post->categories()->attach(
                $categories->random(3)->pluck('id')->toArray()
            );
        }
    }
}
