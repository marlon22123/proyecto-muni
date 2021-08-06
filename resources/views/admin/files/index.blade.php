@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Docuemntos principales de Gobierno</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{route('admin.files.create')}}" class="btn btn-success">Añadir Imagen</a>
    </div>
    <div class="card-body">
      <table class="table table-stripet">
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>Nombre</th>
                     <th>URL</th>
                     <th>Vista</th>
                     <th>editar</th>
                     <th>eliminar</th>
                 </tr>
             </thead>
             <tbody>
             @foreach ($files as $file)     
             <tr>
                 <td>{{$file->id}}</td>
                 <td>{{$file->name}}</td>
                 <td>{{$file->url}}</td>
                 <td>
                  
                     <iframe id="pdf" src="{{Storage::url($file->url)}}" ></iframe>
                    </td>
                 <td >
                    <a href="{{route('admin.files.edit',$file)}}" class="btn btn-primary">Editar</a>
                </td>
                 <td > 
                      <form action="{{route('admin.files.destroy',$file)}}" method="POST">
                         @csrf
                         @method('delete')
                         <button type="submit" class="btn btn-danger">Eliminar</button>
                     </form>
                 </td>
             </tr>
                 
             @endforeach
             </tbody>
      </table>
    </div>
</div>
@stop


@section('css')
    <style>
        #pdf{
            height: 50vh;

        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

