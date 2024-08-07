<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="login/css/login.css">
     <link rel="stylesheet" href="login/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="login"> 

    <div class="mt-5 container-fluid d-flex justify-content-center">                         
  
    <form method="POST" action="{{ route('auth') }}">                         
          @csrf  
            <h4 class="form-title">Inicio de Sesión</h4>
            <div class="form-group">
                 <label class="control-label">USUARIO:</label>
                <div class="input-icon">
                    <i class="fas fa-user"></i>
                    <input class="form-control @error('name') is-invalid @enderror"  type="text"  placeholder="Ingrese usuario" id="name" name="name" value="{{old('name')}}"/>  
                                          
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                 </div>
            </div>
            <div class="form-group">
                <label class="control-label">CONTRASEÑA:</label>
                <div class="input-icon">
                       <i class="fas fa-lock"></i>
                    <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Ingrese contraseña"  id="password" name="password"  value="{{old('password')}}"/>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
            </div>                

            <hr />
            <div class="form-actions justify-content-center d-flex flex-column">
                <button class="btn btn-success btn-block">
                     Ingresar </button>
                <p class="mt-5">No tienes una cuenta? <a href="{{ route('register' )}}"> Registrate Aquí</a></p>     
            </div>
            <hr />
        </form>            
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>