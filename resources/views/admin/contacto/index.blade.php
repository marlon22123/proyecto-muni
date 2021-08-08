@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Contacto</h1>
    
@stop

@section('content')
   <div class="card">
      
       <div class="card-body">
         <table class="table table-stripet">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nomdre de remitente</th>
                        <th>Correo electronico</th>
                        <th>asunto</th>
                        <th>mensaje</th>
                      
                    </tr>
                </thead>
                <tbody>
               @foreach ($contacts as $contact)     
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->subject}}</td>
                    <td>{{$contact->message}}</td>
                  
                 
                </tr>
                    
                @endforeach 
                </tbody>
         </table>
       </div>
   </div>
@stop

