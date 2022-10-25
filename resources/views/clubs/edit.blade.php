@extends('clubs.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Edit Club</div>
    <div class="card-body">

        <form action="{{ url('club/' .$clubs->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$clubs->id}}" id="id" />
            <label>Nom club</label></br>
            <input type="text" name="nomClub" id="nomClub" value="{{$clubs->nomClub}}" class="form-control"></br>
            <label>specialite</label></br>
            <input type="text" name="specialite" id="specialite" value="{{$clubs->specialite}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop
