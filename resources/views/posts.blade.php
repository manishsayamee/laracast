<x-layout>

@include('_posts-header')
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
          <x-card-featured-post />

            <div class="lg:grid lg:grid-cols-2">
            <x-post-card />
            <x-post-card />

            </div>

            <div class="lg:grid lg:grid-cols-3">
   
            <x-post-card />
            <x-post-card />
            <x-post-card />

            </div>
        </main>
<!-- 
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
@endforeach -->
</x-layout>