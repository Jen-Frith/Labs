@extends('adminlte::page')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
    



<div class="container d-flex">
 <div class="section-title dark">
    <h2>Modification des <span>services</span> du welcome</h2>
</div>

</div>
<a href="{{route('services.create')}}" class='btn btn-primary justify-content-center'>Ajouter</a>

<table class="table container">
    <thead>
      <tr>
        <th scope="col">No</th>

        <th scope="col">Icone</th>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>

        <th scope="col">Settings</th>

      </tr>
    </thead>
    <tbody>
      @foreach($services as $service)
      <tr>
        <td>{{$service->id}}</td>

 <td><i class="{{$service->icon}}"></i></td>
 <td>{{$service->title}}</td>
 <td>{{$service->description}}</td>
      <td>
        <a href="{{route('services.edit' , $service->id)}}" class='btn btn-warning text-white'>Edit</a>
        <form action="{{route('services.destroy' , $service->id)}}" method="post">
          @csrf
          @method('delete')
          <button class='btn btn-danger my-3'>Delete</button>
        </form>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="d-flex justify-content-center" style="position: relative">{!! $services->links() !!}</div>
@endsection