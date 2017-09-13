@extends('base')
@section('content')
    @if($first =='Gerry')
        <h1>contact {{ $first }} {{ $last }}</h1>
    @else
        <h1> no contact  </h1>
    @endif

    @if(count($people)>0)
    <h3>people I admire</h3>
    <ul>
        @foreach($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>
    @else
        <h3>no body I admire</h3>
    @endif
@stop

@section('footer')
    <script>
        alert("告警！")
    </script>
@stop