@extends('evenements.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Créer un nouveau evenement </div>
  <div class="card-body">
       
      <form action="{{ url('evenements') }}" method="post">
        {!! csrf_field() !!}                            
        <label>Titre</label></br>
        <input type="text" name="titre" id="titre" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Date de l'event : </label></br>
        <input type="date" name="date" id="date" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <input type="submit" value="Ajouter" class="btn btn-success"></br>
    </form>
    
  </div>
</div>