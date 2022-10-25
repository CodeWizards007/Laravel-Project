@extends('forums.layout')
@section('content')


<!--post-->
<div class="card" style="margin:20px;">
    <h1 class="text-center" style="margin-top: 70px">{{$forum->titre}}</h1>
    <div class="card-body">
        <div class="card-body">

            <p class="card-text text-center" style="font-size: 1.2rem"> {{ $forum->contenue }}</p>
            <div class="d-flex justify-content-end align-items-end" style="margin-top: 100px">
                <p class="card-text">créé par : <span style="color: red">{{ $user->nom }}</span></p>
            </div>

        </div>
        </hr>
    </div>

    <div class="d-flex justify-content-around mt-5">
        <a href="{{ url('/forum/' . $forum->id . '/edit') }}" title="Edit Forum"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

        <form method="POST" action="{{ url('/forum' . '/' . $forum->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger" title="Delete forum" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> effacer</button>
        </form>
    </div>

</div>

<!--commentaires-->

<div class="d-flex justify-content-center" style="margin-top: 150px">
    <h5> Commentaires</h5>
</div>


    @foreach($comments as $comment)
        <div class="card mt-5" style="width: 50%; margin: auto">
            <div class="text-center" style="padding: 15px 0">

                <p>{{$comment->contenue}}</p>


                <div class="d-flex justify-content-around" style="margin-top: 50px">

                    <a href="{{ url('/commentaire/' . $comment->id . '/edit') }}" title="Edit Comment"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>

                    <form method="POST" action="{{ url('/commentaire' . '/' . $comment->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger" title="Delete forum" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> effacer</button>
                    </form>
                </div>


            </div>
        </div>
    @endforeach



<div class="d-flex justify-content-around mt-5" style="margin-bottom: 100px">

    <form method="GET" action="{{ url('/commentaire/create')}}">
        {!! csrf_field() !!}
        <input type="hidden" name="forum_id" value="{{$forum->id}}">
        <input type="hidden" name="user_id" value="{{$forum->user_id}}">
        <button  type="submit" class="btn btn-success"> Commenter</button>
    </form>

    <!--<a href="{{ url('/commentaire/create')}}"><button>Commenter</button></a>-->
    <a href="{{ url('/forum') }}"><button class="btn btn-primary">Retourner</button></a>
</div>

