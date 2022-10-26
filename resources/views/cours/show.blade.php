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
                <p class="card-text">path_annexe: {{$cour->path_annexe}}</p>
                <p class="card-text">Nom Classe : {{ $cour->pourClasse }}</p>
                <p class="card-text">User nom : {{ $course_user->nom }}</p>
                <p class="card-text">User prenom : {{ $course_user->prenom }}</p>
                <p class="card-text">path_annexe:  {{$cour->path_annexe}}</p>


            </div>
            </hr>
        </div>
    </div>
