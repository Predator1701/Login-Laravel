<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    {{-- @isset($mensaje)
    <div class="alert alert-success" role="alert">
        {{$mensaje}}
    </div>
    @endisset --}}

    <div>
        <form method="POST" action="{{ route('User.update', ['User' => $user->id]) }}">
                @csrf
                @method("PUT")
                <div>
                    <label for="text"> Nombre</label>
                    <input type="text" id="name" name="name" value="{{old('name',$user->name)}}"/><br>
                </div>
                
                <div> 
                    <label for="text">Email</label>
                    <input type="email" id="email" name="email" value="{{old('email',$user->email)}}" />
                </div>

                <div>
                    <label for="text">Contraseña</label>
                    <input type="password" id="password" name="password" value="{{'password',old($user->password)}}"/>
                </div>
                <div>
                    <button>Guardar</button>
                </div>
        </form>
    </div>

</body>
</html>