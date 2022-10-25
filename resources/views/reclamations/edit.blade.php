@extends('reclamations.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Edit Reclamation</div>
    <div class="card-body">

        <form action="{{ url('reclamation/' .$reclamations->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$reclamations->id}}" id="id" />
            <label>Titre</label></br>
            <input type="text" name="titre" id="titre" value="{{$reclamations->titre}}" class="form-control"></br>
            <label>Contenue</label></br>
            <input type="text" name="contenue" id="contenue" value="{{$reclamations->contenue}}" class="form-control"></br>
            <input type="hidden" name="status" id="status" value="0" class="form-control"></br>
            <label>User</label></br>
            <input type="" name="user_id" id="user_id" value="{{$reclamations->user_id}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop
