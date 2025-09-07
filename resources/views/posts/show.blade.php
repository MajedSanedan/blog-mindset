<x-app-layout>
    <h1>{{$post->title}}</h1>
    <h5> <strong>{{$post->user->name}}</strong> | {{$post->created_at->format('Y-m-d') }}</h5>
       <img src="{{ asset('storage/' . $post->image) }}" alt="صورة المنشور" style="width: 500px; height: 300px; object-fit: cover; border-radius: 5px;">
    <p>{{$post->content}}</p>
</x-app-layout>