@extends('templates.template')
@section('content')

<h1 class="text-center">Visualizar</h1>
<hr>

<div class="col-6 m-auto text-center mt-5 mb-5">
    <table class="table  text-center">
  <thead>

  </thead>
  <tbody>
    <tr>
      <th scope="row">Código do Evento:</th>
      <td>{{$evento->codigo_evento}}</td>
    </tr>
    <tr>
      <th scope="row">Nome do Evento:</th>
      <td>{{$evento->nome_evento}}</td>
    </tr>
    <tr>
      <th scope="row">Local do Evento:</th>
      <td>{{$evento->local_evento}}</td>
    </tr>
    <tr>
      <th scope="row">Data do Evento:</th>
      <td>{{$evento->data_evento}}</td>
    </tr>
    <tr>
      <th scope="row">Status::</th>
        <?php if ($evento->status) { ?>
            <td class="text-center">Ativo</td>
        <?php } else { ?>
            <td class="text-center">Inativo</td>
        <?php } ?>
    </tr>

  </tbody>
</table>
</div>

<div class="text-center">
        <a href="{{url("eventos")}}" >
            <button type="button" class="btn btn-dark">Voltar</button>
        </a>
    </div>

@endsection
