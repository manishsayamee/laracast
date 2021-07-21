<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;
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

// Route::get('/', function () {
//     return view('posts');
// }); 



// Route:: get('/', function(){
//     $posts=Post::all();
//     ddd($posts->getContents());
//     return view('posts',[
//         'posts'=>$posts

//     ]);
// });

// Route::get('/', function (){
//     $document = YamlFrontMatter::parseFile(
//         resource_path('posts/my-forth-post.html')
       
//     );
//     ddd($document->matter('title'));
// });


    // $posts = collect($files)
    // ->map(function($file){
    //     $document = YamlFrontMatter::parseFile($file);
    //     return new Post(
    //         $document->title,
    //         $document->excerpt,
    //         $document->date,
    //         $document->body(),
    //         $document->slug
    
    //     );

    // });


// OR
    // $posts = array_map(function ($file){
    //     $document = YamlFrontMatter::parseFile($file);
    //     return new Post(
    //         $document->title,
    //         $document->excerpt,
    //         $document->date,
    //         $document->body(),
    //         $document->slug
    
    //     );


    // }, $files);


//     foreach ($files as $file){
//     $document = YamlFrontMatter::parseFile($file);

//     $posts[] = new Post(
//         $document->title,
//         $document->excerpt,
//         $document->date,
//         $document->body(),
//         $document->slug

//     );
// }

// Route::get('/', function(){
//     $posts = Post::all();
//     // ddd($posts);
//     return view('posts', [
//         'posts'=>$posts
//     ]);
// });

// Route::get('/', function () {
//     return Post::find('first-post');
//     return view('posts');
// }); 

// Route::get("/post", function(){
//     $post = file_get_contents(__DIR__ . '/../resources/posts/first-post.html');
//     return view('post', [
//         // 'post' =>file_get_contents(__DIR__ . '/../resources/posts/first-post.html')
//         'post' => $post
//     ]);
// }); 


    // find a post by its slug and  pass it to  a view called 'post'

    // $post = Post::find($slug);

    // return view ('post', [
    //     'post'=>$post
    // ]);




    // $path = __DIR__ . "/../resources/posts/{$slug}.html";
    // ddd($path);



//     if(! file_exists($path)){
//         // ddd('file doesnot exist');
//         // abort(404);
//         return redirect('/');

//     }

//     $post = cache()->remember("posts.{$slug}", 5 , function() use ($path){
//         var_dump("file_get_contents");
//         return file_get_contents($path);

//     });

//     // $post = file_get_contents($path);
//     return view('post',[
//         'post' =>$post
//     ]);
// })-> where('post', '[A-z]+');


Route::get('/', function(){
    return view('posts', [
        'posts'=>Post::all()
    ]);
});

// Route::get('posts/{post}', function($id){
//     return view ('post',[
//         'post'=>Post::findOrFail($id)
//     ]);
// });
// Route bind method

Route::get ('posts/{post:slug}', function(Post $post){
    return view('post', [
        'post' =>$post
    ]);
});