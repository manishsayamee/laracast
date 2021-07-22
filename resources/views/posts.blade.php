<x-layout>

<x-slot">
@foreach ($posts as $post) 


<article>
    <h1>
        <a href="/posts/{{ $post->slug }}">
        {{ $post->title }}</a>
           By <a href="/author/{{$post->author->username}}">{{ $post->author->username }}in <a href="/categories/{{ $post->category->slug}}">{{ $post->category->name }}</a>
    </p>


    <div>

    {{ $post->excerpt }}
    </div>


</article>
@endforeach
</x-layout>