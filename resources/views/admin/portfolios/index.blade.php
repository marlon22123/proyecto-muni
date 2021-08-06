@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Iamgenes de portafolio</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{route('admin.portfolios.create')}}" class="btn btn-success">Añadir Imagen</a>
    </div>
    <div class="card-body">
      <table class="table table-stripet">
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>Titulo</th>
                     <th>Extracto</th>
                     <th>Imagen</th>
                     <th>editar</th>
                     <th>eliminar</th>
                 </tr>
             </thead>
             <tbody>
             @foreach ($portfolios as $portfolio)     
             <tr>
                 <td>{{$portfolio->id}}</td>
                 <td>{{$portfolio->title}}</td>
                 <td>{{$portfolio->extract}}</td>
                 <td><img src="{{Storage::url($portfolio->url)}}" class="img-rounded" alt="Cinque Terre" width="300" height="236"></td>
                 <td >
                    <a href="{{route('admin.portfolios.edit',$portfolio)}}" class="btn btn-primary">Editar</a>
                </td>
                 <td > 
                      <form action="{{route('admin.portfolios.destroy',$portfolio)}}" method="POST">
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

