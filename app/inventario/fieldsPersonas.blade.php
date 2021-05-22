<div class="row">
    <div class="col-lg-6">

        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            {!! Form::text('nombres',null,$attributes=['class' => 'form-control']) !!}

            @includeWhen(count($errors->get('nombres'))>0, 'errors.message', ['errores' => $errors->get('nombres')])


        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Identidad</label>
            {!! Form::text('identidad',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('identidad'))>0, 'errors.message', ['errores' => $errors->get('identidad')])
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Fecha Nacimiento</label>
            {!! Form::date('fecha_nacimiento',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('fecha_nacimiento'))>0, 'errors.message', ['errores' => $errors->get('fecha_nacimiento')])
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Etnia</label>
           <div>
            @if ($model)
            <select-combustibles :selected="{{ $model->etnia}}" url="/api-app/etnias" nombre="etnia_id" label="etnia" />
            @else
            <select-combustibles url="/api-app/etnias" nombre="etnia_id" label="etnia" />
            @endif
           </div>
            @includeWhen(count($errors->get('etnia_id'))>0, 'errors.message', ['errores' => $errors->get('etnia_id')])
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Cooperativa</label>
           <div>
            @if ($model)
            <select-combustibles :selected="{{ $model->cooperativa}}" url="/api-app/cooperativas" nombre="cooperativa_id" label="cooperativa" />
            @else
            <select-combustibles url="/api-app/cooperativas" nombre="cooperativa_id" label="cooperativa" />
            @endif
           </div>
            @includeWhen(count($errors->get('cooperativa_id'))>0, 'errors.message', ['errores' => $errors->get('cooperativa_id')])
        </div>
    </div>
    <div class="col-lg-6">

        <div class="form-group">
            <label for="exampleInputEmail1">Apellidos</label>
            {!! Form::text('apellidos',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('apellidos'))>0, 'errors.message', ['errores' => $errors->get('apellidos')])
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Teléfono</label>
            {!! Form::text('telefono',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('telefono'))>0, 'errors.message', ['errores' => $errors->get('telefono')])
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Celular</label>
            {!! Form::text('celular',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('celular'))>0, 'errors.message', ['errores' => $errors->get('celular')])
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Sexo</label>
           <div>
            @if ($model)
            <select-combustibles :selected="{{ $model->sexo}}" url="/api-app/sexos" nombre="sexo_id" label="sexo" />
            @else
            <select-combustibles url="/api-app/sexos" nombre="sexo_id" label="sexo" />
            @endif
           </div>
            @includeWhen(count($errors->get('sexo_id'))>0, 'errors.message', ['errores' => $errors->get('sexo_id')])
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Barrio</label>
            <div>
                @if ($model)
                <select-combustibles :selected="{{ $model->barrio}}" url="/api-app/barrios" nombre="barrio_id" label="barrio" />
                @else
                <select-combustibles url="/api-app/barrios" nombre="barrio_id" label="barrio" />
                @endif
            </div>
            @includeWhen(count($errors->get('barrio_id'))>0, 'errors.message', ['errores' => $errors->get('barrio_id')])
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label for="exampleInputEmail1">Dirección</label>
            {!! Form::text('direccion',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('direccion'))>0, 'errors.message', ['errores' => $errors->get('direccion')])
        </div>
    </div>
</div>
