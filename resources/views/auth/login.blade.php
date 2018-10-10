@extends('layout')

@section('content')
<section id="panel-acceso" style="background-image: url('imagenes/nosotros/abouts-us.jpg'); background-position: center center; background-origin: cover; background-repeat: no-repeat; background-size: cover; position: relative;">
<div class="bg-overlay"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4 content-card">
            <div class="card">
                    <div class="card-header">
                            <h3 class="card-title text-center">Acceso a la aplicacion</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST"  action="{{ route('login') }}">
                                {{  csrf_field() }}
                            <div class="form-group  {{ $errors->has('email') ? 'has-error' : ''  }}">
                                <label for="user">Usuario</label>
                                <input  class="form-control" type="email" name="email" value="{{old('email')}}" placeholder="Ingresa tu email">
                                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group  {{ $errors->has('password') ? 'has-error' : ''  }}">
                                    <label for="password">Contraseña</label>
                                    <input  class="form-control" type="password" name="password" placeholder="Ingresa tu password">
                                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                            </div>
                            <button class="btn btn-primary btn-block">Acceso</button>
                        </form>
                  </div>
            </div>
        </div>
    </div>
</div>
</section>
 {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
