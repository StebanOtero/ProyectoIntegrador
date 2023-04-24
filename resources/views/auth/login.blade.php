@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>    
    <link rel="stylesheet" href="{{ asset('assets/styles.css')}}">
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
            <h1 class="title">Iniciar Sesión</h1>   

            <form action="{{ route('login') }}"method="POST" >
                @csrf
                <div class="form-box">
                    <input type="email" class="form-input @error('email') is-invalid @enderror" id="email" name="email" placeholder=" " value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label for="email" class="form-label">Usuario</label>		     
                    
			 @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror          
         </div>

                <div class="form-box">
                    <input type="password" class="form-input @error('password') is-invalid @enderror" id="password" name="password" placeholder=" " required autocomplete="current-password">
                    <label for="password" class="form-label" name="password" >Contraseña</label> 
				@error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                 
                </div> 

                <div class="row" >
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>             

                <input type="submit" value="Iniciar">		                

                <section class="buttons">
                    <a href="https://www.facebook.com/IngenieriasUNIAJC" target="_blank" class="fa fa-facebook" style="color: #F4F4F4"></a>
                    <a href="https://www.instagram.com/uniajc_/" target="_blank"class="fa fa-instagram" style="color: #F4F4F4"></a>
                    <a href="https://twitter.com/UNIAJC" target="_blank"class="fa fa-twitter" style="color: #F4F4F4"></a>
                </section>
                
            </form>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            
        </div>
        <div class="ctn-text">
            <div class="capa">
            </div>
        </div>
    </div>  
    
</body>
</html>

@endsection
