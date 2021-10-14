<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
        "title" => "Judul Tulisan Pertama" ,
        "slug" => "judul-Tulisan-pertama",
        "author" => "Azhar Fiqri Dwiyana",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia consequatur quisquam similique veniam beatae, corporis nihil esse itaque perferendis ad tempore odit assumenda eligendi molestiae quidem nisi alias quae ex culpa? Modi voluptatum corrupti autem deserunt laborum error odit labore unde, culpa debitis, omnis ut cum rerum accusamus doloremque ipsa? Qui nostrum itaque autem ut accusamus reprehenderit dignissimos optio eveniet numquam quia asperiores dicta deserunt, repellendus odio, harum vel. Facilis accusamus quia suscipit eaque nobis voluptates vitae in voluptatibus voluptas."
        ],
        [
        "title" => "Judul Tulisan kedua" ,
        "slug" => "judul-Tulisan-kedua",
        "author" => "Kurosaki Ichigo",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro sed omnis eius enim assumenda quidem ipsam, praesentium voluptates repellat, voluptatibus commodi fugiat temporibus, odio impedit. Fugit eveniet quisquam sint mollitia sit unde ipsam deleniti recusandae voluptatibus, eius voluptates, voluptatem autem esse necessitatibus modi deserunt odio a iste. Dignissimos cumque laboriosam, nisi doloribus reprehenderit laudantium delectus, nihil repellat adipisci quas facere, deserunt eum atque quibusdam voluptatem? Iste eaque vitae suscipit minus voluptas optio rerum placeat, doloremque beatae natus. Vel sed consectetur fugiat, est voluptas distinctio ullam iusto quis tempore consequuntur alias harum, dolorum temporibus aspernatur error odit omnis eius eveniet libero."
        ]
        ];
    
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
    }
}
