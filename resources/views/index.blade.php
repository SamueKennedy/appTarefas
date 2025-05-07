@extends('layout')

@section('conteudo')
    <h2>Lista de Tarefas</h2>
    <form action="" method="post">
        <div class="input-group">
            <input type="text" name="tarefa" class="form-control">
            <button type="submit" class="btn btn-warning">
                <i class="fa fa-plus"></i> Adicionar
            </button>
        </div>
    </form>

    <ul class="list-group mt-4">

@foreach ($tarefas as $tr)            

        <li class="list-group-item d-flex justify-content-between align-items-center">

            <div class="d-flex">
                <input type="checkbox" name="status" class="form-check-input me-2" {{ $tr->status ? 'checked' : '' }}>
                <span>{{$tr->tarefa}}</span>
            </div>
            <div class="btn-group">
                <a href="#" class="btn btn-light btn-sm"><i class="fa fa-edit"></i></a>
                <form action="#" method="post" class="btn-group">
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </form>
            </div>
        </li>

        @endforeach

    </ul>
@endsection
