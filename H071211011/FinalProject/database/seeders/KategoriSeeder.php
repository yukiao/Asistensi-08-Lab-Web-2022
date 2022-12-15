<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['komputer dan laptop', 'bahasa pemrograman', 'android', 'web','mobile','basis data','artificial intelligence','metaverse','cyber security','network'];

        foreach ($categories as $category) {
            Category::create([
                'slug' => Str::slug($category),
                'name' => $category,
                'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?'
            ]);
        }
    }
}
