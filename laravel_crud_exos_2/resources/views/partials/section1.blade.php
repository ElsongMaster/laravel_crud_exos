
<section>

    <h2>Affichage de tout les étudiants</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">genre</th>
      <th scope="col">email</th>
      <th scope="col">age</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($datas as $std)
            

        
        @include('partials.afficheSutdent')
        

    

      @endforeach

  </tbody>
</table>
</section>