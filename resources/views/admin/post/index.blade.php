@extends('adminlte::page')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
    



<div class="container d-flex">
  <div class="section-title dark">
    <h2>Modification des <span>posts</span> du blog</h2>
  </div>
  
</div>
<div class="d-flex justify-content-start">
  <a href="{{route('post.create')}}" class='btn btn-primary '>Ajouter</a>
  
</div>
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
<table class="table container">


  @foreach ($posts as $post)
      

  <div class="blog-card ">
    <div class="meta">
      <div class="photo" style="background-image: url({{asset('storage/'.$post->img)}})"></div>
      <ul class="details">
        <li class="author"><a href="#"><i class="fas fa-user pr-2"></i>{{ Auth::user()->name }}, {{$post->function}}</a></li>
        <li class="date"><i class="far fa-calendar-alt pr-2"></i>{{$post->created_at}}</li>
        <li class="tags">
          <ul><i class="fas fa-tag"></i>
            <li><a href="#">{{$post->tag}}</a></li>
            <li><a href="#">Code</a></li>
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="descriptiona">
      <h1>{{$post->title}}</h1>
      <h2>Opening a door to the future</h2>
      <p>{{$post->message}}</p>
      <div class="d-flex justify-content-between">
       <div>   <p class="read-more">
       <a href="#">Read More</a></div> 
         <div> <a href="{{route('post.edit' , $post->id)}}" class='btn btn-warning text-white '>Edit</a>
          <form action="{{route('post.destroy' , $post->id)}}" method="post">
            @csrf
            @method('delete')
            <button class='btn btn-danger my-3 '>Delete</button>
          </form>
        </div>
        </div>
      </p>
    </div>
  </div>  @endforeach
 
  
</table>
@endsection