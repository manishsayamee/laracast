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

        $user=User::factory()->create([
            "name" =>"Jon Doe"]
);
        Post::factory(5)->create([
            "user_id"=>$user->id,
        ]);

        // User::factory(10)->create();

    //     User::truncate();
    //     Category::truncate();
    //     Post::truncate();

        
    //     $user = User::factory()->create();

    //     $personal = Category::create([
    //         'name'=>'Personal',
    //         'slug'=>'personal'
    //     ]);

    //     $hobbies = Category::create([
    //         'name'=>'Hobbies',
    //         'slug'=>'hobbies'
    //     ]);
    //     $work = Category::create([
    //         'name'=>'Work',
    //         'slug'=>'work'
    //     ]);


    //     Post::create([
    //         'user_id' =>$user->id,
         
    //         'category_id' =>$personal->id,
    //         'slug'=>"my-perosnal-post",
    //         'title'=> 'My personal post',
    //         'excerpt'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
    //         'body'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
    //     ]);
    //     Post::create([
    //         'user_id' => $user->id,
    //         'category_id' =>$work->id,
    //         'slug'=>"my-work-post",
    //         'title'=> 'my work post',
    //         'excerpt'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
    //         'body'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
    //     ]);
    //     Post::create([
    //         'user_id' => $user->id,
    //         'category_id' =>$hobbies->id,
    //         'slug'=>"my-hobbies-post",
    //         'title'=> 'My hobbies post',
    //         'excerpt'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
    //         'body'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
    //     ]);
        

    }
}
