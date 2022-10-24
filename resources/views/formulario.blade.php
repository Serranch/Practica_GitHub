<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULARIO DE FER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    @if (session()->has('confirmacion'))

    {!! "<script> Swal.fire(
        '¡¡¡¡EXELENTE!!!!',
        'Se a guardado !',
        'Tu usuario y contraseña se a guardado de manera correcta'
      ) </script>"  !!}
        
    @endif

    <div class="container mt-5 mb-5">
        <h1 class="display-3 text-center mt-5 mb-5" >FORMULARIO</h1>
        <figcaption class="blockquote-footer text-center">
            ¡¡Aqui guardamos tus diferentes usuarios!! 
          </figcaption>
        
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show" role="alert"">
                <strong>{{ $error }}</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
                
            @endforeach
            
        @endif
        

    <!--Contenido de la pagina --> 

    <div class="card text-center mb-5">
        <div class="display-6 card-header">Ingresa datos</div>

  
    <form method="post" action="guardarUsuario">
        @csrf

        <div class="mb-3">
          <label class="form-label" >Usuario</label>
          <input type="text" class="form-control" name="usuario">
          {{$errors->first('usuario')}}
        </div>

        <div class="mb-3">
          <label  class="form-label">Contraseña</label>
          <input type="password" class="form-control" name=contraseña>
          {{$errors->first('contraseña')}}  </p>
        </div>
        
        <button type="submit" class="btn btn-primary" {{request()->routeIs('form')}}">Guardar</button>
        <button {{request()->routeIs('ta')}}type="button" class="btn btn-primary" >Tabla</button>
      </form>
   
    </div>


 </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
