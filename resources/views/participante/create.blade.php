@extends("layouts.layout_principal")

@push('styles')

@endpush
@section('content')
<div class="table-data__tool">
    <div class="table-data__tool-left">
        
        
    <div class="table-data__tool-right">
        <a href="{{url()->previous()}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
            <i class="zmdi zmdi-plus"></i>atras</a>
        
    </div>
    </div>
</div>
<div class="row">
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">Example Form</div>
        <div class="card-body card-block">
            <form action="{{route('participante.store')}}" method="post" class="" enctype="multipart/form-data">
            @csrf

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="appaterno" name="appaterno" placeholder="Ingrese el apellido paterno" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="apmaterno" name="apmaterno" placeholder="Ingrese el apellido materno" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" value="{{now()->subYear(20)->toDateString()}}">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="ci" name="ci" placeholder="Ingrese su CI" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-asterisk"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="file" id="foto" name="foto" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-asterisk"></i>
                        </div>
                    </div>
                </div>
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-secondary btn-sm">Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection


@push("scripts")
@endpush