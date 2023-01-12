<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1>Halaman Edit</h1>
    <form action="/post/{{ $showPostById->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" placeholder="Title"
        value="{{ $showPostById->title }}">
        <input type="text" name="body" placeholder="Body"
        value="{{ $showPostById->body }}">
        <button type="submit">Submit</button>
    </form>
</body>
</html>