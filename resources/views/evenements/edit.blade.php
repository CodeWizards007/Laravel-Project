@extends('evenements.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Modifier evenement</div>
  <div class="card-body">
       
      <form action="{{ url('evenements/' .$evenements->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$evenements->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="titre" id="titre" value="{{$evenements->titre}}" class="form-control"></br>
        <label>description</label></br>
        <input type="text" name="description" id="description" value="{{$evenements->description}}" class="form-control"></br>
        <label>Date</label></br>
        <input type="date" name="date" id="date" value="{{$evenements->date}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="Status" id="Status" value="{{$evenements->status}}" class="form-control"></br>
        <input type="submit" value="Modifier" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop