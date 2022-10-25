@extends('blogs.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Créer un nouveau BLOG </div>
  <div class="card-body">
       
      <form action="{{ url('blogs') }}" method="post">
        {!! csrf_field() !!}                            
        <label>Titre</label></br>
        <input type="text" name="titre" id="titre" class="form-control"></br>
        <label>Contenu</label></br>
        <input type="text" name="contenu" id="contenu" class="form-control"></br>
        <label>CreePar</label></br>
        <input type="text" name="user_id" id="user_id" class="form-control"></br>
        <input type="submit" value="Ajouter" class="btn btn-success"></br>
    </form>
    
  </div>
</div>