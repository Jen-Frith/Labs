@extends('adminlte::page')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
    



<div class="container d-flex">
 <div class="section-title dark">
    <h2>Modification des' <span>testimonials</span> du welcome</h2>
</div>

</div>
<a href="{{route('testimonial.create')}}" class='btn btn-primary justify-content-center'>Ajouter</a>

<table class="table container">
    <thead>
      <tr>
        <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Function</th>
      <th scope="col">Message</th>

        <th scope="col">Settings</th>

      </tr>
    </thead>
    <tbody>
      @foreach($testimonials as $testimonial)
      <tr>
      <td><img src="{{asset('storage/'.$testimonial->img)}}" alt="" style="width: 100px"></td>
 <td>{{$testimonial->name}}</td>
 <td>{{$testimonial->function}}</td>
 <td>{{$testimonial->message}}</td>
      <td>
        <a href="{{route('testimonial.edit' , $testimonial->id)}}" class='btn btn-warning text-white'>Edit</a>
        <form action="{{route('testimonial.destroy' , $testimonial->id)}}" method="post">
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