@extends('admin.template.main')

@section('title', 'Lista de categorias')

@section('content')

    <div class="container">
        <a href="{{ route('categories.create')}}" class="btn btn-info"> Registrar Nueva categoria </a><hr>
        <table class="table table-bordered">
            <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Accion</th>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td> {{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>

                        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a> <a href="{{route('categories.destroy', $category->id)}}" onclick="return confirm('¿Seguro que desea borrar la categoria?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> </a>

                    </td>

                </tr>

            @endforeach
            </tbody>

        </table>
        {{ $categories->render() }}
    </div>
    @endsection


