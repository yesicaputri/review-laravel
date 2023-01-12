<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
   <h1>Halaman Index Post</h1>
   
   <table>
    <thead>
        <tr>
            <td>No</td>
            <td>title</td>
            <td>body</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
        @forelse ($dataPost as $item=>$value)
          <tr>
            <td>{{ $item + 1 }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->body }}</td>
            <td>
            <form action="/post/{{$value->id}}" method="POST">
                <a href="post/{{ $value->id }}">detail</a>
                <a href="post/{{ $value->id }}/edit">edit</a>
                @csrf
                @method('DELETE')
                <input type="submit"  value="Delete">
            </form>
        </td>
        </tr>
        @empty
            <tr>
                <td>Data Masih Kosong</td>
            </tr>
        @endforelse
</tr>
</tbody>
</table>
</body>
</html>