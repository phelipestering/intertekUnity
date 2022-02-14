@extends('adminlte::page')

@section('title', 'Unity - Inspetores')

@section('content_header')
<h1>Inspetores <a href="{{ route('inspectors.create') }}" class="btn btn-dark">CADASTRAR INSPETOR</a></h1>
@stop

@section('content')
    <p>Inspetores</p>

    <div class="card">
        <div class="card-header">
            <form action="{{ route('inspectors.search') }}" method="post" class="form form-inline">
                @csrf
                <input type="text" name="filter" class="form-control" value="{{ $filters['filter'] ?? ''}}">
                <button type="submit" class="btn btn-dark"><i class="fas fa-filter"></i> Filtrar</button>
            </form>
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
                            <a href="{{ route ('inspectors.show', $inspector->nome) }}" class="btn btn-warning">VER DADOS</a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

        <div class="card-footer">
            @if (isset($filters))

            {!! $inspectors->appends($filters)->links() !!}

        @else

            {!! $inspectors->links() !!}

        @endif

        </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

