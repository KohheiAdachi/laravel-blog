<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Post;
use App\Models\Profile;

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
        // \App\Models\User::factory(10)->create();
        $authors = Author::factory(5)->create();

        $authors->each(function ($author) {
            $author
            ->profile()
            ->save(Profile::factory()->make());
            $author->posts()->saveMany(
                Post::factory(rand(20, 30))->make()
            );
        });
    }
}
