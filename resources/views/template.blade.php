<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Selamat Datang,{{ Auth::user()->name }}
    <br>
    <a href="user/logout">Keluar</a>
    <a href="user/logout">Home</a>
 
    @if(Auth::user()->level == 'admin')
    <a href="user/logout">User</a>
    @endif

</body>
</html>