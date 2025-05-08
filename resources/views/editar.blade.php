@extends('layout')
@section('conteudo')

<form action="" method="post">

    <div class="form-group">
        <input type="text" name="tarefa" class="form-control">
    </div>

    <div class="mt-4">
        <label> <input type="radio" name="status" value="1"> Pendente </label>
        <label><input type="radio" name="status" value="1"> Concluída</label>
    </div>

    <button type="submit" class="btn btn-warning mt-3">Salvar</button>
</form>
@endsection