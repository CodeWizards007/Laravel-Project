@extends('reclamations.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Reclamations Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">titre : {{ $reclamations->titre }}</h5>
            <p class="card-text">contenue : {{ $reclamations->contenue }}</p>
            <p class="card-text">status : {{ $reclamations->status }}</p>
        </div>
        </hr>
    </div>
</div>
