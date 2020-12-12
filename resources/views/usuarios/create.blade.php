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
            <form action="{{route('usuario.store')}}" method="post" class="">
            @csrf

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="name" name="name" placeholder="Username" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control">
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