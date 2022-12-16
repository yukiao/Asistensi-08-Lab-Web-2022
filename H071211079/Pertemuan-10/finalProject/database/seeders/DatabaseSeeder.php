<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        User::create([

            'name' => 'Dhiyaa Unnisa',
            'username' => 'dhiyaaunnisa_',
            'email' => 'unnisadhiyaa25@gmail.com',
            'password' => bcrypt ('12345678')

        ]);

        // User::create([

        //     'name' => 'WD. Ananda Lesmono',
        //     'email' => 'nandalesmono@gmail.com',
        //     'password' => bcrypt ('nandakawai')

        // ]);

        User::factory(3)->create();

        Category::create ([

            'name' => 'Web Programming',
            'slug' => 'web-programming'

        ]);

        Category::create ([

            'name' => 'Web Personal',
            'slug' => 'personal'

        ]);

        Category::create ([

            'name' => 'Web Design',
            'slug' => 'web-design'

        ]);
        
        Post::factory(20)->create();
        // Post::create([

        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quo beatae odio commodi exercitationem voluptate omnis perspiciatis adipisci! Corporis, repellat. Voluptatum a odit delectus laudantium exercitationem eos tempora quos fugit, soluta ex id? Suscipit praesentium repellendus omnis quos explicabo ipsam ipsum animi fuga perspiciatis. Consectetur eos similique, cupiditate rerum eius illum, optio molestias corrupti, a molestiae nobis? Quibusdam incidunt repellat nemo ut sapiente vel et consequatur aperiam distinctio facere dignissimos omnis saepe, quasi iste excepturi laboriosam tempore cumque molestiae neque. Deserunt perspiciatis consequuntur se.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([

        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quo beatae odio commodi exercitationem voluptate omnis perspiciatis adipisci! Corporis, repellat. Voluptatum a odit delectus laudantium exercitationem eos tempora quos fugit, soluta ex id? Suscipit praesentium repellendus omnis quos explicabo ipsam ipsum animi fuga perspiciatis. Consectetur eos similique, cupiditate rerum eius illum, optio molestias corrupti, a molestiae nobis? Quibusdam incidunt repellat nemo ut sapiente vel et consequatur aperiam distinctio facere dignissimos omnis saepe, quasi iste excepturi laboriosam tempore cumque molestiae neque. Deserunt perspiciatis consequuntur se.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([

        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quo beatae odio commodi exercitationem voluptate omnis perspiciatis adipisci! Corporis, repellat. Voluptatum a odit delectus laudantium exercitationem eos tempora quos fugit, soluta ex id? Suscipit praesentium repellendus omnis quos explicabo ipsam ipsum animi fuga perspiciatis. Consectetur eos similique, cupiditate rerum eius illum, optio molestias corrupti, a molestiae nobis? Quibusdam incidunt repellat nemo ut sapiente vel et consequatur aperiam distinctio facere dignissimos omnis saepe, quasi iste excepturi laboriosam tempore cumque molestiae neque. Deserunt perspiciatis consequuntur se.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([

        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quo beatae odio commodi exercitationem voluptate omnis perspiciatis adipisci! Corporis, repellat. Voluptatum a odit delectus laudantium exercitationem eos tempora quos fugit, soluta ex id? Suscipit praesentium repellendus omnis quos explicabo ipsam ipsum animi fuga perspiciatis. Consectetur eos similique, cupiditate rerum eius illum, optio molestias corrupti, a molestiae nobis? Quibusdam incidunt repellat nemo ut sapiente vel et consequatur aperiam distinctio facere dignissimos omnis saepe, quasi iste excepturi laboriosam tempore cumque molestiae neque. Deserunt perspiciatis consequuntur se.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
