      <tr>
          {{-- {{$item->reduction!=null?`$item->reduction %`:""}} --}}
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->marque}}</td>
        <td>{{$item->annee}}</td>
        <td>{{$item->couleur}}</td>
        <td>{{$item->reduction!=""?($item->prix-($item->prix*($item->reduction/100))):$item->prix}}</td>
        <td>{{$item->reduction}}</td>
        <td><form action="{{route('delete',$item->id)}}" method="post">
            @csrf
        <button type="submit" class="bg-danger text-light rounded" >Delete</button>    
        </form></td>

        
      </tr>

      