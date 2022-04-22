@extends('layout')


@section('mainContent')


<h1>LISTA TRENI</h1>


@foreach ($trains as $train )
<strong>Codice Treno</strong>{{' '.$train->codice_treno}}<br>
{{$train->stazione_partenza.' '}} <em><strong>Partenza:</strong></em> {{$train->ora_partenza}}<br>
{{$train->stazione_arrivo.' '}}<em><strong>Partenza:</strong></em> {{$train->ora_arrivo}}<br>
<hr>

    
@endforeach
    
@endsection
