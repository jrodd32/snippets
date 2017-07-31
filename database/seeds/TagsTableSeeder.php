<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Tag $tag)
    {
        $tags = collect([
            [
                'name' => 'front-end',
                'description' => 'Anything front-end related. Ex.) HTML, CSS, JS, UI, UX, etc.'
            ],
            [
                'name' => 'back-end',
                'description' => 'Anything back-end related. Ex.) PHP, Ruby, Node / Server side JS, etc.'
            ]
        ]);
        $tags->each(function ($tag_seed) use ($tag) {
            $tag->create([
                'name' => $tag_seed['name'],
                'description' => $tag_seed['description'],
            ]);
        });
    }
}
