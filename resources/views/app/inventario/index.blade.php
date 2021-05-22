@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Lista de persona</h4>    
  </div>
 
  <div class="card-body">
    <div class="row">
        <div class="col-12">
            <a href="{!! route('inventario.add') !!}">
                Agregar</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Sexo</th>
                <th>Etnia</th>
                <th>Cooperativa</th>
                <th>Edad</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventario as $persona)
            <tr>
                
                <td>{{ $persona{id}}} </td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection
