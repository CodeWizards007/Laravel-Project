//blog\resources\views\blogs\edit.blade.php
@extends('blogs.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Modifier Blog</div>
  <div class="card-body">
       
      <form action="{{ url('blogs/' .$blogs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$blogs->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="titre" id="titre" value="{{$blogs->titre}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="contenu" id="contenu" value="{{$blogs->contenu}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="user_id" id="user_id" value="{{$blogs->user_id}}" class="form-control"></br>
        <input type="submit" value="Modifier" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop