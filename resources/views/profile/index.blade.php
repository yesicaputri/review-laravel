<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Profile </h1>
    <button> <a href="/profile/create">
           Create
    </a>
</button>
<table>
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($profiles as $profile)
        <tr>
            <td>{{ $loop->iteration }} </td>
            <td>{{ $profile->nama }}</td>
            <td>{{ $profile->alamat }}</td>
            <td>
    <form action="{{ route ('profile.destroy' , $profile->id)}}" method="POST">
        <a href="{{ route('profile.show', $profile->id)}}">detail</a>
        <a href="{{ route('profile.edit', $profile->id)}}">edit</a>
        @csrf 
        @method('DELETE')
        <input type="submit"  value="Delete">
        </td>
        </tr>
        @endforeach
</tbody>
</table>
</body>
</html>