<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <article class="rounded-md mt-5 p-8 max-w-screen-md border-b border-gray-300">

        <h2 class="text-3xl mb-1 font-bold">{{ $posts['title'] }}</h2>

        <div>
            <a class="text-gray-600" href="#">{{ $posts['author'] }}</a>
        </div>
        <p class="font-light my-4">{{ $posts['body'] }}</p>
        <a class="font-medium text-blue-500 hover:underline" href="/posts/">&laquo;kembali </a>
    </article>

</x-layout>
