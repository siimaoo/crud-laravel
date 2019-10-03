@extends('layout.site')

@section('titulo')
Cursos
@endsection

@section('conteudo')
<div class="container">
    <h3 class="center">Lista de cursos</h3>
    <div class="row">
        @foreach ($cursos as $curso)
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{$curso->imagem}}">
                    <span class="card-title">{{$curso->titulo}}</span>
                </div>
                <div class="card-content">
                    <p>{{$curso->descricao}}</p>
                </div>
                <div class="card-action">
                    <a href="#">Isso é um link</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection