@extends("layouts.layout_principal")

@push('styles')

@endpush
@section('content')
<div class="table-data__tool">
    <div class="table-data__tool-left">
        
        
    <div class="table-data__tool-right">
        
        
    </div>
    </div>
</div>
<div class="row m-t-30">
    
      @foreach($cursos as $curso)
      <div class="col-md-4">
        <div class="statistic__item">
            <h2 class="number">{{count($curso->participantes)}}</h2>
            <a href="{{route('inscripcion.create',$curso->id)}}"><span class="desc">Cantidad de Participantes</span></a>
            <br/>
            <span class="desc">{{$curso->name}}</span>
            <div class="icon">
                <i class="zmdi zmdi-account-o"></i>
            </div>
        </div>
        </div>
      @endforeach
    
</div>
@endsection


@push("scripts")
@endpush