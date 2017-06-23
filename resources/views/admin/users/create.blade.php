
    <div class="container">
        {!! Form::open(['route'=> 'users.store', 'method' => 'POST']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'correo electronico') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '******', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('type', 'Tipo')!!}
            {!! Form::select('type',['' => 'seleccione un nive...l','member' => 'Miembro', 'admin' => 'Administrador'], null, ['class'=> 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>



        {!! Form::close()!!}
        @endsection

    </div>
