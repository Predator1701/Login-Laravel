<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="/User/create">Nuevo</a>

<div>
    <h1>Lista de Nombres</h1>
        <ul>
            @foreach($users as $usuario)
            <li>{{$usuario->name}} - {{$usuario->email}}  <a href="/User/{{$usuario->id}}">Ver</a>  
                <a href="/User/{{$usuario->id}}/edit">Editar</a>
                
                <form method="POST" action="{{ route('User.destroy', ['User' => $usuario->id]) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
            </li>
            @endforeach
        </ul>


</div>

<div>
    <form method="POST" action="{{route('logout')}}">
        @csrf
        <button type="submit">Salir</button>
    </form>
    </div>
</body>
</html>