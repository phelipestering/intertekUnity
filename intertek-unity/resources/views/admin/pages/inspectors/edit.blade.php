@extends('adminlte::page')

@section('title', "Unity - Editar Inspetores { $inspector->name } ")

@section('content_header')
<h1>Atualizar Inspetor {{ $inspector->name }} </h1>
@stop

@section('content')
    <p>ATUALIZAR INSPETOR</p>

        <div class="card-body">
            <form action="{{ route('inspectors.update', $inspector->name) }}" class="form" method="POST">

                @csrf

                @method('PUT')

                @include('admin.pages.inspectors._partials.forms')

                <div class="form-group">
                    <button type="submit" class="btn btn-success">ATUALIZAR</button>
                </div>

            </form>
        </div>



    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop



