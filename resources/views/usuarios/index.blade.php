@extends('layouts.dashboard')

@section('title')
    Listagem De Usuarios Do Sistema
@endsection

@section('content')

    <div class="container">
        <h2 class="display-4">Usuarios Do Sistema</h2>

        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <form action="{{ route('admin.users.destroy', ['user'=>$user->id]) }}" method="post">
                                    {{ method_field('DELETE') }}
                                    @csrf
                                    <button class="btn btn-danger rounded-circle p-2">
                                        <div class="material-icons float-left">delete</div>
                                    </button>
                                </form>
                            </td>
                        </tr>     
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection