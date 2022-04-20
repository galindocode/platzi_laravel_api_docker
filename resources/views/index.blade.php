<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="m-8">
        <div class="grid grid-cols-4">
            @foreach ($posts as $post)
        <div class="bg-gray-300 hover:bg-blue-300 hover:cursor-pointer transition-all duration-500 rounded shadow-lg m-8 p-4">
            <h2 class="text-gray-800 text-lg mb-4">{{ $post->title }}</h2>
            <p class="p4 text-gray-600">{{ $post->exceprt }}</p>
            <small class="mb-auto my-8 text-gray-400">{{ $post->created_at->diffForHumans() }}</small>
        </div>
        @endforeach
        </div>
    </div>
    <div class="text-center flex mb-8">
        {{ $posts->links() }}
    </div>
</body>
</html>