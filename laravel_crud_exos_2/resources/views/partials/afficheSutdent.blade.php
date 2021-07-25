  
      @if ($std->age>24)
                <tr style="background-color:purple; color:white">
        <th scope="row">{{$std->id}}</th>
        <td>{{$std->nom}}</td>
        <td>{{$std->genre}}</td>
        <td>{{$std->email}}</td>
        <td>{{$std->age}}</td>
      </tr>    
          @elseif ($std->age ===22 || $std->age ===23 )
       <tr style="background-color:blue; color:white">
        <th scope="row">{{$std->id}}</th>
        <td>{{$std->nom}}</td>
        <td>{{$std->genre}}</td>
        <td>{{$std->email}}</td>
        <td>{{$std->age}}</td>
      </tr>
      
      @else
       <tr >
        <th scope="row">{{$std->id}}</th>
        <td>{{$std->nom}}</td>
        <td>{{$std->genre}}</td>
        <td>{{$std->email}}</td>
        <td>{{$std->age}}</td>
      </tr>
          @endif