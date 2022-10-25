@extends('forums.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Edit Student</div>
    <div class="card-body">

        <form action="{{ url('forum/' .$forums->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$forums->id}}" id="id" />
            <label>Titre</label></br>
            <input type="text" name="titre" id="titre" value="{{$forums->titre}}" class="form-control"></br>
            <label>Contenue</label></br>
            <input type="textare" name="contenue" id="contenue" value="{{$forums->contenue}}" class="form-control"></br>


            <div class="d-flex justify-content-around">
                <input type="submit" value="Metter à jours" class="btn btn-success"></br>
                <a class="btn btn-primary" href="{{ url('/forum').'/'.$forums->id }}">Retourner</a>
            </div>

        </form>

    </div>
</div>



@stop
