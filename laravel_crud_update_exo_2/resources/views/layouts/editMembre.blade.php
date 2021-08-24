@extends('template.index')




@section('content')   
   <h1>Formulaire d'édition</h1>
   <form action="{{route('update',$membre->id)}}" method="post">
    
    @csrf
    @method('PUT')

    nom: <input value= "{{$membre->nom}}"type="text" name="nom">
    age: <input value= "{{$membre->age}}" type="text" name="age">
    <select name="genre" id="">
        @if ($membre->genre == "homme")

        @else
        <option value="homme" >homme</option>
        <option value="femme" selected>femme</option>
        @endif

    </select>
    </form>

@endsection