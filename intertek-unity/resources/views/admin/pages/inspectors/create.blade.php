@extends('adminlte::page')

@section('title', 'Unity - Cadastro Inspetores')

@section('content_header')
<h1>Cadastrar Novo Inspetor</h1>
@stop

@section('content')
    <p>Cadastro</p>

        <div class="card-body">
            <form action="{{ route('inspectors.store') }}" class="form" method="POST">
                @csrf

                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome:">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="emailIntertek" class="form-control" placeholder="Email Intertek">
                </div>

                <div class="form-group">
                    <label>Disciplina</label>
                    <input type="text" name="disciplina" class="form-control" placeholder="Disciplina">
                </div>

                <div class="form-group">
                    <label>Qualificacoes</label>
                    <input type="text" name="qualificacoes" class="form-control" placeholder="Qualificacoes">
                </div>

                <div class="form-group">
                    <label>Cidade</label>
                    <input type="text" name="cidade" class="form-control" placeholder="Cidade">
                </div>

                <div class="form-group">
                    <label>UF</label>
                    <input type="text" name="UF" class="form-control" placeholder="UF">
                </div>

                <div class="form-group">
                    <label>Bairro</label>
                    <input type="text" name="bairro" class="form-control" placeholder="Bairro">
                </div>

                <div class="form-group">
                    <label>Endereco</label></label>
                    <input type="text" name="rua" class="form-control" placeholder="Endereco">
                </div>

                <div class="form-group">
                    <label>Telefone 1</label>
                    <input type="text" name="telefone1" class="form-control" placeholder="Telefone Principal - WhatsApp">
                </div>

                <div class="form-group">
                    <label>Telefone 2</label>
                    <input type="text" name="telefone2" class="form-control" placeholder="Telefone Auxiliar / Emergencias">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>

            </form>
        </div>



    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop



