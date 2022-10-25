@extends('clubs.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Clubs Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">nomClub : {{ $clubs->nomClub }}</h5>
            <p class="card-text">specialite : {{ $clubs->specialite }}</p>

        </div>
        </hr>
    </div>
</div>
