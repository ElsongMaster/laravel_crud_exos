@extends('template.index')



@section('content')
    <form action="{{route('update',$animal->id)}}" method="post">
        @csrf
        @method('PUT')
       genre : <input value={{$animale->genre}} type="text" name="genre">
        age: <input value={{$animale->age}} type="number" name="age">
        <button class='btn btn-warning' type="submit">submit</button>
    
    </form>  
@endsection