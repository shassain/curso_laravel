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
<div class="card">
  <div class="card-header">
    <strong>{{$participante->nombre}} {{$participante->appaterno}}</strong>
    <small>email
      <code>{{$participante->ci}}</code>
    </small>
  </div>
  <div class="card-body">
    <img src="{{route('participante.image',$participante->foto)}}" alt="" style="width:100px">
    <img src="{{asset('storage/'.$participante->foto)}}" alt="" style="width:100px">
  </div>
</div>

@endsection


@push("scripts")
@endpush