@extends('adminlte::page')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
    
<div class="container my-5">
    <div class="container d-flex justify-content-center">
        <div class="section-title dark">
           <h2>Modification de l' <span>image</span> du header</h2>
       </div>
       
       </div>


    <form action="{{route('carousel.update', $carousel->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('put')
    <div>
        <label for="" class="w-25">Image</label>
        <input type="file" name='imgCarousel' id='img'>
    </div>
    @if ($errors->has('imgCarousel'))
    <strong style="color: red">{{ $errors->first('imgCarousel') }}</strong>

@endif
<div class="container d-flex justify-content-center">
    
    <button type="submit" class="site-btn  mt-5">
       Valider modification
    </button>
</div>
    </form>

</div>

@endsection