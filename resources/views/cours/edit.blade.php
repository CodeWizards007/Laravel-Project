@extends('cours.layout')
@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">Update Course</div>
        <div class="card-body">
            <form action="{{ url('cour/' .$cour->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <label>titre</label></br>
                <input type="text" name="titre" id="titre" class="form-control" value={{$cour->titre}}></br>
                <label>description</label></br>
                <input type="text" name="description" id="description" class="form-control" value={{$cour->description}}></br>
                <label>matiere</label></br>
                <input type="text" name="matiere" id="matiere" class="form-control" value={{$cour->matiere}}></br>
                <label>pourClasse</label></br>
                <input type="text" name="pourClasse" id="pourClasse" class="form-control" value={{$cour->pourClasse}}></br>
                <label>nom_annexe</label></br>
                <input type="text" name="nom_annexe" id="nom_annexe" class="form-control" value={{$cour->nom_annexe}}></br>
                <label>pourClasse</label></br>
                <input type="text" name="pourClasse" id="pourClasse" class="form-control" value={{$cour->pourClasse}}></br>
                <label>User</label>
                <select name="user_id" id="user_id">
                    @foreach ($users as $u)
                        @if($u->id == $cour->user_id)
                            <option value="{{$u->id}}" selected>{{$u->prenom}} {{$u->nom}}</option>
                        @else
                           <option value="{{$u->id}}">{{$u->prenom}} {{$u->nom}}</option>
                        @endif
                    @endforeach
                </select>
                <br />
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>
        </div>
    </div>
@stop
