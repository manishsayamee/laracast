<x-layout>

<!-- <x-slot"> -->
@foreach ($posts as $post) 

<article>
    <h1>
        <a href="/posts/{{ $post->slug }}">
        <!-- {{ $post->title }}</a> -->
    </h1>


    <div>

    {{ $post->title }}
    </div>


</article>
@endforeach
</x-layout>