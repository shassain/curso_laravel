@extends("layouts.layout_principal")

@push('styles')

@endpush
@section('content')
<div class="table-data__tool">
    <div class="table-data__tool-left">
        
        
    <div class="table-data__tool-right">
        <a href="{{route('usuario.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
            <i class="zmdi zmdi-plus"></i>Nuevo usuario</a>
        
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
                        <th>name</th>
                        <th>email</th>
                        <th>opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $user)
                      <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                        <a href="{{route('usuario.edit',$user->id)}}"><i class="fa fa-edit"></i> editar</a>
                        <a href="{{route('usuario.show',$user->id)}}"><i class="fa fa-eye"></i> ver mas</a>
                        <form action="{{route('usuario.destroy',$user->id)}}" method="post">
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