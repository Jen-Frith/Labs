@extends('adminlte::page')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
    



<div class="container d-flex">
  <div class="section-title dark">
    <h2>Modification des <span>teams</span> du welcome</h2>
  </div>
  
</div>
<div class="d-flex justify-content-start">
  <a href="{{route('team.create')}}" class='btn btn-primary '>Ajouter</a>
  
</div>
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
<table class="table container">
    <thead>
      <tr>
        <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Function</th>

        <th scope="col">Settings</th>

      </tr>
    </thead>
    <tbody>
      @foreach($teams as $team)
      <tr>
      <td><img src="{{asset('storage/'.$team->img)}}" alt="" style="width: 100px"></td>
 <td>{{$team->name}}</td>
 <td>{{$team->function}}</td>
      <td>
        <a href="{{route('team.edit' , $team->id)}}" class='btn btn-warning text-white'>Edit</a>
        <form action="{{route('team.destroy' , $team->id)}}" method="post">
          @csrf
          @method('delete')
          <button class='btn btn-danger my-3'>Delete</button>
        </form>
      </td>
      </tr>
      @endforeach
    </tbody>
</table>
@endsection