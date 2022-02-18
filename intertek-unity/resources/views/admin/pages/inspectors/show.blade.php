@extends('adminlte::page')

@section('title', "Unity - Dados Inspetor {{ $inspector->name }}")

@section('content_header')
<h1>Dados Inspetor <b>{{ $inspector->name }}</b></h1>
@stop

@section('content')
        <div class="card-body">



            <ul>
                <li>
                    <strong>Nome:</strong> {{ $inspector->name }}
                </li>

                <li>
                    <strong>Email:</strong> {{ $inspector->emailIntertek }}
                </li>

                <li>
                    <strong>Especialidade:</strong> {{ $inspector->disciplina }}
                </li>

                <li>
                    <strong>Qualificacoes:</strong> {{ $inspector->qualificacoes }}
                </li>

                <li>
                    <strong>Estado:</strong> {{ $inspector->UF }}
                </li>

                <li>
                    <strong>Cidade:</strong> {{ $inspector->cidade }}
                </li>

                <li>
                    <strong>Bairro:</strong> {{ $inspector->bairro}}
                </li>

                <li>
                    <strong>Endereco:</strong> {{ $inspector->rua}}
                </li>

                <li>
                    <strong>Telefone Principal - WhatsApp:</strong> {{ $inspector->telefone1}}
                </li>

                <li>
                    <strong>Telefone Auxiliar - Emergencial:</strong> {{ $inspector->telefone2 }}
                </li>

                <li>
                    <strong>CPF:</strong> {{ $inspector->cpf }}
                </li>

            </ul>

            <form action="{{ route('inspectors.deleteInspetor', $inspector->name) }}" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger"> DELETAR INSPETOR {{ $inspector->name}}

            </button>

            </form>

        </div>



    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop



