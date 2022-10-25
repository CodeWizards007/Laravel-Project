@extends('reclamations.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Create New Reclamations</div>
    <div class="card-body">

        <form action="{{ url('reclamation') }}" method="post">
            {!! csrf_field() !!}
            <label>titre</label></br>
            <input type="text" name="titre" id="titre" class="form-control @error('titre') is-invalid @enderror"></br>
            @error('titre')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            <label>contenue</label></br>
            <input type="text" name="contenue" id="contenue" class="form-control @error('contenue') is-invalid @enderror"></br>
            @error('contenue')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            <input  type="hidden" name="status" id="status" value="0" ></br>
            <label>user</label></br>
            <select class="form-select mb-5" name="user_id">
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->nom}}</option>
                @endforeach
            </select>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop
