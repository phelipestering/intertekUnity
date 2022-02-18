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

                @include('admin.pages.inspectors._partials.forms')

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



