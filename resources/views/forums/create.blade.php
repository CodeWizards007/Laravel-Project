@extends('forums.layout')
@section('content')
<div class="card" style="margin:20px;">
    <div class="card-header">Créer un nouveau Forum</div>
    <div class="card-body">

        <form action="{{ url('forum') }}" method="post">
            {!! csrf_field() !!}
            <label>Titre</label></br>
            <input type="text" name="titre" id="titre" class="form-control @error('titre') is-invalid @enderror"></br>

            <!-- error message untuk title -->
            @error('titre')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror

            <label>Contenue</label></br>
            <input type="textarea" name="contenue" id="contenue" class="form-control @error('contenue') is-invalid @enderror"></br>


            @error('contenue')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror


            <label>Créer par</label></br>
            <select class="form-select" name="user_id">
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->nom}}</option>
                @endforeach
            </select>

            <div class="d-flex justify-content-around mt-5">
                <input type="submit" value="Créer" class="btn btn-success"></br>
                <a class="btn btn-primary" href="{{ url('/forum') }}">Retourner</a>
            </div>

        </form>

    </div>
</div>

@stop
