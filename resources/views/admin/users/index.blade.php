@extends('admin.template.main')

@section('title', 'Lista de Usuarios')

@section('content')
    <div class="container">
        <a href="{{route('users.create')}}" class="btn btn-info">Registras nuevo usuario</a><hr>
        <table class="table table-bordered">
            <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Tipo</th>
            <th>Action</th>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>

                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->type == "admin")
                            <span class="label label-danger">{{ $user->type }}</span>
                        @else
                            <span class="label label-primary">{{ $user->type }}</span>
                        @endif
                    </td>
                    <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a> <a href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('¿Seguro que desea borrar el usuario?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> </a> </td>


                </tr>

            @endforeach

            </tbody>
        </table>

        {{ $users->render() }}

        @endsection


    </div>
