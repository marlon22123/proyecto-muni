@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Documentos normativos - CATEGORIAS</h1>

@stop

@section('content')
   <div class="card">
       <div class="card-header">
           <a href="{{route('admin.documentos-normativos-categories.create')}}" class="btn btn-success">Crear nueva categoria </a>
       </div>
       <div class="card-body">
         <table class="table table-stripet">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>editar</th>
                        <th>eliminr</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)     
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td >
                        <a href="{{route('admin.documentos-normativos-categories.edit',$category)}}" class="btn btn-primary">Editar</a>
                    </td>
                    <td > 
                         <form action="{{route('admin.documentos-normativos-categories.destroy',$category)}}" method="POST">
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

