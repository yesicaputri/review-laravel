<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1>Halaman Detail Post</h1>
    <form action="/post" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title"
        value="{{ $showPostById->title }}" disabled>
        <input type="text" name="body" placeholder="Body"
        value="{{ $showPostById->body }}" disabled>
        <button> <a href="/post">
          Back
    </a>
</button>
    </form>
</body>
</html>