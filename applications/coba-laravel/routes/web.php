<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('home' , [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About" ,
        "name" => "Azhar Fiqri Dwiyana",
        "email" => "azharfd@gmail.com" ,
        "image" => "Azhar.png"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
        "title" => "Judul Post Pertama" ,
        "slug" => "judul-post-pertama",
        "author" => "Azhar Fiqri Dwiyana",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia consequatur quisquam similique veniam beatae, corporis nihil esse itaque perferendis ad tempore odit assumenda eligendi molestiae quidem nisi alias quae ex culpa? Modi voluptatum corrupti autem deserunt laborum error odit labore unde, culpa debitis, omnis ut cum rerum accusamus doloremque ipsa? Qui nostrum itaque autem ut accusamus reprehenderit dignissimos optio eveniet numquam quia asperiores dicta deserunt, repellendus odio, harum vel. Facilis accusamus quia suscipit eaque nobis voluptates vitae in voluptatibus voluptas."
        ],
        [
        "title" => "Judul Post Kedua" ,
        "slug" => "judul-post-kedua",
        "author" => "Kurosaki Ichigo",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro sed omnis eius enim assumenda quidem ipsam, praesentium voluptates repellat, voluptatibus commodi fugiat temporibus, odio impedit. Fugit eveniet quisquam sint mollitia sit unde ipsam deleniti recusandae voluptatibus, eius voluptates, voluptatem autem esse necessitatibus modi deserunt odio a iste. Dignissimos cumque laboriosam, nisi doloribus reprehenderit laudantium delectus, nihil repellat adipisci quas facere, deserunt eum atque quibusdam voluptatem? Iste eaque vitae suscipit minus voluptas optio rerum placeat, doloremque beatae natus. Vel sed consectetur fugiat, est voluptas distinctio ullam iusto quis tempore consequuntur alias harum, dolorum temporibus aspernatur error odit omnis eius eveniet libero."
        ]
    ];

    return view ('posts', [
        "title" => "Posts" ,
        "posts" => $blog_posts
    ]);
});


//halaman sigle post
Route::get('posts/{slug}' , function($slug) {
    $blog_posts = [
        [
        "title" => "Judul Post Pertama" ,
        "slug" => "judul-post-pertama",
        "author" => "Azhar Fiqri Dwiyana",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia consequatur quisquam similique veniam beatae, corporis nihil esse itaque perferendis ad tempore odit assumenda eligendi molestiae quidem nisi alias quae ex culpa? Modi voluptatum corrupti autem deserunt laborum error odit labore unde, culpa debitis, omnis ut cum rerum accusamus doloremque ipsa? Qui nostrum itaque autem ut accusamus reprehenderit dignissimos optio eveniet numquam quia asperiores dicta deserunt, repellendus odio, harum vel. Facilis accusamus quia suscipit eaque nobis voluptates vitae in voluptatibus voluptas."
        ],
        [
        "title" => "Judul Post Kedua" ,
        "slug" => "judul-post-kedua",
        "author" => "Kurosaki Ichigo",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro sed omnis eius enim assumenda quidem ipsam, praesentium voluptates repellat, voluptatibus commodi fugiat temporibus, odio impedit. Fugit eveniet quisquam sint mollitia sit unde ipsam deleniti recusandae voluptatibus, eius voluptates, voluptatem autem esse necessitatibus modi deserunt odio a iste. Dignissimos cumque laboriosam, nisi doloribus reprehenderit laudantium delectus, nihil repellat adipisci quas facere, deserunt eum atque quibusdam voluptatem? Iste eaque vitae suscipit minus voluptas optio rerum placeat, doloremque beatae natus. Vel sed consectetur fugiat, est voluptas distinctio ullam iusto quis tempore consequuntur alias harum, dolorum temporibus aspernatur error odit omnis eius eveniet libero."
        ]
        ];
    
    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post' , [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});