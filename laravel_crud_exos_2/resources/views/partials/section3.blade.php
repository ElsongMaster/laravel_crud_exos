
<section>

    <h2>Affichage de tout les étudiants masculin</h2>
<table class="table">
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
            
        @if ($std->genre ==="M")
        
        @include('partials.afficheSutdent')
        
        @endif
    

      @endforeach

 </tbody>
</section>