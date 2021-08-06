@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de sliders</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{route('admin.sliders.create')}}" class="btn btn-success">Añadir Slider</a>
    </div>
    <div class="card-body">
      <table class="table table-stripet">
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>url</th>
                     <th>Vista</th>
                  
                     <th>eliminar</th>
                 </tr>
             </thead>
             <tbody>
             @foreach ($sliders as $slider)     
             <tr>
                 <td>{{$slider->id}}</td>
                 <td>{{$slider->url}}</td>
                 <td><img src="{{Storage::url($slider->url)}}" class="img-rounded" alt="Cinque Terre" width="600" height="236"></td>
              
                 <td > 
                      <form action="{{route('admin.sliders.destroy',$slider)}}" method="POST">
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

