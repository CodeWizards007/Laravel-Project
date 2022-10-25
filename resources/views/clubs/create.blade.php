@extends('clubs.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Create New Clubs</div>
    <div class="card-body">

        <form action="{{ url('club') }}" method="post">
            {!! csrf_field() !!}
            <label>nom club</label></br>
            <input type="text" name="nomClub" id="nomClub" class="form-control"></br>
            <label>specialite</label></br>
            <select class="form-select mb-5" name="specialite">
                <option value="TWIN">TWIN</option>
                <option value="SE">SE</option>
                <option value="ArcTIC">ArcTIC</option>
                <option value="NIDS">NIDS</option>
            </select>

            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop
