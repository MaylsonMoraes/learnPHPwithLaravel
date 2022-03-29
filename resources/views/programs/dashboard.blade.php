@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
   
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Programas Marciais</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-programs-container">
    @if(count(programs) > 0)
    @else
    <p>Você ainda nao possui programas marciais cadastrados,<a href="/programs/create">criar evento</a></p>
    @endif
</div>
@endsection
