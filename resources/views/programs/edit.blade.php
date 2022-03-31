@extends('layouts.main')

@section('title', 'Editando' . $program->name)

@section('content')

<div id="program-create-container" class="col-md-6 offset-md-3">
    
    @if($errors)

        @foreach($errors->all() as $errors)

            <li style="color: red;">

                {{ $errors }}

            </li>
        
        @endforeach
        
    @endif    

    <h1>Editando: {{ $program->name }}</h1>
    <form action="/programs/update/{{ $program->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem da Arte Marcial:</label>
            <input type="file" id="image" name="image" class="form-control-file">   
            <img src="/img/programs/{{ $program->image }}" alt="{{ $program->name }}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Arte marcial:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome do programa" value="{{ $program->name }}">
        </div>
        <div class="form-group">
            <label for="title">Estilo:</label>
            <input type="text" class="form-control" id="style" name="style" placeholder="Estilo de luta" value="{{ $program->style }}">
        </div>
        <div class="form-group">
            <label for="date">Data de início:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $program->date->format('Y-m-d') }}">
        </div>
        <div class="form-group">
            <label for="title">Quantidade de alunos:</label>
            <input type="text" class="form-control" id="students" name="students" placeholder="Quantidade de Alunos" value="{{ $program->students }}">
        </div>
        <div class="form-group">
            <label for="title">Faixa etária:</label>
            <select class="form-select" name="type" id="type" required>
                <option value="">Selecione...</option>
                <option value="Crianças" {{ $program->type == 'Crianças' ? "selected='selected'" : "" }}>Crianças</option>
                <option value="Adultos" {{ $program->type == 'Adultos' ? "selected='selected'" : "" }}>Adultos</option>
                <option value="Idosos" {{ $program->type == 'Idosos' ? "selected='selected'" : "" }}>Idosos</option>
                <option value="Todos" {{ $program->type == 'Todos' ? "selected='selected'" : "" }}>Todos</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Itens necessários para práticar:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Kimono"> Kimono
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Faixa"> Faixa
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Luva"> Luva
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Espada de treino"> Espada de treino
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Programa">
    </form>
</div>

@endsection