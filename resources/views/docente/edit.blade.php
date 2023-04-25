@extends('layout.plantilla')

@section('titulo') Docente-Actualizar
@endsection
<link rel="shortcut icon" type="image/png" href="{{asset('favicon.png')}}">
@section('contenido')
<div class="row">
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <h4>Editar Docente</h4><br>
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
{{Form::open(array('action'=>array('App\Http\Controllers\DocenteController@update', $docente->id),'method'=>'patch'))}}

<div class="row g-3">
 <div class="col-md-4">
    <label for="documento_identidad" class="form-label">Número Documento</label>
    <input type="number" name="documento_identidad" id="documento_identidad" class="form-control" value="{{$docente->documento_identidad}}">
 </div>
 <div class="col-md-4">
    <label for="nombres" class="form-label">Nombres</label>
    <input type="text" name="nombres" id="nombres" class="form-control" value="{{$docente->nombres}}">
 </div>
 <div class="col-4">
    <label for="Apellidos" class="form-label">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos" class="form-control" value="{{$docente->apellidos}}">
 </div>
 <div class="col-4">
    <label for="genero" class="form-label">Género</label>
    <select type="text" name="genero" id="genero" class="form-control" value="{{$docente->genero}}">
                    <option>{{$docente->genero}}</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
    </select> 
 </div>
 <div class="col-4">
    <label for="profesion" class="form-label">Profesión</label>
    <input type="text" name="profesion" id="profesion" class="form-control" value="{{$docente->profesion}}">
 </div>
 <div class="col-4">
    <label for="facultad" class="form-label">Facultad</label>
    <select type="text" name="facultad" id="facultad" class="form-control" value="{{$docente->facultad}}">
            <option>{{$docente->facultad}}</option>
            <option value="Ingenierías">Ingenierías</option>
            <option value="CienciasEmpresariales">Ciencias Empresariales</option>
            <option value="EducaciónaDistancia">Educación a Distancia</option>
            <option value="CienciasSocialesyHumanas">Ciencias Sociales y Humanas</option>
    </select> 
 </div>
 <div class="col-4">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="text" name="telefono" id="telefono" class="form-control" value="{{$docente->telefono}}">
 </div>
 <div class="col-4">
    <label for="dir_resi" class="form-label">Dir.Residencia</label>
    <input type="text" name="dir_resi" id="dir_resi" class="form-control" value="{{$docente->dir_resi}}">
 </div>
 <div class="col-4">
    <label for="email" class="form-label">Correo</label>
    <input type="text" name="email" id="email" class="form-control" value="{{$docente->email}}">
 </div>
 <div class="col-12">
 <button class="btn btn-primary" type="submit"><span class="glyphicon glyphiconrefresh"></span><i class="fa-solid fa-floppy-disk"></i>
 </button>
<a class="btn btn-info" type="reset" href="{{url('docente')}}"><span class="glyphicon glyphicon-home"></span><i class="fa-solid fa-backward"></i></a>
 </div>
 </div>
{!!Form::close()!!}
@endsection