<?php

namespace App\Models;

use Illuminate\Support\Facades\File;

class Post


{

    public $title;
    public $date;
    public $body;
    public $excerpt;
    public $slug;

    public function __construct($excerpt, $date, $body, $title, $slug){

        $this->title = $title;
        $this->body = $body;
        $this->date = $date;
        $this->excerpt = $excerpt;
        $this->slug = $slug;
    }

    public static function all()
    {
        return cache() -> rememberForever('posts.all', function(){
            return collect(File::files(resource_path("posts")))
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(fn($document)=> new Post(
                        $document->title,
                        $document->excerpt,
                        $document->date,
                        $document->body(),
                        $document->slug
            ))
            ->sort('dates');

        })

    }

    public static function find($slug){

        // if(! file_exists($path = resource_path("posts/{$slug}.html"))){
        //     // return redirect('/');
        //     throw new ModelNotFoundException();


        // }

        // $post = cache()->remember("posts.{$slug}", 5 , fn() =>file_get_contents($path));

        // return view('post',[
        //     'post' =>$post
        // ]);

        return static::all()->firstWhere('slug', $slug);
        //  dd($posts)



    }

};

?>