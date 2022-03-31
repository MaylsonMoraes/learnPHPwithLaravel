@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
   
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Programas Marciais</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-programs-container">
    @if(count($programs) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Alunos</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($programs as $program)
            <tr>
                <td scropt="row">{{ $loop->index + 1 }}</td>
                <td><a href="/programs/{{ $program->id }}">{{ $program->name }}</a></td>
                <td>0</td>
                <td><a href="#">Editar</a> <a href="#">Deletar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Você ainda nao possui programas marciais cadastrados,<a href="/programs/create">Criar Programa Marcial</a></p>
    @endif
</div>
@endsection
