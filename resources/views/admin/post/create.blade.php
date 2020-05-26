@extends('adminlte::page')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
    
<div class="container my-5">
    <div class="container d-flex justify-content-center">
        <div class="section-title dark">
           <h2>Création du <span>post</span> blog</h2>
       </div>
       
       </div>


    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
        <div class="d-flex justify-content-between">
    <div>
        <label for="" class="w-25" style="color: #2be6ab">Image</label>
        <input class="" type="file" name='img' id='img'>
    </div>
    @if ($errors->has('img'))
    <strong style="color: red">{{ $errors->first('img') }}</strong>

@endif


    <div class="mt-1">
        <label for="" class="w-25" style="color: #2be6ab">Tags</label><br>
<select id="example" name='tag'>
    <option value="{{null}}">Veuillez choisir un élément</option>
    <option value="Sport"> Sport </option>
    <option value="Design"> Design </option>
    <option value="Histoire"> Histoire </option>
    <option value="Texte"> Texte </option>
    <option value="Web"> Web </option>

</select></div>

</div>


<div class="form-row mt-5">
    <input type="text" value="{{old ('title')}}" class="input-text" id="input" name="title" placeholder="Veuillez insérer votre titre svp..." />
    <label class="label-helper" for="input">Titre article</label>
   @if ($errors->has('title'))
  <strong style="color: red">{{ $errors->first('title') }}</strong>

@endif </div>


<div class="form-row">
    <input type="select"  value="{{old('function')}}" class="input-text" id="input" name="function" placeholder="Veuillez insérer votre fonction svp..." />
    <label class="label-helper" for="input">Fonction</label>
   @if ($errors->has('function'))
  <strong style="color: red">{{ $errors->first('function') }}</strong>

@endif </div>

<div class="form-row ">
    <textarea type="text"  value="{{old('title')}}" class="input-text" id="input" name="message" placeholder="Veuillez insérer votre message svp..."></textarea>
    <label class="label-helper" for="input">Titre de la section</label>
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