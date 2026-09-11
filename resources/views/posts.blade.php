<x-layout :title="$title">
    {{-- @dd($posts); // Digunakan untuk menampilkan isi dari variabel $posts, dd = dump and die --}}
    @foreach ($posts as $post)
        <a class="hover:underline" href="/posts/{{ $post['slug'] }}">
            <article class="max-w-3xl border-b border-gray-300 py-8">
                <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
                <div class="text-base text-gray-500">
                    <a href="#">{{ $post['author'] }}</a> | 5 Sept 2026
                </div>
                <p class="my-4 font-light">
                    {{ Str::limit($post['body'], 150) }}
                </p>
                <a class="font-medium text-blue-500 hover:underline" href="/posts/{{ $post['slug'] }}">Read more
                    &raquo;</a>
            </article>
    @endforeach



</x-layout>
