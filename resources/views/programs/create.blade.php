@extends('layouts.main')

@section('title', 'Criar Programa Marcial')

@section('content')

<div id="program-create-container" class="col-md-6 offset-md-3">
    
    @if($errors)

        @foreach($errors->all() as $errors)

            <li style="color: red;">

                {{ $errors }}

            </li>
        
        @endforeach
        
    @endif    

    <h1>Crie o seu Programa marcial</h1>
    <form action="/programs" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem da Arte Marcial:</label>
            <input type="file" id="image" name="image" class="form-control-file">   
        </div>
        <div class="form-group">
            <label for="title">Arte marcial:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome do programa">
        </div>
        <div class="form-group">
            <label for="date">Data de início:</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="Início da Turma">
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