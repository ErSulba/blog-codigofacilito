@extends('admin.template.main')

@section('title', 'Editar usuario '.$user->name)

@section('content')
    <div class="container">
        {!! Form::open(['route'=>['users.update', $user], 'method' => 'PUT']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'correo electronico') !!}
            {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('type', 'Tipo')!!}
            {!! Form::select('type',['' => 'seleccione un nive...l','member' => 'Miembro', 'admin' => 'Administrador'], null, ['class'=> 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div>



        {!! Form::close()!!}
        @endsection

    </div>
