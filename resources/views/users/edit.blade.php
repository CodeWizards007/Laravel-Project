@extends('users.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit user</div>
        <div class="card-body">

            <form action="{{ url('user/' .$user->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$user->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$user->nom}}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{$user->prenom}}" class="form-control"></br>
                <label>Email</label></br>
                <input type="text" name="email" id="email" value="{{$user->email}}" class="form-control"></br>
                <label>adresse</label></br>
                <input type="text" name="adresse" id="adresse" value="{{$user->adresse}}" class="form-control"></br>
                <label>Mobile</label></br>
                <input type="number" name="telephone" id="telephone" value="{{$user->telephone}}" class="form-control"></br>
                <select name="role" id="role" >
                    <option value="etudiant">etudiant</option>
                    <option value="enseignant">enseignant</option>
                </select>
                <label>Classe</label>
                <select name="classe_id" id="classe_id">
                    @foreach ($classes as $classe)
                        @if($classe->id == $user->classe_id)
                            <option value="{{$classe->id}}" selected>{{$classe->nomClasse}}</option>
                        @else
                         <option value="{{$classe->id}}">{{$classe->nomClasse}}</option>
                        @endif
                    @endforeach
                </select>
                <label>Club</label>
                <select name="club_id" id="club_id">
                    @foreach ($clubs as $club)
                        @if($club->id == $user->club_id)
                            <option value="{{$club->id}}" selected>{{$club->nomClub}}</option>
                        @else
                          <option value="{{$club->id}}">{{$club->nomClub}}</option>
                        @endif
                    @endforeach
                </select>

                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
