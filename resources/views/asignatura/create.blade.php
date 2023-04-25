@extends('layout.plantilla')

@section('titulo') AppDev-Gestion
@endsection
<link rel="shortcut icon" type="image/png" href="{{asset('favicon.png')}}">
@section('contenido')
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h4>Registrar Asignatura</h4><br>
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
{!!Form::open(array('url'=>'asignatura','method'=>'POST','autocomplete'=>'off')
)!!}
{{Form::token()}}
<div class="row">
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="codigo">Código Asignatura</label>
        <input type="text" name="codigo" id="codigo" class="form-control" placeholder="Digite el código">
    </div>
</div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="nombre">Nombre Asignatura</label>
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Asignatura">
    </div>
</div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="modalidad">Modalidad</label>
        <select type="text" name="modalidad" id="modalidad" class="form-control">
                <option hidden selected>Selecciona una Modalidad</option>
                <option value="Virtual">Virtual</option>
                <option value="Presencial">Presencial</option>
        </select> 
    </div>
</div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="creditos">Créditos Asignatura</label>
        <input type="number" name="creditos" id="creditos" class="form-control" placeholder="Cantidad Créditos">
    </div>
</div>
<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
<div class="form-group"><br>
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span><i class="fa-solid fa-floppy-disk"></i></button>

<button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span><i class="fa-solid fa-ban"></i></button>

<a class="btn btn-info" type="reset" href="{{url('asignatura')}}"><span class="glyphicon glyphicon-home"></span><i class="fa-solid fa-backward"></i></a>
</div>
</div>
</div>
{!!Form::close()!!}
@endsection