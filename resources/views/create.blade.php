<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Ajouter une Fabrique
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form method="post" action="{{ route('fabriques.store') }}">
    @csrf
  <div class="mb-3">
    <label for="exampleInputNom" class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom" id="exampleInputNom" aria-describedby="nomHelp">
    <div id="nomHelp" class="form-text">Veuillez saisir le nom ici svp.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputLocation" class="form-label">Location</label>
    <input type="text" class="form-control" name="location" id="exampleInputLocation" aria-describedby="locationHelp">
    <div id="locationHelp" class="form-text">Veuillez saisir la location ici svp.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputNombreCohorte" class="form-label">NombreCohorte</label>
    <input type="number" class="form-control" name="nombreCohorte" id="exampleInputNombreCohorte" aria-describedby="NombreCohorteHelp">
    <div id="NombreCohorteHelp" class="form-text">Veuillez saisir le NombreCohorte ici svp.</div>
  </div>
  <select class="form-select" name="ouverte" aria-label="Default select example">
  <option name="ouverte" selected>Ouverte ?</option>
  <option name="ouverte" value="1">Oui</option>
  <option name="ouverte" value="2">Non</option>
</select>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
  </div>
</div>
@endsection