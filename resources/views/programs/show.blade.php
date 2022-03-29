@extends('layouts.main')

@section('title', $program->name)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/programs/{{ $program->image }}" class="img-fluid" alt="{{ $program->name }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $program->name }}</h1>
                <p class="program-style"><ion-icon name="" ></ion-icon> {{ $program->style }} </p>
                <p class="program-type"><ion-icon name="people-outline"></ion-icon> {{ $program->type }} </p>
                <p class="program-students"><ion-icon name="people-outline"></ion-icon> {{ $program->students }} Alunos </p>
                <p class="program-teacher"><ion-icon name="star-outline"></ion-icon> Professor {{ $program->user->name }} </p>
                <a href="#" class="btn btn-primary" id="program-submit"> Inscrever-se </a>
                <h3>É necessário para este programa marcial:</h3>
                <ul id="items-list">
                    @foreach ($program->items as $item)
                        <li><ion-icon name="play-outline"></ion-icon> <span>{{ $item }}</span> </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection