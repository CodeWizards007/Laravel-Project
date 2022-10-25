@extends('blogs.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Listes des blogs</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nom du blog : {{ $blogs->titre }}</h5>
        <p class="card-text">Contenu du blog : {{ $blogs->contenu }}</p>
        <p class="card-text">ID De l'utilisateur : {{ $blogs->user_id }}</p>
        <p class="card-text">Date de création : {{ $blogs->created_at }}</p>

  </div>
    </hr>
  </div>
</div>