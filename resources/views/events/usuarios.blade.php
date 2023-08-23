@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie sua Produtividade do dia</h1>
    <div class="form-group">
    <label for="title">Descrição:</label>
    <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
</div>

@endsection