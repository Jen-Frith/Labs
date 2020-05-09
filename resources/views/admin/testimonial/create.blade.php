@extends('adminlte::page')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
    
<div class="container my-5">
    <div class="container d-flex justify-content-center">
        <div class="section-title dark">
           <h2>Création du <span>testimonial</span> welcome</h2>
       </div>
       
       </div>


    <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
    <div>
        <label for="" class="w-25" style="color: #2be6ab">Image</label>
        <input class="" type="file" name='imgtestimonial' id='img'>
    </div>
    @if ($errors->has('imgtestimonial'))
    <strong style="color: red">{{ $errors->first('imgtestimonial') }}</strong>

@endif

<div class="form-row mt-5">
    <input type="text" value="{{old ('name')}}" class="input-text" id="input" name="name" placeholder="Veuillez insérer votre nom svp..." />
    <label class="label-helper" for="input">Nom</label>
   @if ($errors->has('name'))
  <strong style="color: red">{{ $errors->first('name') }}</strong>

@endif </div>

<div class="form-row">
    <input type="text"  value="{{old('function')}}" class="input-text" id="input" name="function" placeholder="Veuillez insérer votre fonction svp..." />
    <label class="label-helper" for="input">Fonction</label>
   @if ($errors->has('function'))
  <strong style="color: red">{{ $errors->first('function') }}</strong>

@endif </div>

<div class="form-row">
    <textarea type="text" class="input-text" id="input" name="message" placeholder="Veuillez insérer votre message svp..."></textarea>
    <label class="label-helper" for="input">Message</label>
   @if ($errors->has('message'))
  <strong style="color: red">{{ $errors->first('message') }}</strong>

@endif </div>



<div class="container d-flex justify-content-center">
    
    <button type="submit" class="site-btn  mt-5">
       Valider création
    </button>
</div>
    </form>

</div>

@endsection