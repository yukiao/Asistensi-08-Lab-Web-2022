<?php

namespace Database\Seeders;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // post 1

        $post = Post::create([
            'category_id' => '1',
            'id_user' => 1,
            'judul' => 'Judul 1',
            'sampul' => 'sampul1.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 1'),
            'views' => 12
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 1
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 3
        ]);

        // post 2

        $post = Post::create([
            'category_id' => '2',
            'id_user' => 2,
            'judul' => 'Judul 2',
            'sampul' => 'sampul2.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 2'),
            'views' => 16
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 2
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 3
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 2
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 4
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 5
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 6
        ]);


        // post 3

        $post = Post::create([
            'category_id' => '3',
            'id_user' => 2,
            'judul' => 'Judul 3',
            'sampul' => 'sampul3.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 3'),
            'views' => 20
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 7
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 6
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 3
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 2
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 4
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 1
        ]);

        // post 4

        $post = Post::create([
            'category_id' => '3',
            'id_user' => 2,
            'judul' => 'Judul 4',
            'sampul' => 'sampul4.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 4'),
            'views' => 18
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 3
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 5
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 1
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 2
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 3
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 4
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 5
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 6
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 7
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 8
        ]);

        // post 5

        $post = Post::create([
            'category_id' => '4',
            'id_user' => 4,
            'judul' => 'Judul 5',
            'sampul' => 'sampul5.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 5'),
            'views' => 19
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 5
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 4
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 2
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 4
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 5
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 6
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 7
        ]);

        // post 6

        $post = Post::create([
            'category_id' => '4',
            'id_user' => 4,
            'judul' => 'Judul 6',
            'sampul' => 'sampul6.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 6'),
            'views' => 22
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 3
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 1
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 4
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 5
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 7
        ]);
        

        // post 7

        $post = Post::create([
            'category_id' => '4',
            'id_user' => 4,
            'judul' => 'Judul 7',
            'sampul' => 'sampul7.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 7'),
            'views' => 15
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 4
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 3
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 6
        ]);

        // post 8

        $post = Post::create([
            'category_id' => '5',
            'id_user' => 5,
            'judul' => 'Judul 8',
            'sampul' => 'sampul8.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 8'),
            'views' => 10
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 5
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 1
        ]);
        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 4
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 4
        ]);

        // post 9

        $post = Post::create([
            'category_id' => '5',
            'id_user' => 5,
            'judul' => 'Judul 9',
            'sampul' => 'sampul9.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 9'),
            'views' => 11
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 5
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 1
        ]);

        // post 10

        $post = Post::create([
            'category_id' => '5',
            'id_user' => 5,
            'judul' => 'Judul 10',
            'sampul' => 'sampul10.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 10'),
            'views' => 20
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 6
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 7
        ]);

        // post 11

        $post = Post::create([
            'category_id' => '5',
            'id_user' => 5,
            'judul' => 'Judul 11',
            'sampul' => 'sampul11.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 11'),
            'views' => 22
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 5
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 6
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 3
        ]);

        // post 12

        $post = Post::create([
            'category_id' => '6',
            'id_user' => 6,
            'judul' => 'Judul 12',
            'sampul' => 'sampul12.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 12'),
            'views' => 12
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 7
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 6
        ]);

        // post 13

        $post = Post::create([
            'category_id' => '6',
            'id_user' => 7,
            'judul' => 'Judul 13',
            'sampul' => 'sampul13.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 13'),
            'views' => 16
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 6
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 2
        ]);

        // post 14

        $post = Post::create([
            'category_id' => '6',
            'id_user' => 8,
            'judul' => 'Judul 14',
            'sampul' => 'sampul14.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 14'),
            'views' => 9
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 3
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 4
        ]);

        // post 15

        $post = Post::create([
            'category_id' => '7',
            'id_user' => 6,
            'judul' => 'Judul 15',
            'sampul' => 'sampul15.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 15'),
            'views' => 13
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 7
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 2
        ]);
        // post 16

        $post = Post::create([
            'category_id' => '7',
            'id_user' => 7,
            'judul' => 'Judul 16',
            'sampul' => 'sampul16.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 16'),
            'views' => 24
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 3
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 6
        ]);
        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 5
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 4
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 3
        ]);
        // post 17

        $post = Post::create([
            'category_id' => '7',
            'id_user' => 7,
            'judul' => 'Judul 17',
            'sampul' => 'sampul17.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 17'),
            'views' => 12
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 4
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 7
        ]);
        // post 18

        $post = Post::create([
            'category_id' => '8',
            'id_user' => 7,
            'judul' => 'Judul 18',
            'sampul' => 'sampul18.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 18'),
            'views' => 16
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 6
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 3
        ]);
        // post 19

        $post = Post::create([
            'category_id' => '8',
            'id_user' => 6,
            'judul' => 'Judul 19',
            'sampul' => 'sampul19.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 19'),
            'views' => 12
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 7
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 5
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 4
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 2
        ]);
        Like::create([
            'id_post' => $post->id,
            'id_user' => 3
        ]);
        
        // post 20

        $post = Post::create([
            'category_id' => '8',
            'id_user' => 8,
            'judul' => 'Judul 20',
            'sampul' => 'sampul20.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 20'),
            'views' => 15
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 7
        ]);

        
        // post 21

        $post = Post::create([
            'category_id' => '9',
            'id_user' => 8,
            'judul' => 'Judul 21',
            'sampul' => 'sampul21.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 21'),
            'views' => 18
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 6
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 2
        ]);
        // post 22

        $post = Post::create([
            'category_id' => '9',
            'id_user' => 8,
            'judul' => 'Judul 22',
            'sampul' => 'sampul22.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 22'),
            'views' => 10
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 2
        ]);

        // post 23

        $post = Post::create([
            'category_id' => '10',
            'id_user' => 6,
            'judul' => 'Judul 23',
            'sampul' => 'sampul23.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 23'),
            'views' => 19
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 5
        ]);

        // post 24

        $post = Post::create([
            'category_id' => '10',
            'id_user' => 6,
            'judul' => 'Judul 24',
            'sampul' => 'sampul24.jpg',
            'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt augue interdum velit euismod in pellentesque massa placerat duis. Non nisi est sit amet. In massa tempor nec feugiat nisl pretium fusce. Sed adipiscing diam donec adipiscing tristique risus. In iaculis nunc sed augue lacus. Ultrices eros in cursus turpis massa. Tempor nec feugiat nisl pretium fusce id. Est ante in nibh mauris cursus mattis. Massa sed elementum tempus egestas. Est sit amet facilisis magna etiam tempor orci. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Faucibus ornare suspendisse sed nisi lacus sed. Tincidunt vitae semper quis lectus nulla at volutpat. Ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum.

Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In est ante in nibh. Nunc sed id semper risus in hendrerit. Adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet. Amet volutpat consequat mauris nunc. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Feugiat nisl pretium fusce id velit ut tortor pretium.

Adipiscing at in tellus integer feugiat scelerisque varius. Mi quis hendrerit dolor magna eget. Massa tincidunt dui ut ornare lectus sit amet est. Facilisis gravida neque convallis a cras semper. Tempus quam pellentesque nec nam aliquam sem et. Et sollicitudin ac orci phasellus egestas. Auctor neque vitae tempus quam. Tincidunt dui ut ornare lectus sit. Lectus quam id leo in vitae. Mauris a diam maecenas sed enim ut. Integer feugiat scelerisque varius morbi enim nunc. Amet volutpat consequat mauris nunc congue nisi vitae. Dui accumsan sit amet nulla. Nisl purus in mollis nunc sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Id neque aliquam vestibulum morbi blandit cursus risus.',
            'slug' => Str::slug('Judul 23'),
            'views' => 19
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 3
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 2
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 5
        ]);
        

        
    }
}
