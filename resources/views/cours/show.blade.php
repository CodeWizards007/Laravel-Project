@extends('cours.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Cours Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">titre : {{ $cour->titre }}</h5>
                <p class="card-text">description : {{ $cour->description }}</p>
                <p class="card-text">matiere : {{ $cour->matiere }}</p>
                <p class="card-text">nom_annexe : {{ $cour->nom_annexe }}</p>
                <p class="card-text">Nom Classe : {{ $cour->pourClasse }}</p>
                <p class="card-text">User : {{ $course_user->nom }}</p>

            </div>
            </hr>
        </div>
    </div>
