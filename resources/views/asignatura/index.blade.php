@extends('layout.plantilla')

@section('titulo') Admin 
@endsection

@section('contenido')
<div class="row">
<div class="col-md-9">
<a href="{{url('asignatura/create')}}" class="pull-right">
<button class="btn btn-success">Registrar Asignaturas</button> </a>
</div></div><br>
<div class="row">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>
<th>Id</th>
<th>Código</th>
<th>Nombre</th>
<th>Modalidad</th>
<th>Créditos</th>
<th>Opciones</th>
</thead>
<tbody>
@foreach($asignatura as $per)
<tr>
<td>{{ $per->id }}</td>
<td>{{ $per->codigo}}</td>
<td>{{ $per->nombre}}</td>
<td>{{ $per->modalidad}}</td>
<td>{{ $per->creditos}}</td>
<td>
<a href="{{URL::action('App\Http\Controllers\AsignaturaController@edit',$per->id)}}">
    <button class="btn btn-primary"><i class="fa-solid fa-user-pen"></i></button></a>
<a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$per->id}}">
    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
</a>
</td>
</tr>
@include('asignatura.modal')
@endforeach
</tbody> </table>
</div></div>

@endsection
</body>
</html>



