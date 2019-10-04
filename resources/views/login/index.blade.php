@extends('layout.site')

@section('titulo')
Login
@endsection

@section('conteudo')
<div class="container">
    <h3 class="center">Entrar no sistema</h3>
    <div class="row">
        <form action="{{route('site.login.entrar')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="input-field">
                <input type="email" name="email" >
                <label for="">Email</label>
            </div>
            <div class="input-field">
                <input type="password" name="senha" >
                <label for="">Senha</label>
            </div>
            <button type="submit" class="btn blue">Entrar</button>
        </form>
    </div>
</div>
@endsection