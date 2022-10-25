@extends('users.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Users Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Name : {{ $user->nom }}</h5>
                <p class="card-text">Address : {{ $user->prenom }}</p>
                <p class="card-text">Mobile : {{ $user->telephone }}</p>
                <p class="card-text">Role : {{ $user->role }}</p>
                <p class="card-text">Telephone : {{ $user->adresse }}</p>
                <p class="card-text">Email : {{ $user->email }}</p>
                <p class="card-text">classe : {{ $classe->nomClasse }}</p>
                <p class="card-text">club : {{ $club->nomClub }}</p>
            </div>
            </hr>
        </div>
    </div>
