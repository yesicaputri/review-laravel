<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Detail Profile</h1>
    <input type="text" name="nama" value="{{ $profiles->nama }}" disabled> 
    <input type="text" name="alamat" value="{{ $profiles->alamat }}" disabled> 
    <button>
        <a href="{{ route('profile.index') }}">Kembali</a>
</button>
</body>
</html>