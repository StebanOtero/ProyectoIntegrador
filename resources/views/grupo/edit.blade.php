@extends('layout.plantilla')

@section('titulo') Grupo-Actualizar
@endsection
<link rel="shortcut icon" type="image/png" href="{{asset('favicon.png')}}">
@section('contenido')
<div class="row">
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <h4>Editar Grupo</h4><br>
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
{{Form::open(array('action'=>array('App\Http\Controllers\GrupoController@update', $grupo->id),'method'=>'patch'))}}

<div class="row g-3">
 <div class="col-md-4">
    <label for="nombre" class="form-label">Nombre Grupo</label>
    <input type="text" name="nombre" id="nombre" class="form-control" value="{{$grupo->nombre}}">
 </div>
 <div class="col-md-4">
    <label for="can_alum" class="form-label">Cantidad Alumnos</label>
    <input type="text" name="can_alum" id="can_alum" class="form-control" value="{{$grupo->can_alum}}">
 </div>
 <div class="col-12">
 <button class="btn btn-primary" type="submit"><span class="glyphicon glyphiconrefresh"></span><i class="fa-solid fa-floppy-disk"></i>
 </button>
<a class="btn btn-info" type="reset" href="{{url('grupo')}}"><span class="glyphicon glyphicon-home"></span><i class="fa-solid fa-backward"></i></a>
 </div>
 </div>
{!!Form::close()!!}
@endsection