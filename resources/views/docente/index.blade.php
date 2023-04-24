@extends('layout.plantilla')

@section('titulo') Admin 
@endsection

@section('contenido')
<div class="row">
<div class="col-md-9">
<a href="{{url('docente/create')}}" class="pull-right">
<button class="btn btn-success">Registrar Docente</button> </a>
</div></div><br>
<div class="row">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>
<th>Id</th>
<th>Documento Identidad</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Género</th>
<th>Profesión</th>
<th>Facultad</th>
<th>Teléfono</th>
<th>Dir.Residencia</th>
<th>Correo Electrónico</th>
<th>Opciones</th>
</thead>
<tbody>
@foreach($docente as $per)
<tr>
<td>{{ $per->id }}</td>
<td>{{ $per->documento_identidad}}</td>
<td>{{ $per->nombres}}</td>
<td>{{ $per->apellidos}}</td>
<td>{{ $per->genero}}</td>
<td>{{ $per->profesion}}</td>
<td>{{ $per->facultad}}</td>
<td>{{ $per->telefono}}</td>
<td>{{ $per->dir_resi}}</td>
<td>{{ $per->email}}</td>
<td>
<a href="{{URL::action('App\Http\Controllers\DocenteController@edit',$per->id)}}">
    <button class="btn btn-primary"><i class="fa-solid fa-user-pen"></i></button></a>
<a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$per->id}}">
    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
</a>
</td>
</tr>
@include('docente.modal')
@endforeach
</tbody> </table>
</div></div>

@endsection
</body>
</html>



