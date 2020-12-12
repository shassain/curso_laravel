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
    <strong>{{$user->name}}</strong>
    <small>email
      <code>{{$user->email}}</code>
    </small>
  </div>
  <div class="card-body">
    @if(count($user->cursos)>0)
    @foreach($user->cursos as $curso)
    <a href="#">{{$curso->name}}
      <span class="badge badge-primary">{{$curso->cantidad_participantes}}</span>
    </a>
    <br>
    @endforeach
    @else
      <div class="alert alert-danger">
        Este Usuario no tiene cursos
      </div>
    @endif
  </div>
</div>

@endsection


@push("scripts")
@endpush