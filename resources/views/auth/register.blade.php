@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>    
    <link rel="stylesheet" href="{{ asset('assets/estilos.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body> 
 <div class="container-all">
        <div class="ctn-form">
            <img src="img/logo-azul.png" alt="" class="logo">
            <h1 class="title">Crear Cuenta</h1>

		<form action="{{ route('register') }}"method="POST" >
               @csrf
               
	<div class="form-box">
            <input type="text" class="form-input @error('name') is-invalid @enderror" id="name" name="name" placeholder=" " value="{{ old('name') }}" required autocomplete="name">
            <label for="name" class="form-label">Nombre Usuario</label>
			@error('name')
                     <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                  </span> 
                  @enderror
      </div>
    
	<div class="form-box">
            <input type="email" class="form-input @error('email') is-invalid @enderror" id="email" name="email" placeholder=" " value="{{ old('email') }}" required autocomplete="email">
            <label for="email" class="form-label">Email</label>  
			 @error('email')
                       <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                        </span>
                   @enderror                  
      </div>

      <div class="form-box">
            <input type="password" class="form-input @error('password') is-invalid @enderror" id="password" name="password" placeholder=" " required autocomplete="new-password">
            <label for="password" class="form-label" name="password" >Contraseña</label>  
			@error('password')
                      <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                  @enderror                  
       </div> 

      <div class="form-box">
             <input type="password" class="form-input" id="password_confirmation" name="password_confirmation" placeholder=" " required autocomplete="new-password">
             <label for="password_confirmation" class="form-label" name="password" >Contraseña</label>                    
      </div>

	<input type="submit" value="Registrarse">

</body>
</html>

@endsection
