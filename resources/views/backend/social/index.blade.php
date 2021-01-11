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
                                    <h3>Lista de Redes Sociales</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('addSocial') }}" class="btn btn-dark stretched-link">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        Agregar Red Social
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($social as $rs)
                            <div class="col-md-2">
                                <br>
                                <div class="card">
                                    <img src="{{ asset($rs->logo) }}" alt="" class="card-img-top" width="100" height="150">
                                    <div class="card-footer">
                                        <div class="row">
                                            @if ($rs->status == 0)
                                                <div class="col-md-3">
                                                    <form method='POST' action="{{ route('deleteSocial',$rs->id) }}" class="d-inline bt-delete-rs">
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                                            <!-- strong>Eliminar</strong -->
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </form>     
                                                </div>
                                            @endif
                                            <div class="col-md-3">
                                                <a href="{{ route('editSocial',$rs->id) }}" class="btn btn-outline-info btn-sm">
                                                    <!-- &nbsp;&nbsp;&nbsp; <strong>Info</strong> &nbsp;&nbsp;&nbsp; -->
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                @if ($rs->status == 0)
                                                    <a href="{{ route('statusRs',array($rs->id,1)) }}" class="btn btn-outline-secondary btn-sm">
                                                        <!-- &nbsp;&nbsp;&nbsp; <strong>Info</strong> &nbsp;&nbsp;&nbsp; -->
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                @else
                                                    <a href="{{ route('statusRs',array($rs->id,0)) }}" class="btn btn-outline-secondary btn-sm">
                                                        <!-- &nbsp;&nbsp;&nbsp; <strong>Info</strong> &nbsp;&nbsp;&nbsp; -->
                                                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                            </div>
                        @endforeach                       
                    </div>
                </div>
            </div>
            {{ $social->links() }}
        </div>
    </div>
</div>
@endsection


@section('js')

    @if (session('countSlide') == '4')
    <script>
        Swal.fire(
            'Redes Sociales',
            'Ha alcanzado el limite maximo de elementos en Redes',
            'info'
        )
    </script>

    @endif
    
    @if (session('delete_rs') == 'ok')
        <script>
            Swal.fire(
                'Eliminada!',
                'La Red Social ha sido eliminada.',
                'success'
            )
        </script>
    @endif
    
    <script>
        
        $('.bt-delete-rs').submit(function(e){
            e.preventDefault();

            Swal.fire({
                title: 'Estas seguro?',
                text: "La Red Social sera eliminada Definitivamente",
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
