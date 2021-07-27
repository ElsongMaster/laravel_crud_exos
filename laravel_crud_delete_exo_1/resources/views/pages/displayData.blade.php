<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">age</th>
      <th scope="col">genre</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
      @foreach ( $datas as $item )
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->nom}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->genre}}</td>
        <td><form action="{{route('delete',$item->id)}}" method="post">
            @csrf
        <button type="submit" class="bg-danger text-light rounded" >Delete</button>    
        </form></td>
      </tr>
    
    @endforeach

</table>