@extends('reclamations.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Create New Reclamations</div>
    <div class="card-body">

        <form action="{{ url('reclamation') }}" method="post">
            {!! csrf_field() !!}
            <label>titre</label></br>
            <input type="text" name="titre" id="titre" class="form-control"></br>
            <label>contenue</label></br>
            <input type="text" name="contenue" id="contenue" class="form-control"></br>
            <label>status</label></br>
            <input type="text" name="status" id="status" class="form-control"></br>
            <label>user id</label></br>
            <input type="text" name="user_id" id="user_id" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop
