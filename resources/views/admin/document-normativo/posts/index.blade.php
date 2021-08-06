@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Documentos normativos - Publicados</h1>

@stop

@section('content')
   <div class="card">
       <div class="card-header">
           <a href="{{route('admin.documentos-normativos-posts.create')}}" class="btn btn-success">Crear nuevo Documento normativo </a>
       </div>
       <div class="card-body">
         <table class="table table-stripet">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Extracto</th>
                        <th>Categoria</th>
                        <th>Vista</th>
                        <th>editar</th>
                        <th>eliminr</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)     
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{!!$post->extract!!}</td>
                    <td>{{$post->category->name}}</td>
                    <td><iframe id="pdf" src="{{Storage::url($post->file->url)}}" ></iframe></td>
                    <td >
                        <a href="{{route('admin.documentos-normativos-posts.edit',$post)}}" class="btn btn-primary">Editar</a>
                    </td>
                    <td > 
                         <form action="{{route('admin.documentos-normativos-posts.destroy',$post)}}" method="POST">
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
            height: 45vh;

        }
    </style>
@stop

