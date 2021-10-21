<?php

namespace Database\Seeders;

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

        // User::create([
        //     'name' => 'Azhar Fiqri Dwiyana',
        //     'email' => 'azharfd@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        // User::create([
        //     'name' => 'Kurosaki Ichigo',
        //     'email' => 'ichigo@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla repudiandae dolore enim laboriosam excepturi alias ducimus, adipisci voluptatum est reprehenderit sunt odio reiciendis suscipit? Voluptatibus consequatur velit amet,' ,
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat vitae harum quisquam, officia accusantium nam at tempore similique neque error illo dolores quidem maiores iste corporis. Est non repellendus, illo consequatur molestiae ut doloremque dolores earum ex voluptas harum ipsam deserunt optio numquam soluta quia porro laboriosam. Nisi dolore ut quae, nulla unde eligendi tenetur sapiente velit enim mollitia aut, doloremque esse. Distinctio qui autem eos nobis facilis ex maiores officiis nemo! Quibusdam pariatur quod illo molestias deserunt veniam unde at ipsa! Atque architecto aliquam tempora provident quae ex reprehenderit iusto sed fugit ratione amet voluptas, aut doloremque sint sit!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla repudiandae dolore enim laboriosam excepturi alias ducimus, adipisci voluptatum est reprehenderit sunt odio reiciendis suscipit? Voluptatibus consequatur velit amet,' ,
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat vitae harum quisquam, officia accusantium nam at tempore similique neque error illo dolores quidem maiores iste corporis. Est non repellendus, illo consequatur molestiae ut doloremque dolores earum ex voluptas harum ipsam deserunt optio numquam soluta quia porro laboriosam. Nisi dolore ut quae, nulla unde eligendi tenetur sapiente velit enim mollitia aut, doloremque esse. Distinctio qui autem eos nobis facilis ex maiores officiis nemo! Quibusdam pariatur quod illo molestias deserunt veniam unde at ipsa! Atque architecto aliquam tempora provident quae ex reprehenderit iusto sed fugit ratione amet voluptas, aut doloremque sint sit!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla repudiandae dolore enim laboriosam excepturi alias ducimus, adipisci voluptatum est reprehenderit sunt odio reiciendis suscipit? Voluptatibus consequatur velit amet,' ,
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat vitae harum quisquam, officia accusantium nam at tempore similique neque error illo dolores quidem maiores iste corporis. Est non repellendus, illo consequatur molestiae ut doloremque dolores earum ex voluptas harum ipsam deserunt optio numquam soluta quia porro laboriosam. Nisi dolore ut quae, nulla unde eligendi tenetur sapiente velit enim mollitia aut, doloremque esse. Distinctio qui autem eos nobis facilis ex maiores officiis nemo! Quibusdam pariatur quod illo molestias deserunt veniam unde at ipsa! Atque architecto aliquam tempora provident quae ex reprehenderit iusto sed fugit ratione amet voluptas, aut doloremque sint sit!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla repudiandae dolore enim laboriosam excepturi alias ducimus, adipisci voluptatum est reprehenderit sunt odio reiciendis suscipit? Voluptatibus consequatur velit amet,' ,
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat vitae harum quisquam, officia accusantium nam at tempore similique neque error illo dolores quidem maiores iste corporis. Est non repellendus, illo consequatur molestiae ut doloremque dolores earum ex voluptas harum ipsam deserunt optio numquam soluta quia porro laboriosam. Nisi dolore ut quae, nulla unde eligendi tenetur sapiente velit enim mollitia aut, doloremque esse. Distinctio qui autem eos nobis facilis ex maiores officiis nemo! Quibusdam pariatur quod illo molestias deserunt veniam unde at ipsa! Atque architecto aliquam tempora provident quae ex reprehenderit iusto sed fugit ratione amet voluptas, aut doloremque sint sit!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
