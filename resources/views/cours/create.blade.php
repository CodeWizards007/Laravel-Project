@extends('cours.layout')
@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">Create New course</div>
        <div class="card-body">
            <form action="{{ url('/cour') }}" method="POST">
                {!! csrf_field() !!}
                <label>titre</label></br>
                <input type="text" name="titre" id="title" class="form-control"></br>
                <label>description</label></br>
                <input type="text" name="description" id="description" class="form-control"></br>
                <label>matiere</label></br>
                <input type="text" name="matiere" id="matiere" class="form-control"></br>
                <label>pourClasse</label></br>
                <input type="text" name="pourClasse" id="pourClasse" class="form-control"></br>
                <label>nom_annexe</label></br>
                <input type="text" name="nom_annexe" id="nom_annexe" class="form-control"></br>
                <label>pourClasse</label></br>
                <input type="text" name="pourClasse" id="pourClasse" class="form-control"></br>
                <label>User</label>
                <select name="user_id" id="user_id">
                    @foreach ($users as $u)
                        <option value="{{$u->id}}">{{$u->prenom}} {{$u->nom}}</option>
                    @endforeach
                </select>
                <br />
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>
        </div>
    </div>

@stop
