@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? "{{ __('Show') Producto" }}
@endsection

@section('content')
    <section class="content container-fluid">
    <h1>Detalles del Producto</h1>
<p>ID: {{ $producto->id }}</p>
<p>Nombre: {{ $producto->nombre }}</p>
<p>Precio: {{ $producto->precio }}</p>
<!-- Otros detalles del producto -->






        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Prod:</strong>
                            {{ $producto->nombre_prod }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Producto:</strong>
                            {{ $producto->tipo_producto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
