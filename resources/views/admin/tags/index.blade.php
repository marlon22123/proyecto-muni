
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

 
   
  
    <h1>mostrar etiquetas</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert  alert-success">
    <strong>{{session('info')}}</strong>

</div>
@endif
  <div class="card">
      <div class="card-header">
        <a class="btn btn-success " href="{{route('admin.tags.create')}}">añadir</a>
      </div>
      <div class="card-body">
          <table class="table table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>color</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td class="badge rounded-pill text-wrap mx-1 text-white " style="background-color: {{$tag->color}}">{{$tag->color}}</td>
                      
                       
                        <td >
                            
                            <a class="btn btn-primary" href="{{route('admin.tags.edit',$tag)}}">Editar</a>
                  
                        </td>
                        <td>

                        
                            <form action="{{route('admin.tags.destroy',$tag)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Elimianr</button>
                            </form>
                       
                           
                        </td>
                    </tr>
                @endforeach
            </tbody>

          </table>
      </div>
  </div>
@stop

