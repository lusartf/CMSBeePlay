@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <strong>LISTA DE USUARIOS</strong>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="pull-right">
                        <div class="btn-group">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"  class="btn btn-info"  >Añadir Usuario</a>
                            @endif 
                        </div>
                    </div>

                    <hr>
                    <div class="table-container">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Correo Electronico</th>   
                                <th>Tipo</th>   
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                                @if($usuarios->count())  
                                    @foreach($usuarios as $usuario)  
                                    <tr>
                                        <td>{{$usuario->id}}</td>
                                        <td>{{$usuario->name}}</td>
                                        <td>{{$usuario->email}}</td>
                                        <td>
                                            @if ($usuario->roles()->first()->name == 'admin')
                                                <span class="badge badge-primary text-wrap">{{ $usuario->roles()->first()->name }}</span>
                                            @else
                                                <span class="badge badge-secondary">{{ $usuario->roles()->first()->name }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('users.edit',$usuario->id) }}" >
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('users.destroy',$usuario->id) }}" class="btn btn-danger" onclick="return confirm('Seguro que deseas deshabilitar al usuario?')">
                                                <span class="glyphicon glyphicon-remove-sign"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach 
                                @else
                                    <tr>
                                        <td colspan="8">No hay registro !!</td>
                                    </tr>
                                @endif 
                            </tbody>
                
                        </table>
                    </div>
                </div>
                {{ $usuarios->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
