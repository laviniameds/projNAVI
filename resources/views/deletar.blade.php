@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Deletar Conta</div>
                <div class="panel-body">
                  <form action="/deletarUsr" method="POST">
                  {{ csrf_field() }}
                   <input type="hidden" value="{{ Auth::user()->id }}" name="id">
                  <div class="alert alert-danger" role="alert">
                    <strong>Tem certeza que deseja excluir sua conta?</strong>
                  </div>
                    <a href="/pagEditar" type="submit" class="btn btn-outline-info">Voltar</a>
	                 <button type="submit" class="btn btn-danger pull-right">Deletar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
