<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <article class="rounded-md mt-5 p-8 max-w-screen-md border-b border-gray-300">

        <h2 class="text-3xl mb-1 font-bold">{{ $post['title'] }}</h2>

        <div>
            By
            <a class="text-gray-600 hover:underline
            " href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
            In
            <a class="text-gray-600 hover:underline
            " href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>

            | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="font-light my-4">{{ $post['body'] }}</p>
        <a class="font-medium text-blue-500 hover:underline" href="/posts/">&laquo;kembali </a>
    </article>

</x-layout>
