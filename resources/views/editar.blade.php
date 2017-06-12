@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Informações Pessoais</div>

                <div class="panel-body">
                  @if (Auth::check())
                    <form action="/editarUsr" method="POST">
              				{{ csrf_field() }}
              				{{ method_field('PATCH') }}
              				<input type="hidden" value="{{ Auth::user()->id }}" name="id">

                    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                        <label for="nome" class="col-md-4 control-label">Nome</label>

                        <div class="col-md-6">
                            <input id="nome" type="text" class="form-control" name="nome" value="{{ Auth::user()->nome }}" required autofocus>

                            @if ($errors->has('nome'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nome') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
                        <label for="cpf" class="col-md-4 control-label">CPF</label>

                        <div class="col-md-6">
                            <input id="cpf" type="text" class="form-control" name="cpf" value="{{ Auth::user()->cpf }}"
                            data-mask="000.000.000-00" data-mask-reverse="true" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>

                            @if ($errors->has('cpf'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cpf') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('rg') ? ' has-error' : '' }}">
                        <label for="rg" class="col-md-4 control-label">RG</label>

                        <div class="col-md-6">
                            <input id="rg" type="text" class="form-control" name="rg" value="{{ Auth::user()->rg }}"
                            data-mask="000.000.000" data-mask-reverse="true" pattern="\d{3}\.\d{3}\.\d{3}" required>

                            @if ($errors->has('rg'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('rg') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('nasc') ? ' has-error' : '' }}">
                        <label for="nasc" class="col-md-4 control-label">Data de Nascimento</label>

                        <div class="col-md-6">
                            <input id="nasc" type="date" class="form-control" name="nasc" value="{{ Auth::user()->nasc }}" required>

                            @if ($errors->has('nasc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nasc') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
                        <label for="genero" class="col-md-4 control-label">Gênero</label>
                        <div class="col-md-6">
                          @if (Auth::user()->genero === 'Masculino')
                            <label>Masculino
                            <input id="genero" type="radio" class="form-control" checked name="genero" value="Masculino">
                            </label>
                            <label>Feminino
                            <input id="genero" type="radio" class="form-control" name="genero" value="Feminino" >
                            </label>
                            <label>Outro
                            <input id="genero" type="radio" class="form-control" name="genero" value="Outro" >
                            </label>
                          @elseif (Auth::user()->genero  === 'Feminino')
                            <label>Masculino
                            <input id="genero" type="radio" class="form-control" name="genero" value="Masculino">
                            </label>
                            <label>Feminino
                            <input id="genero" type="radio" class="form-control" checked name="genero" value="Feminino" >
                            </label>
                            <label>Outro
                            <input id="genero" type="radio" class="form-control" name="genero" value="Outro" >
                            </label>
                          @else Auth::user()->genero === 'Outro'
                            <label>Masculino
                            <input id="genero" type="radio" class="form-control" name="genero" value="Masculino">
                            </label>
                            <label>Feminino
                            <input id="genero" type="radio" class="form-control"  name="genero" value="Feminino" >
                            </label>
                            <label>Outro
                            <input id="genero" type="radio" class="form-control" checked name="genero" value="Outro" >
                            </label>
                          @endif
                            @if ($errors->has('genero'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('genero') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }}">
                        <label for="cep" class="col-md-4 control-label">CEP</label>

                        <div class="col-md-6">
                            <input id="cep" type="text" class="form-control" name="cep" value="{{ Auth::user()->cep }}"
                            data-mask="00000-000" pattern="\d{5}-\d{3}" required>

                            @if ($errors->has('cep'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cep') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('rua') ? ' has-error' : '' }}">
                        <label for="rua" class="col-md-4 control-label">Rua</label>

                        <div class="col-md-6">
                            <input id="rua" type="text" class="form-control" name="rua" value="{{ Auth::user()->rua }}" required>

                            @if ($errors->has('rua'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('rua') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                        <label for="tipo" class="col-md-4 control-label">Tipo de logradouro</label>

                        <div class="col-md-6">
                            <input id="tipo" type="text" class="form-control" name="tipo" value="{{ Auth::user()->tipo }}" required>

                            @if ($errors->has('tipo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tipo') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                        <label for="numero" class="col-md-4 control-label">Número</label>

                        <div class="col-md-6">
                            <input id="numero" type="text" class="form-control" name="numero" value="{{ Auth::user()->numero }}" required>

                            @if ($errors->has('numero'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('numero') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('complemento') ? ' has-error' : '' }}">
                        <label for="complemento" class="col-md-4 control-label">Complemento</label>

                        <div class="col-md-6">
                            <input id="complemento" type="text" class="form-control" name="complemento" value="{{ Auth::user()->complemento }}" required>

                            @if ($errors->has('complemento'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('complemento') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('bairro') ? ' has-error' : '' }}">
                        <label for="bairro" class="col-md-4 control-label">Bairro</label>

                        <div class="col-md-6">
                            <input id="bairro" type="text" class="form-control" name="bairro" value="{{ Auth::user()->bairro }}" required>

                            @if ($errors->has('bairro'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('bairro') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }}">
                        <label for="cidade" class="col-md-4 control-label">Cidade</label>

                        <div class="col-md-6">
                            <input id="cidade" type="text" class="form-control" name="cidade" value="{{ Auth::user()->cidade }}" required>

                            @if ($errors->has('cidade'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cidade') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                        <label for="estado" class="col-md-4 control-label">Estado</label>

                        <div class="col-md-6">
                            <input id="estado" type="text" class="form-control" name="estado" value="{{ Auth::user()->estado }}"
                            maxlength="2" required>

                            @if ($errors->has('estado'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('estado') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Editar
                            </button>
                        </div>
                    </div>
                  </form>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
