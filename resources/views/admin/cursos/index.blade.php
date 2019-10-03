@extends('layout.site')

@section('titulo')
Cursos
@endsection

@section('conteudo')
<div class="container">
    <h3 class="center">Lista de cursos</h3>
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Imagem</th>
                    <th>Publicado</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                <tr>
                    <td>{{$registro->id}}</td>
                    <td>{{$registro->titulo}}</td>
                    <td>{{$registro->descricao}}</td>
                    <td>{{$registro->valor}}</td>
                    <td><img height="60" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}"></td>
                    <td>{{$registro->publicado}}</td>
                    <td>
                        <a class="btn deep-orange" href="{{route('admin.cursos.editar', $registro->id)}}">Editar</a>
                        <a class="btn red modal-trigger" href="#modal1">Deletar</a>
                    </td>
                </tr>
                <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4>Deseja realmente deletar?</h4>
                            <p>Todos os dados referente a esse curso serão apagados do banco de dados!</p>
                        </div>
                        <div class="modal-footer">
                            <a href="" class="modal-close waves-effect waves-red btn-flat red white-text">Não</a>
                            <a href="{{ route('admin.cursos.deletar', $registro->id)}}" class="modal-close waves-effect waves-green btn-flat green white-text">Sim</a>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="row">
        <a href="{{ route('admin.cursos.adicionar') }}" class="btn blue">Adicionar</a>
    </div>
</div>
@endsection