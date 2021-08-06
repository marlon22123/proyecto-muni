@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Posts</h1>

@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a class="btn btn-secondary" href="{{route('admin.posts.create')}}">Nuvo posr</a>

    </div>
<div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Exatracto</th>
             
                <th>Imagen</th>
                <th>Fecha</th>
                <th>Editar</th>
                <th>Eliminar</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td>{!!$post->extract!!}</td>
              
                     <td>
                        @if ($post->image)
                        <img src="{{Storage::url($post->image->url)}}" class="img-rounded" alt="Cinque Terre" width="300" height="236">
                               @else
                               <img  class="img-rounded" alt="Cinque Terre" width="300" height="236" src="https://caprobi.org.mx/wp-content/uploads/2019/05/imagen-no-disponible.jpg"  >
                        @endif
                         </td>
                    <td>{{$post->created_at}}</td>
                    <td >
                        <a  class="btn btn-primary" href="{{route('admin.posts.edit',$post)}}">editar</a>
                    </td>
                    <td>
                        <form action="{{route('admin.posts.destroy',$post)}}" method="POST">
                           @csrf
                            @method('delete')

                            <button class="btn btn-danger " type="submit">Elimianr</button>
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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop