@extends('layout.plantilla')

@section('titulo') AppDev-Gestion
@endsection
<link rel="shortcut icon" type="image/png" href="{{asset('favicon.png')}}">
@section('contenido')
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h4>Registrar Docente</h4><br>
@if (count($errors)>0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
</div>
</div>
{!!Form::open(array('url'=>'docente','method'=>'POST','autocomplete'=>'off')
)!!}
{{Form::token()}}
<div class="row">
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="documento_identidad">Número Documento</label>
        <input type="number" name="documento_identidad" id="documento_identidad" class="form-control" placeholder="Digite el número Documento">
    </div>
</div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="nombre">Nombres</label>
        <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Nombre Completo">
    </div>
</div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="apellido">Apellidos</label>
        <input type="text" name="apellidos" id="apeliidos" class="form-control" placeholder="Apellidos Completos">
    </div>
</div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="genero">Género</label>
        <select type="text" name="genero" id="genero" class="form-control">
                <option hidden selected>Selecciona un Género</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
        </select> 
    </div>
</div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="profesion">Profesión</label>
        <input type="text" name="profesion" id="profesion" class="form-control" placeholder="Profesión">
    </div>
</div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="facultad">Facultad</label>
        <select type="text" name="facultad" id="facultad" class="form-control">
        <option hidden selected>Selecciona una Facultad</option>
                <option value="Ingenierías">Ingenierías</option>
                <option value="CienciasEmpresariales">Ciencias Empresariales</option>
                <option value="EducaciónaDistancia">Educación a Distancia</option>
                <option value="CienciasSocialesyHumanas">Ciencias Sociales y Humanas</option>
        </select>
    </div>
</div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Teléfono">
    </div>
</div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="dir_resi">Dir.Residencia</label>
        <input type="text" name="dir_resi" id="dir_resi" class="form-control" placeholder="Dir.Residencia">
    </div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="email">Correo</label>
        <input type="text" name="email" id="email" class="form-control" placeholder="Correo">
    </div>
</div>
<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
<div class="form-group"><br>
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span><i class="fa-solid fa-floppy-disk"></i></button>

<button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span><i class="fa-solid fa-ban"></i></button>

<a class="btn btn-info" type="reset" href="{{url('docente')}}"><span class="glyphicon glyphicon-home"></span><i class="fa-solid fa-backward"></i></a>
</div>
</div>
</div>
{!!Form::close()!!}
@endsection