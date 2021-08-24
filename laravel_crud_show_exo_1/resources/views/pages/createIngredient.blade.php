@extends('template.index')


@section('content')
<div class="container">
    <form action="{{route('store')}}" method="post">
    @csrf
        nom: <input type="text" name="nom">
    quantite: <input type="number" name="quantite">
    lien: <input type="text" name="lien">


    <button class="btn btn-info" type="submit">Submit</button>
    </form>
</div>
@endsection