@extends('front.layout.index')

@include('front.layout.flash')
@section('content')

<h1>
    Ajouter un auteur
</h1>
<form action="/home/create" method="POST">
    @csrf
    <input type="text" name="nom" placeholder="nom" value="{{old('nom')}}">
    <input type="text" name="avis" placeholder="avis" value="{{old('avis')}}">
    <input type="number" name="note" placeholder="note" value="{{old('note')}}">
    <button type="submit">upload</button>
</form>


<h1>Les auteurs</h1>
<div class="showAuteur">
    @foreach ($auteurs as $auteur)
        {{$auteur->nom}} - {{$auteur->avis}} - {{$auteur->note}}
    @endforeach
</div>

@endsection
