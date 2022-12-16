<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['laravel', 'php', 'javascript','HTML','bootstrap','java','python'];

        foreach ($tags as $tag) {
            Tag::create([
                'slug' => Str::slug($tag),
                'name' => $tag,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?'

            ]);
        }
    }
}
