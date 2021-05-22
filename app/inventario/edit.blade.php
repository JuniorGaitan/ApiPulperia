@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Datos de de la persona</h4>
                <h6 class="card-subtitle text-muted">Subtitle</h6>
            </div>
            <img src="holder.js/100x180/" alt="">
            <div class="card-body">
                {!! Form::model($model, ['route' => ['persona.update', $model->id],'method'=>'patch']) !!}
                @include('app.personas.fieldsPersonas')
                {!! Form::submit('Actualizar') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
