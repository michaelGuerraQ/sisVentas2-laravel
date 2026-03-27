@extends('layout.plantilla')
@section('titulo')
        Clientes
@endsection

@section('contenido')
    <div class="card">
            <div class="card-header">
            <h3 class="card-title">LISTADO CLIENTES</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
                </button>
            </div>
            </div>
            <div class="card-body">
                Mostrar Listado de clientes
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            Michael Guerra
        </div>
    </div>
@endsection