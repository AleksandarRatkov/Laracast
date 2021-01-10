<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Facades\App;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post([
            'title' => 'Pobeda Barselone',
            'content' => 'Pobeda Barselone na danasnjem mecu protiv Bajerna!',

        ]);
        $post->save();

        $post = new Post([
            'title' => 'Danas 23 stepena',
            'content' => 'Pravi letnji dan za ovaj period.',

        ]);
        $post->save();
    }
}
