@extends('layouts.login.app')

@section('content')
<div class="container" id="container">
    <div class="form-container sign-in-container">
        <form method="POST" action="{{ route('establishment.register') }}" enctype="multipart/form-data">
            @include('layouts.alerts.success')
            @include('layouts.alerts.error')
            
            @csrf
            
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome completo">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="cnpj" type="text" class="form-control mask_cnpj @error('cnpj') is-invalid @enderror" name="cnpj" value="{{ old('cnpj') }}" required autocomplete="cnpj" placeholder="CNPJ">
            @error('cnpj')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="cellphone" type="text" class="form-control mask_cellphone_with_ddd @error('cellphone') is-invalid @enderror" name="cellphone" value="{{ old('cellphone') }}" required autocomplete="cellphone" placeholder="Celular">
            @error('cellphone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="profile_image" type="file" class="form-control @error('profile_image') is-invalid @enderror" name="profile_image" value="{{ old('profile_image') }}" required autocomplete="profile_image" placeholder="">
            @error('profile_image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme a senha">
            <button type="submit">ENTRAR</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>Ja possui cadastro?</h1>
                <a href="{{route('establishment.login')}}">
                    <button class="ghost" id="signUp">Login</button>
                </a>
            </div>
        </div>
        
    </div>
</div>
@endsection
