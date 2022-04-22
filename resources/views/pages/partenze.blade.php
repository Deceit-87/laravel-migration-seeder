@extends('layout')


@section('mainContent')


<h1>TRENI in PARTENZA</h1>
<?php
date_default_timezone_set("Europe/Rome");
date("h:i:s");
$date = date("h:i:s");
?>

{{$date}}
@foreach ($trains as $train )
@if ($date < $train['ora_partenza'] )
    
<strong>Codice Treno</strong>{{' '.$train->codice_treno}}<br>
{{$train->stazione_partenza.' '}} <em><strong>Partenza:</strong></em> {{$train->ora_partenza}}<br>
{{$train->stazione_arrivo.' '}}<em><strong>Partenza:</strong></em> {{$train->ora_arrivo}}<br>
<hr>
@endif


    
@endforeach
    
@endsection