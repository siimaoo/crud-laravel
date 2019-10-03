@extends('layout.site')

@section('titulo')
Cursos
@endsection

@section('conteudo')
<div class="container">
    <h3 class="center">Editando Curso</h3>
    <div class="row">
        <form action="{{route('admin.cursos.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            @include('admin.cursos._form')
            <button type="submit" name="button" class="btn blue">Atualizar</button>
        </form>
    </div>
</div>
@endsection