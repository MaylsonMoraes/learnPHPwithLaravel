@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque Programas Marciais</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="procurar...">
    </form>
</div>
<div id="programs-container" class="col-md-12">
    <h2>Próximos Programas</h2>
    <div id="cards-container" class="row">
        @foreach($programs as $program)
        <div class="card col-md-3">
            <img src="/img/boxe.jpg" alt="{{ $program->name }}">
            <div class="card-body">
                <p class="card-date">08/10/1988</p>
                <h5 class="card-name">{{$program->name}}</h5>
                <p class="card-alunos">X alunos</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection