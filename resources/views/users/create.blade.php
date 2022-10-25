@extends('users.layout')
@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">Create New User</div>
        <div class="card-body">
            <form action="{{ url('/user') }}" method="POST">
                {!! csrf_field() !!}
                <label>Nom</label></br>
                <input type="text" name="nom" id="nom" class="form-control" @error('nom') is-invalid @enderror"></br>
                @error('nom')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                <label>Prenom</label></br>
                <input type="text" name="prenom" id="prenom" class="form-control" @error('prenom') is-invalid @enderror"></br>
                @error('prenom')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                <label>email</label></br>
                <input type="text" name="email" id="email" class="form-control" @error('email') is-invalid @enderror"></br>
                @error('email')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                <label>password</label></br>
                <input type="text" name="password" id="password" class="form-control" @error('email') is-invalid @enderror"></br>
                @error('password')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                <label>telephone</label></br>
                <input type="number" name="telephone" id="telephone" class="form-control" @error('telephone') is-invalid @enderror"></br>
                @error('telephone')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                <label>adresse</label></br>
                <input type="text" name="adresse" id="adresse" class="form-control" @error('adresse') is-invalid @enderror"></br>
                @error('adresse')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                <label>role</label></br>
                <select name="role" id="role" @error('role') is-invalid @enderror">
                    <option value="etudiant">etudiant</option>
                    <option value="enseignant">enseignant</option>
                </select>
                @error('role')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                <label>Classe</label>
                <select name="classe_id" id="classe_id" @error('classe_id') is-invalid @enderror" >
                    @foreach ($classes as $classe)
                        <option value="{{$classe->id}}">{{$classe->nomClasse}}</option>
                    @endforeach
                </select>
                @error('classe_id')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                <label>Club</label>
                <select name="club_id" id="club_id" @error('club_id') is-invalid @enderror">
                    @foreach ($clubs as $club)
                        <option value="{{$club->id}}">{{$club->nomClub}}</option>
                    @endforeach
                </select>
                        @error('club_id')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                <br />
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>
        </div>
    </div>

@stop
