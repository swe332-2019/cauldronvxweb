@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>Estimate How Much calories you need </h1>
@stop

@section('content')
<table class = "table table-bordered">
<tr> 
<th>Your Sleephours</th>
<th>Your gender </th>
<th>Your Active Hours </th>
<th>Your Waterliter </th>
<th>Your Exercisehours</th>
<th>Medicine</th>
</tr> 



@foreach ($calorieestimation as $row )
<tr> 
<td>{{$row['sleephours']}} </td> 
<td>{{$row['gender']}} </td> 
<td>{{$row['activeworkhours']}} </td> 
<td>{{$row['waterliter']}} </td> 
<td>{{$row['exercisehours']}} </td> 
<td>{{$row['medicine']}} </td> 
</tr> 


@endforeach 



</table >





<div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>





@stop 