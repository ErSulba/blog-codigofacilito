@extends('admin.template.main')

@section('title', 'Editar Categoria '.$category->name)

@section('content')
    <div class="container">
        {!! Form::open(['route' =>  ['categories.update', $category], 'method' => 'PUT']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div>


    </div>
    {!! Form::close()!!}
@endsection