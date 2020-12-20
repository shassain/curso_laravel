@extends("layouts.layout_principal")

@push('styles')

@endpush
@section('content')
<div class="table-data__tool">
    <div class="table-data__tool-left">
        
        
    <div class="table-data__tool-right">
        <a href="{{route('participante.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
            <i class="zmdi zmdi-plus"></i>Nuevo participante</a>
        
    </div>
    </div>
</div>
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>fecha</th>
                        <th>ci</th>
                        <th>opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($participantes as $participante)
                      <tr>
                        <td>{{$participante->nombre}} {{$participante->appaterno}} {{$participante->apmaterno}}</td>
                        <td>{{$participante->fecha_nacimiento}}</td>
                        <td>{{$participante->ci}}</td>
                        <td>
                        <a href="{{route('participante.edit',$participante->id)}}"><i class="fa fa-edit"></i> editar</a>
                        <a href="{{route('participante.show',$participante->id)}}"><i class="fa fa-eye"></i> ver mas</a>
                        <form action="{{route('participante.destroy',$participante->id)}}" method="post">
                          @csrf
                          <input type="hidden" name="_method" value="delete">
                          <button type="submit" ><i class="fa fa-trash"></i>Eliminar</button>
                        </form>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
@endsection


@push("scripts")
@endpush