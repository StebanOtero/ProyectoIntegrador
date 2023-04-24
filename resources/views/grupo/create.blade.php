@extends('layout.plantilla')

@section('titulo') AppDev-Gestion
@endsection

@section('contenido')
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h4>Registrar Grupos</h4><br>
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
{!!Form::open(array('url'=>'grupo','method'=>'POST','autocomplete'=>'off')
)!!}
{{Form::token()}}
<div class="row">
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="nombre">Nombre Grupo</label>
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Digite el nombre del grupo">
    </div>
</div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="can_alum">Cantidad Alumnos</label>
        <input type="text" name="can_alum" id="can_alum" class="form-control" placeholder="Cantidad de Alumnos">
    </div>
</div>
<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
<div class="form-group"><br>
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span><i class="fa-solid fa-floppy-disk"></i></button>

<button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span><i class="fa-solid fa-ban"></i></button>

<a class="btn btn-info" type="reset" href="{{url('grupo')}}"><span class="glyphicon glyphicon-home"></span><i class="fa-solid fa-backward"></i></a>
</div>
</div>
</div>
{!!Form::close()!!}
@endsection