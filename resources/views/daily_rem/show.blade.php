@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>Your Daily Reminder </h1>
@stop

@section('content')
<table class = "table table-bordered">
<tr> 
<th>Weekday</th>
<th>Your Event </th>
<th>Special Note </th>

</tr> 



@foreach ($dailyrem as $row )
<tr> 
<td>{{$row['weekday']}} </td> 
<td>{{$row['yourevent']}} </td> 
<td>{{$row['note']}} </td> 

</tr> 


@endforeach 



</table >







<div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>



@stop 



