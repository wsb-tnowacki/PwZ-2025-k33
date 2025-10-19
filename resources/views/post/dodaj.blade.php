@extends('layout.template')
@section('tytul', 'Dodawanie posta')
@section('podstrona', 'Formularz dodający post')
@section('tresc')
<form action="{{route('post.store')}}" method="post">

</form>
@endsection