@extends('layouts.main')

@section('title', 'Create')

@section('content')

<div id="program-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu Programa marcial</h1>
    <form action="/programs" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Arte marcial:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome do programa">
        </div>
        <div class="form-group">
            <label for="title">Estilo:</label>
            <input type="text" class="form-control" id="style" name="style" placeholder="Estilo de luta">
        </div>
        <div class="form-group">
            <label for="title">Faixa etária:</label>
            <select class="form-select" name="type" id="type" required>
                <option value="">Selecione...</option>
                <option>Crianças</option>
                <option>Adultos</option>
                <option>Idosos</option>
                <option>Todos</option>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Programa">
    </form>
</div>

@endsection