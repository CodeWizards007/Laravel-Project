@extends('users.layout')
@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">Create New User</div>
        <div class="card-body">
            <form action="{{ url('/user') }}" method="POST">
                {!! csrf_field() !!}
                <label>Nom</label></br>
                <input type="text" name="nom" id="nom" class="form-control"></br>
                <label>Prenom</label></br>
                <input type="text" name="prenom" id="prenom" class="form-control"></br>
                <label>email</label></br>
                <input type="text" name="email" id="email" class="form-control"></br>
                <label>password</label></br>
                <input type="text" name="password" id="password" class="form-control"></br>
                <label>telephone</label></br>
                <input type="number" name="telephone" id="telephone" class="form-control"></br>
                <label>adresse</label></br>
                <input type="text" name="adresse" id="adresse" class="form-control"></br>
                <label>role</label></br>
                <select name="role" id="role">
                    <option value="etudiant">etudiant</option>
                    <option value="enseignant">enseignant</option>
                </select>
                <label>Classe</label>
                <select name="classe_id" id="classe_id"  >
                    @foreach ($classes as $classe)
                        <option value="{{$classe->id}}">{{$classe->nomClasse}}</option>
                    @endforeach
                </select>
                <label>Club</label>
                <select name="club_id" id="club_id">
                    @foreach ($clubs as $club)
                        <option value="{{$club->id}}">{{$club->nomClub}}</option>
                    @endforeach
                </select>
                <br />
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>
        </div>
    </div>

@stop
