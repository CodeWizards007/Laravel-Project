<h1>Event List </h1>
@php
$test=1;
@endphp;
{{$test}}

unless
@foreach($eventList as $ev)

<h2>{{$ev['id']}}</h2>


@endforeach

