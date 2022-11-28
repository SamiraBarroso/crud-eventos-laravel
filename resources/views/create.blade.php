@extends('templates.template')

@section('content')
  <h1 class="text-center" >@if(isset($evento)) Editar Evento @else Cadastrar Evento @endif</h1>
  <hr>

  <div class="container">
    <div class="row">
        <div class="col-12">
            @if(isset($errors) && count($errors)>0)
                <div class="text-center mt-4 mb-4 p-2 alert-danger">
                    @foreach($errors->all() as $erro)
                        {{$erro}}<br>
                    @endforeach
                </div>
            @endif

            @if(isset($evento))
            <form name="formEdit" id="formEdit" method="post" action="{{url("eventos/$evento->codigo_evento")}}">
                @method('PUT')
            @else
                <form name="formCad" id="formCad" method="post" action="{{url("eventos")}}">
            @endif
                @csrf
                <input class="form-control" type="text" name="nome_evento" id="nome_evento" placeholder="Nome do Evento:" value="{{$evento->nome_evento ?? ''}}" required><br>
                <input class="form-control" type="text" name="local_evento" id="local_evento" placeholder="Local do Evento:" value="{{$evento->local_evento ?? ''}}" required><br>
                <input class="form-control" type="date" name="data_evento" id="data_evento" placeholder="Data do Evento:" value="{{$evento->data_evento ?? ''}}" required><br>
                <select class="form-control" name="status" id="status" required>
                    <option value="1" @if(isset($evento)) {{ $evento->status == 1 ? 'selected' : '' }}@endif>Ativo</option>
                    <option value="0" @if(isset($evento)) {{ $evento->status == 0 ? 'selected' : '' }}@endif>Inativo</option>
                </select><br>
                <div class="text-center">
                    <input class="btn btn-dark" type="submit" value="@if(isset($evento)) Editar @else Cadastrar @endif">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
