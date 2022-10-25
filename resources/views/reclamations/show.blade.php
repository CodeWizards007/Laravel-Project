@extends('reclamations.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Reclamations Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">titre : {{ $reclamations->titre }}</h5>
            <p class="card-text">contenue : {{ $reclamations->contenue }}</p>
            @if( $reclamations->status == 0)
            <p class="card-text">status: Non Traité</p>
            @endif
            @if( $reclamations->status == 1)
            <p class="card-text">status : Traité</p>
            @endif
            <p class="card-text">User : {{ $reclamations->user_id }}</p>
        </div>
        </hr>
    </div>
</div>
