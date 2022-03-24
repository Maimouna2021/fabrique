@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier la voiture
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

      <form method="post" action="{{ route('fabriques.update', $fabrique->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nom">nom :</label>
              <input type="text" class="form-control" name="nom" value="{{ $fabrique->nom }}"/>
          </div>
          <label for="location">location :</label>
              <input type="text" class="form-control" name="location" value="{{ $fabrique->location }}"/>
          </div>
          <label for="nombreCohorte">nombreCohorte :</label>
              <input type="text" class="form-control" name="nombreCohorte" value="{{ $fabrique->nombreCohorte }}"/>
          </div>
          <label for="overte">overte :</label>
              <input type="text" class="form-control" name="overte" value="{{ $fabrique->overte }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form> 
  </div>
</div>
@endsection