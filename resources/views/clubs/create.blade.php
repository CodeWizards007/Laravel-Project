@extends('clubs.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Create New Clubs</div>
    <div class="card-body">

        <form action="{{ url('club') }}" method="post">
            {!! csrf_field() !!}
            <label>nom club</label></br>
            <input type="text" name="nomClub" id="specialite" class="form-control"></br>
            <label>specialite</label></br>
            <input type="text" name="specialite" id="specialite" class="form-control"></br>

            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop
