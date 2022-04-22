@extends('layout')


@section('mainContent')


<h1>LISTA TRENI</h1>


@foreach ($trains as $train )
{{$train->stazione_partenza}}<br>
{{$train->stazione_arrivo}}<br>
<hr>

    
@endforeach
    
@endsection
