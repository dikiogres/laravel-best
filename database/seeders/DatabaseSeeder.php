<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'=> 'Dzikri Syairozi',
            'email'=>'dzikrisyairozi@gmail.com',
            'password'=>bcrypt('12345')
        ]);

        User::create([
            'name'=> 'Gabriella Natasya',
            'email'=>'gaby@gmail.com',
            'password'=>bcrypt('69696')
        ]);

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Post::create([
            'title'=> 'Dzikri Syairozi',
            'slug'=>'dzikri-syairozi',
            'excerpt'=>'Gaby sayang consectetur adipisicing elit. Nam repudiandae magnam voluptatem aut,',
            'body'=>'Gaby sayang consectetur adipisicing elit. Nam repudiandae magnam voluptatem aut,
            Gaby sayang consectetur adipisicing elit. Nam repudiandae magnam voluptatem aut, pariatur nesciunt neque recusandae nihil quisquam harum non soluta quasi nostrum nulla unde, consequatur optio dolorem vero tenetur ea error explicabo veritatis, minus suscipit. Minus culpa, quidem dolorum atque maiores doloribus molestiae debitis autem, quae libero molestias aperiam consequatur assumenda in maxime, blanditiis temporibus unde vero repudiandae. Veniam, veritatis aque repellat odit eos neque accusantium dolorem quas quibusdam necessitatibus perspiciatis, ducimus nisi totam exercitationem. Incidunt dolorem, aliquid eos aspernatur sit dicta perspiciatis ipsam illum voluptate, molestiae ut veniam laboriosam tempore, quia voluptatum! Magnam ipsum culpa id porro!',
            'category_id'=>1,
            'user_id'=>2
        ]);

        Post::create([
            'title'=> 'Gabriella Natasya',
            'slug'=>'gabriella-natasya',
            'excerpt'=>'Lorem consectetur adipisicing elit. Nam repudiandae magnam voluptatem aut,',
            'body'=>'Lorem consectetur adipisicing elit. Nam repudiandae magnam voluptatem aut,
            Gaby sayang consectetur adipisicing elit. Nam repudiandae magnam voluptatem aut, pariatur nesciunt neque recusandae nihil quisquam harum non soluta quasi nostrum nulla unde, consequatur optio dolorem vero tenetur ea error explicabo veritatis, minus suscipit. Minus culpa, quidem dolorum atque maiores doloribus molestiae debitis autem, quae libero molestias aperiam consequatur assumenda in maxime, blanditiis temporibus unde vero repudiandae. Veniam, veritatis aque repellat odit eos neque accusantium dolorem quas quibusdam necessitatibus perspiciatis, ducimus nisi totam exercitationem. Incidunt dolorem, aliquid eos aspernatur sit dicta perspiciatis ipsam illum voluptate, molestiae ut veniam laboriosam tempore, quia voluptatum! Magnam ipsum culpa id porro!',
            'category_id'=>1,
            'user_id'=>1
        ]);

        Post::create([
            'title'=> 'Gabriella Syairozi',
            'slug'=>'gabriella-syairozi',
            'excerpt'=>'Cihuy adipisicing elit. Nam repudiandae magnam voluptatem aut,',
            'body'=>'Cihuy adipisicing elit. Nam repudiandae magnam voluptatem aut,
            Gaby sayang consectetur adipisicing elit. Nam repudiandae magnam voluptatem aut, pariatur nesciunt neque recusandae nihil quisquam harum non soluta quasi nostrum nulla unde, consequatur optio dolorem vero tenetur ea error explicabo veritatis, minus suscipit. Minus culpa, quidem dolorum atque maiores doloribus molestiae debitis autem, quae libero molestias aperiam consequatur assumenda in maxime, blanditiis temporibus unde vero repudiandae. Veniam, veritatis aque repellat odit eos neque accusantium dolorem quas quibusdam necessitatibus perspiciatis, ducimus nisi totam exercitationem. Incidunt dolorem, aliquid eos aspernatur sit dicta perspiciatis ipsam illum voluptate, molestiae ut veniam laboriosam tempore, quia voluptatum! Magnam ipsum culpa id porro!',
            'category_id'=>2,
            'user_id'=>1
        ]);

        Post::create([
            'title'=> 'Dzikri Natasya',
            'slug'=>'dzikri-natasya',
            'excerpt'=>'gajelas elit. Nam repudiandae magnam voluptatem aut,',
            'body'=>'gajelas adipisicing elit. Nam repudiandae magnam voluptatem aut,
            Gaby sayang consectetur adipisicing elit. Nam repudiandae magnam voluptatem aut, pariatur nesciunt neque recusandae nihil quisquam harum non soluta quasi nostrum nulla unde, consequatur optio dolorem vero tenetur ea error explicabo veritatis, minus suscipit. Minus culpa, quidem dolorum atque maiores doloribus molestiae debitis autem, quae libero molestias aperiam consequatur assumenda in maxime, blanditiis temporibus unde vero repudiandae. Veniam, veritatis aque repellat odit eos neque accusantium dolorem quas quibusdam necessitatibus perspiciatis, ducimus nisi totam exercitationem. Incidunt dolorem, aliquid eos aspernatur sit dicta perspiciatis ipsam illum voluptate, molestiae ut veniam laboriosam tempore, quia voluptatum! Magnam ipsum culpa id porro!',
            'category_id'=>2,
            'user_id'=>2
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
