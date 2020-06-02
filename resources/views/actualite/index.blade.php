@extends('layout')
<style>   
           .av2{
                 background-color:red;
                 height:50px;
                 }
         </style>
@section('content')
<h1>ACTUALITE</h1>
<ul>
@foreach($une_actu as $une_actus)
    <li>  {{$une_actus}}</li>
@endforeach
</ul>
@endsection
@extends('footer')