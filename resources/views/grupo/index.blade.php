@extends('layout.plantilla')

@section('titulo') Admin 
@endsection

@section('contenido')
<div class="row">
<div class="col-md-9">
<a href="{{url('grupo/create')}}" class="pull-right">
<button class="btn btn-success">Registrar Grupos</button> </a>
</div></div><br>
<div class="row">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>
<th>Id</th>
<th>Nombre Grupo</th>
<th>Cantidad Alumnos</th>
<th>Opciones</th>
</thead>
<tbody>
@foreach($grupo as $per)
<tr>
<td>{{ $per->id }}</td>
<td>{{ $per->nombre}}</td>
<td>{{ $per->can_alum}}</td>
<td>
<a href="{{URL::action('App\Http\Controllers\GrupoController@edit',$per->id)}}">
    <button class="btn btn-primary"><i class="fa-solid fa-user-pen"></i></button></a>
<a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$per->id}}">
    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
</a>
</td>
</tr>
@include('grupo.modal')
@endforeach
</tbody> </table>
</div></div>

@endsection
</body>
</html>



