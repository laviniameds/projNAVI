@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informações Pessoais</div>

                <div class="panel-body">
                  @if (Auth::check())
                    <ul class="list-group">
                    <li class="list-group-item">
                      <strong class="col-sm-6 text-right">Nome:</strong>
                      {{ Auth::user()->nome }}
                    </li>

                    <li class="list-group-item">
                      <strong class="col-sm-6 text-right">E-mail:</strong>
                      {{ Auth::user()->email }}
                    </li>

                    <li class="list-group-item">
                      <strong class="col-sm-6 text-right">CPF:</strong>
                      {{ Auth::user()->cpf }}
                    </li>

                    <li class="list-group-item">
                      <strong class="col-sm-6 text-right">RG:</strong>
                      {{ Auth::user()->rg }}
                    </li>

                    <li class="list-group-item">
                      <strong class="col-sm-6 text-right">Data de nascimento:</strong>
                      <?php echo date('d/m/Y', strtotime(Auth::user()->nasc)); ?>
                    </li>

                    <li class="list-group-item">
                      <strong class="col-sm-6 text-right">Gênero:</strong>
                      {{ Auth::user()->genero }}
                    </li>

                    <li class="list-group-item">
                      <strong class="col-sm-6 text-right">CEP:</strong>
                      {{ Auth::user()->cep }}
                    </li>

                    <li class="list-group-item">
                      <strong class="col-sm-6 text-right">Tipo de logradouro:</strong>
                      {{ Auth::user()->tipo }}
                    </li>

                    <li class="list-group-item">
                      <strong class="col-sm-6 text-right">Rua:</strong>
                      {{ Auth::user()->rua }}
                    </li>

                    <li class="list-group-item">
                      <strong class="col-sm-6 text-right">Complemento:</strong>
                      {{ Auth::user()->complemento }}
                    </li>

                    <li class="list-group-item">
                      <strong class="col-sm-6 text-right">Número:</strong>
                      {{ Auth::user()->numero }}
                    </li>

                    <li class="list-group-item">
                      <strong class="col-sm-6 text-right">Bairro:</strong>
                      {{ Auth::user()->bairro }}
                    </li>

                    <li class="list-group-item">
                      <strong class="col-sm-6 text-right">Cidade:</strong>
                      {{ Auth::user()->cidade }}
                    </li>

                    <li class="list-group-item">
                      <strong class="col-sm-6 text-right">Estado:</strong>
                      {{ Auth::user()->estado }}
                    </li>
                    </ul>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
