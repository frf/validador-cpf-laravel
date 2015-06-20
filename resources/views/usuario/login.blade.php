@extends('app')

@section('content')
    <div id="content">
        <div class="container">
            <h2 class="title-divider">
                <span>login</span>
            </h2>

            <div class="panel-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Ocorreu um erro no login, verifique os campos abaixo.</strong><br/><br/>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {!! Form::open(['url'=>'usuario/logar', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'form']) !!}
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="login">Login</label>
                        <div class="col-md-6">
                            {!! Form::text('login', null, ['id' => 'login', 'class' => 'form-control', 'required' => 'required']) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="senha">Senha</label>
                        <div class="col-md-6">
                            {!! Form::password('senha', ['id' => 'senha', 'class' => 'form-control', 'required' => 'required']) !!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Lembrar Senha
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary salvar">Login</button>

                            <a class="btn btn-link" href="{{ url('/password/email') }}">Esqueci senha!</a>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
