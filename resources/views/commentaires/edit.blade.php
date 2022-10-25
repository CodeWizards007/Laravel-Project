@extends('forums.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Edit Student</div>
    <div class="card-body">

        <form action="{{ url('commentaire/' .$commentaire->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$commentaire->id}}" id="id" />
            <label>Contenue</label></br>
            <input type="textare" name="contenue" id="contenue" value="{{$commentaire->contenue}}" class="form-control"></br>


            <div class="d-flex justify-content-around">
                <input type="submit" value="Metter à jours" class="btn btn-success"></br>
                <a class="btn btn-primary" href="{{ url('/forum') }}">Retourner</a>
            </div>

        </form>

    </div>
</div>



@stop
