@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex justify-content-start">
                                    <h3>Lista de Plataformas</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('addPlatform') }}" class="btn btn-dark stretched-link">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        Agregar Plataforma
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($platforms as $platform)
                            <div class="col-md-2">
                                <br>
                                <div class="card">
                                    <img src="{{ asset($platform->logo) }}" alt="" class="card-img-top" width="100" height="150">
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <form method='POST' action="{{ route('deletePlatform',$platform->id) }}" class="d-inline bt-delete-platform">
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                                        <!-- strong>Eliminar</strong -->
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                </form>     
                                            </div>
                                            <div class="col-md-3">
                                                <a href="{{ route('editPlatform',$platform->id) }}" class="btn btn-outline-info btn-sm">
                                                    <!-- &nbsp;&nbsp;&nbsp; <strong>Info</strong> &nbsp;&nbsp;&nbsp; -->
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                            </div>
                        @endforeach                        
                    </div>
                </div>
            </div>
            {{ $platforms->links() }}
        </div>
    </div>
</div>
@endsection


@section('js')

    @if (session('delete_platform') == 'ok')
        <script>
            Swal.fire(
                'Eliminada!',
                'La Plataforma ha sido eliminada.',
                'success'
            )
        </script>
    @endif

    <script>

        $('.bt-delete-platform').submit(function(e){
            e.preventDefault();

            Swal.fire({
                title: 'Estas seguro?',
                text: "La Plataforma sera eliminada Definitivamente",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {
                    //continuar con envio de formulario
                    this.submit();
                }
            })
        });

    </script>

@endsection
