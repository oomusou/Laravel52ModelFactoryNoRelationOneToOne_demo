<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(range(1, 10))->each(function (int $userId) {
            factory(Post::class)->create([
                'user_id' => $userId
            ]);
        });
    }
}
