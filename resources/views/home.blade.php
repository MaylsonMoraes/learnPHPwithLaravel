@extends('layouts.main')

@section('title', 'Chute Boxe No Stress')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Academia Chute Boxe No Stress</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Busque Programas Marciais...">
    </form>
</div>
<div id="programs-container" class="col-md-12">
    <h2>Próximos Programas</h2>
    <p class="subtitle">Veja os programas mais próximos</p>
    <div id="cards-container" class="row">
        @foreach($programs as $program)
        <div class="card col-md-3">
            <img src="/img/programs/{{ $program->image }}" alt="{{ $program->name }}">
            <div class="card-body">
                <p class="card-date">08/10/1988</p>
                <h5 class="card-name">{{$program->name}}</h5>
                <p class="card-alunos">X alunos</p>
                <a href="/programs/{{ $program->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection