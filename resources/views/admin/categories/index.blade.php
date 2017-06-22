@extends('admin.template.main')

@section('title', 'Lista de categorias')

@section('content')
    <div class="container">
        <a href="{{ 'categories.create'}}"> </a>
        <table class="table table-bordered">
            <thead>
            <th> Categoria</th>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                    <td> {{ $category->name }} </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
