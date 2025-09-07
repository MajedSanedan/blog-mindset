<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                
                    @foreach ($posts as $post)
                        <article class="blog-post">

                            <h4 class="blog-post-title"> {{ $post->title }}</h4>
                            <p class="blog-post-meta">
                                {{ $post->created_at->format('Y-m-d') }}<strong>{{ '  ' . $post->user->name }}</strong>
                            </p>

                            <p>{{ $post->content }}</p>
                            <a href="/post/{{ $post->id }}" class="btn btn-outline-primary">قراءة المزيد</a>
                        </article>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
