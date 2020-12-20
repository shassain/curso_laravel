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
      <div class="card-header">{{$curso->name}}</div>
      <div class="card-body card-block">
          <form action="{{route('inscripcion.store',$curso->id)}}" method="post" class="" enctype="multipart/form-data">
          @csrf

              <div class="form-group">
                  <div class="input-group">
                      <select name="participante_id[]" id="" multiple>
                        @foreach($participantes as $participante)
                          <option value="{{$participante->id}}">
                            {{$participante->nombre}} 
                            {{$participante->appaterno}} 
                            {{$participante->apmaterno}} 
                            </option>
                          @endforeach
                        </select>
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
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
<div class="col-lg-6">
  <div class="card">
      <div class="card-header">{{$curso->name}}</div>
      <div class="card-body card-block">
          <table class="table table-striped">
          <thead>
          <tr>
            <th>
            Nombre
            </th>
            <th>
            opc
            </th>
          </tr>
          </thead>
          <tbody>
          @foreach($curso->participantes as $participante)
            <tr>
              <td>
              {{$participante->nombre}} 
              {{$participante->appaterno}} 
              {{$participante->apmaterno}} 
              </td>
              <td>
                <a target="_blank" href="{{route('inscripcion.pdf',[$curso->id,$participante->id])}}"><i class="fa fa-file-pdf"></i>Imprimir</a>
              </td>
            </tr>
          @endforeach
          </tbody>
          </table>
      </div>
      {!! \QrCode::size(300)->generate("www.nigmacode.com") !!}
  </div>
</div>
</div>

@endsection


@push("scripts")
@endpush