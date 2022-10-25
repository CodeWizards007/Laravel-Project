@extends('forums.layout')
@section('content')
<div class="card" style="margin:20px;">
    <div class="card-header">Ajouter un commentaire</div>
    <div class="card-body">

        <form action="{{ url('commentaire') }}" method="post">
            {!! csrf_field() !!}
            <label>contenue</label></br>
            <input type="text" name="contenue" id="contenue" class="form-control"></br>

            <input type="hidden" name="forum_id" id="forum_id" class="form-control" value="{{$array['forum_id']}}"></br>

            <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{$array['user_id']}}"></br>


            <div class="d-flex justify-content-around mt-5">
                <input type="submit" value="Créer" class="btn btn-success"></br>
                <!--<a class="btn btn-primary" href="{{ url('/forum') }}">Retourner</a>-->
            </div>

        </form>

    </div>
</div>

@stop









