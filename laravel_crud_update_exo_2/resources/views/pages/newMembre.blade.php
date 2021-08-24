@extends('template.index')


@section('content')
    <h1>Formulaire de création</h1>
    <form action="{{route('store')}}" method="post">
    
    @csrf

    nom: <input type="text" name="nom">
    age: <input type="text" name="age">
    <select name="genre" id="">
        <option value="homme">homme</option>
        <option value="femme">femme</option>
    </select>
    </form>
@endsection