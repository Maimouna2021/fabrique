<!-- index.blade.php -->

@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>nom</td>
          <td>location</td>
          <td>nombreCohorte</td>
          <td>ouverte</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($fabriques as $fabrique)
        <tr>
            <td>{{$fabrique->id}}</td>
            <td>{{$fabrique->nom}}</td>
            <td>{{$fabrique->location}}</td>
            <td>{{$fabrique->nombreCohorte}}</td>
            <td>{{$fabrique->ouverte}}</td>
            <td><a href="{{ route('fabriques.edit', $fabrique->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('fabriques.destroy', $fabrique->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection