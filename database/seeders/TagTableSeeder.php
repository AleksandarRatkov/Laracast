<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag();
        $tag->name = 'Sportske vesti';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'Vremenska prognoza';
        $tag->save();
    }
}
