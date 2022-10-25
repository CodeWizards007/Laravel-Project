@extends('forums.layout')
@section('content')


<!--post-->
<div class="card" style="margin:20px;">
    <h1 class="text-center">{{$forum->titre}}</h1>
    <div class="card-body">
        <div class="card-body">

            <p class="card-text"> {{ $forum->titre }}</p>
            <p class="card-text">créé par : {{ $user->nom }}</p>
        </div>
        </hr>
    </div>

    <div class="d-flex justify-content-around mt-5">
        <a href="{{ url('/forum/' . $forum->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

        <form method="POST" action="{{ url('/forum' . '/' . $forum->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger" title="Delete forum" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> effacer</button>
        </form>
    </div>

</div>

<!--commentaires-->

<div class="card mt-5" style="width: 80%; margin: auto">
    @foreach($comments as $comment)
        <div>
            <h3> Commentaire {{ $loop->iteration }}</h3>
            <p>{{$comment->contenue}}</p>
        </div>
    @endforeach
</div>


<div class="d-flex justify-content-around mt-5">

    <form method="GET" action="{{ url('/commentaire/create')}}">
        {!! csrf_field() !!}
        <input type="hidden" name="forum_id" value="{{$forum->id}}">
        <input type="hidden" name="user_id" value="{{$forum->user_id}}">
        <button  type="submit" class="btn btn-danger"> Commenter</button>
    </form>

    <!--<a href="{{ url('/commentaire/create')}}"><button>Commenter</button></a>-->
    <a href="{{ url('/forum') }}"><button class="btn btn-primary">Retourner</button></a>
</div>

