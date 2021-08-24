@extends('template.index')



@section('content')
    <form action="{{route('store')}}" method="post">
        @csrf
       genre : <input type="text" name="genre">
        age: <input type="number" name="age">
        <button type="submit">submit</button>
    
    </form>
@endsection