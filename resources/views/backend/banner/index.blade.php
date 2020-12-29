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
                                    <h3>Galeria de Imagenes de Banner</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('uploadForm') }}" class="btn btn-primary stretched-link">Agregar Imagenes</a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($banner as $banners)
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{ asset($banners->url) }}" alt="" class="card-img-top">
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-md-3">
                                                @if ($banners->status == 0)
                                                    {{-- <a href="{{ route('deleteImg',$banners->id) }}" class="btn btn-outline-danger btn-sm bt-delete">Eliminar</a> --}}
                                                    <form method='POST' action="{{ route('deleteImg',$banners->id) }}" class="d-inline bt-delete">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"><strong>Eliminar</strong></button>
                                                    </form>
                                                @else
                                                    <a href="" class="btn btn-outline-secondary btn-sm disabled">Eliminar</a>
                                                @endif
                                            </div>
                                            <div class="col-md-5 offset-md-4">
                                                <div class="checkbox">
                                                    <label for="">Slide: </label>
                                                    @if ($banners->status == 1)   
                                                        <a href="{{ route('statusBanner',array($banners->id,0)) }}" class="btn btn-info btn-sm"><strong>Quitar</strong></a>
                                                    @else
                                                        <a href="{{ route('statusBanner',array($banners->id,1)) }}" class="btn btn-outline-info btn-sm"><strong>Agregar</strong></a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="{{ route('infoForm',$banners->id) }}" class="btn btn-success btn-sm">&nbsp;&nbsp;&nbsp; <strong>Info</strong> &nbsp;&nbsp;&nbsp;</a>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{ $banner->links() }}
        </div>
    </div>
</div>
@endsection

@section('js')

    @if (session('countSlide') == '6')
        <script>
            Swal.fire(
                'Banner',
                'Ha alcanzado el limite maximo de elementos en Banner',
                'info'
            )
        </script>
   
    @endif

    @if (session('eliminar') == 'ok')
        <script>
            Swal.fire(
                'Eliminado!',
                'La Imagen ha sido eliminada.',
                'success'
            )
        </script>
    @endif
    <script>

        $('.bt-delete').submit(function(e){
            e.preventDefault();

            Swal.fire({
                title: 'Estas seguro?',
                text: "La imagen sera eliminada Definitivamente",
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
