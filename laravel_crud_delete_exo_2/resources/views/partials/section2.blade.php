<!-- Button trigger modal -->
<button type="button" class="btn btn-primary text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Voitures moins cher que 4000
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Voitures moins cher que 4000</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">marque</th>
      <th scope="col">année</th>
      <th scope="col">couleur</th>
      <th scope="col">prix</th>
      <th scope="col">réduction</th>
      <th scope="col">delete</th>

    </tr>
  </thead>
  <tbody>
      @foreach ($cheaperCar as $item )
          
    @include('partials.displayCar')
      @endforeach

  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>