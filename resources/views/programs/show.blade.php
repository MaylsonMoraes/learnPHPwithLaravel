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
                <p class="program-students"><ion-icon name="people-outline"></ion-icon> x Alunos </p>
                <p class="program-teacher"><ion-icon name="star-outline"></ion-icon> Professor </p>
                <a href="#" class="btn btn-primary" id="event-submit"> Inscrever-se </a>
            </div>
        </div>
    </div>

@endsection