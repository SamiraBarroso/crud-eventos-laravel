@extends('templates.template')

@section('content')
  <h1 class="text-center" > Eventos </h1>
  <hr>

  <div class="text-center mt-3 mb-4">
    <a href="{{url('eventos/create')}}">
        <button class="btn btn-success">
        Cadastrar <i class="fa fa-plus-square-o" ></i></button>
    </a>
</div>

  <div class="col-8 m-auto">
    @csrf
    <table class="table text-center"  id="table-evento">
      <thead class="table-dark">
        <tr>
        <th scope="col">Código Evento</th>
        <th scope="col">Nome</th>
        <th scope="col">Local</th>
        <th scope="col">Data</th>
        <th scope="col">Status</th>
        <th scope="col">Opção</th>
        </tr>
      </thead>
      <tbody>
        @foreach($evento as $eventos)
        <tr>
            <th scope="row">{{$eventos->codigo_evento}}</th>
            <td>{{$eventos->nome_evento}}</td>
            <td>{{$eventos->local_evento}}</td>
            <td>{{$eventos->data_evento}}</td>
            <?php if ($eventos->status) { ?>
                    <td class="text-center">Ativo</td>
                <?php } else { ?>
                    <td class="text-center">Inativo</td>
                <?php } ?>
            <td>
                <a href="{{url("eventos/$eventos->codigo_evento")}}">
                    <button  type="button" class="btn btn-dark">
                    <i class="fa fa-eye"></i> Visualizar</button>
                </a>
                <a href="{{url("eventos/$eventos->codigo_evento/edit")}}">
                    <button type="button" class="btn btn-dark">
                    <i class="fa fa-pencil"></i> Editar</button>
                </a>
                <a href="{{url("eventos/$eventos->codigo_evento")}}" class="js-delete">
                    <button type="button" class="btn  btn-danger">
                    <i class="fa fa-trash"></i> Deletar</button>
                </a>
            </td>
        </tr>
        @endforeach


      </tbody>
    </table>

    <div class="text-center">
        <a href="{{ route('excel') }}" >
            <button type="button" class="btn btn-success">Exportar</button>
        </a>
    </div>


  </div>

@endsection

@section('script')
    $(document).ready( function () {
        $('#table-evento').DataTable();
    } );
@endsection
