<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    
    <form method="POST" action="{{route('login.store')}}">
        @csrf
        
        <label>Nombre</label>
        <input type="text" id="name" name="name" value="{{old('name')}}"/>
        <br>
        <br>

        <label>Email</label>
        <input type="email" id="email" name="email" value="{{old('email')}}"/>
        <br>
        <br>

        <label>Password</label>
        <input type="password" id="password" name="password" value="{{old('password')}}"/>
        <br>
        <br>

        <button type="submit">Sing up</button>
    </form>


</body>
</html>