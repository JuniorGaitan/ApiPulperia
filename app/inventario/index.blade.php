@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Lista de persona</h4>    
  </div>
 
  <div class="card-body">
    <div class="row">
        <div class="col-12">
            <a href="{!! route('persona.add') !!}">
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
            @foreach ($personas as $persona)
            <tr>
                <td scope="row">{{ $persona->id }} </td>
                <td>{{ $persona->full_name }} </td>
                <td>{{ $persona->sexo->sexo_full }} </td>
                <td>{{ $persona->etnia->etnia }} </td>
                <td>{{ $persona->cooperativa->cooperativa }} </td>
                <td>{{ $persona->edad }} </td>
                <td>
                    <a href="{!! route('persona.edit',$persona->id) !!} ">
                        <i class="fas fa-pen-alt    "></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection
