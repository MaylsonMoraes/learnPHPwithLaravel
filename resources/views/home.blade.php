@extends('layouts.main')

@section('title', 'Chute Boxe No Stress')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Academia Chute Boxe No Stress</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Busque Programas Marciais...">
    </form>
</div>
<div id="programs-container" class="col-md-12">
    @if($search)
    <h2>Buscando por: {{ $search }}</h2>
    @else
    <h2>Próximos Programas</h2>
    <p class="subtitle">Veja os programas mais próximos</p>
    @endif
    <div id="cards-container" class="row">
        @foreach($programs as $program)
        <div class="card col-md-3">
            <img src="/img/programs/{{ $program->image }}" alt="{{ $program->name }}">
            <div class="card-body">
                <p class="card-date">Data de início: {{ date('d/m/Y', strtotime($program->date)) }}</p>
                <h5 class="card-name">{{$program->name}}</h5>
                <p class="card-students">Quantidade de alunos: {{$program->students}}</p>
                <p class="card-type">Faixa etária: {{$program->type}}</p>
                <a href="/programs/{{ $program->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
        @if(count($programs) == 0 && $search)
            <p>Não foi possível encontrar nenhum programa marcial com {{ $search }}! <a href="/">Ver todos!</a></p>
        @elseif(count($programs) == 0)
            <p>Não há programas marciais disponíveis</p> 
        @endif
    </div>
</div>

@endsection