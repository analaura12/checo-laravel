@extends('layouts.login.app')

@section('content')
<div class="container" id="container">
    <div class="form-container sign-in-container">
        <form method="POST" action="{{ route('establishment.postLogin') }}">
            @csrf
            <div class="logo">
                <a href="">
                    <img width="200px" src="{{asset('images/logo-checo.png')}}" alt="">
                </a>
            </div>
            @include('layouts.alerts.success')
            @include('layouts.alerts.error')
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <button type="submit">ENTRAR</button>
            <a href="{{route('index')}}">
                Retornar para página inicial
            </a>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>CHE CO foi feito para seu bar e restaurante!?</h1>
                <p>Faça seu cadastro e conheça nossas funcionalidades!</p>
                <a href="{{route('establishment.create')}}">
                    <button class="ghost" id="signUp">Cadastre-se</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
