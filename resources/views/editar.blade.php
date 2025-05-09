@extends('layout')
@section('conteudo')

<form action="{{route('atualizar', $tarefa->id)}}" method="post">

    @method('put')
    @csrf

    <div class="form-group">
        <input type="text" name="tarefa" class="form-control" value="{{$tarefa->tarefa}}">
    </div>

    <div class="mt-4">
        <label> <input type="radio" name="status" value="0" class="form-check-input" {{$tarefa->status == 0? 'checked':''}}> Pendente </label>
        <label><input type="radio" name="status" value="1" class="form-check-input" {{$tarefa->status == 1? 'checked':''}}> Concluída</label>
    </div>

    <button type="submit" class="btn btn-warning mt-3">Salvar</button>
</form>
@endsection