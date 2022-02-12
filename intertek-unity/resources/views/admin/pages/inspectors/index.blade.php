@extends('adminlte::page')

@section('title', 'Unity - Inspetores')

@section('content_header')
    <h1>Inspetores</h1>
@stop

@section('content')
    <p>Inspetores</p>

    <div class="card">
        <div class="card-header">
            botao de Filtros
        </div>

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Estado</th>
                        <th>Cidade</th>
                        <th>Disciplina</th>
                        <th>Qualificacoes</th>
                        <th style="width:30px">Acoes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inspectors as $inspector )

                    <tr>
                        <td>
                            {{ $inspector -> nome }}
                        </td>
                        <td>
                            {{ $inspector -> UF }}
                        </td>
                        <td>
                            {{ $inspector -> cidade }}
                        </td>
                        <td>
                            {{ $inspector -> disciplina }}
                        </td>
                        <td>
                            {{ $inspector -> qualificacoes }}
                        </td>
                        <td style="width:30px">
                            <a href="" class="btn btn-warning">VER DADOS</a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

