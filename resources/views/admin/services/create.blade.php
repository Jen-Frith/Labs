@extends('adminlte::page')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

{{-- @section('js')
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection --}}


@section('content')
    
<div class="container my-5">
    <div class="container d-flex justify-content-center">
        <div class="section-title dark">
           <h2>Création du <span>service</span> welcome</h2>
       </div>
       
       </div>


    <form action="{{route('services.store')}}" method="post">
        @csrf 
    

<div class="form-row mt-5">
    <input type="text" value="{{old ('title')}}" class="input-text" name="title" title="title" placeholder="Veuillez insérer votre titre svp..." />
    <label class="label-helper" for="input">Titre</label>
   @if ($errors->has('title'))
  <strong style="color: red">{{ $errors->first('title') }}</strong>

@endif </div>

<div class="form-row">
    <textarea type="text" class="input-text" id="description" name="description" placeholder="Veuillez insérer votre description svp..."></textarea>
    <label class="label-helper" for="input">Description</label>
   @if ($errors->has('description'))
  <strong style="color: red">{{ $errors->first('description') }}</strong>

@endif </div>




<!-- / Index is messed up so put your top selection last -->
<!-- / then use normal order -->

<label for="">Choix de l'icone</label><br>
<input type="radio" value= "fas fa-table-tennis" name="icon"><i class="pr-4 fas fa-table-tennis"></i>
<input type="radio" value= "fas fa-baseball-ball" name="icon"><i class="pr-4 fas fa-baseball-ball"></i>
<input type="radio" value= "fas fa-basketball-ball" name="icon"><i class="pr-4 fas fa-basketball-ball"></i>
<input type="radio" value= "fas fa-bowling-ball" name="icon"><i class="pr-4 fas fa-bowling-ball"></i>
  

<input type="radio" value= "fas fa-plane" name="icon"><i class="pr-4 fas fa-plane"></i>
<input type="radio" value= "fas fa-boat" name="icon"><i class="pr-4 fas fa-truck"></i>
<input type="radio" value= "fas fa-auto" name="icon"><i class="pr-4 fas fa-car"></i>
<input type="radio" value= "fas fa-taxi" name="icon"><i class="pr-4 fas fa-taxi"></i>
  
<input type="radio" value= "far fa-grin-tears" name="icon"><<i class="far fa-grin-tears"></i>
<input type="radio" value= "fas fa-coffee" name="icon"><i class="pr-4 fas fa-coffee"></i>
<input type="radio" value= "fas fa-star" name="icon"><i class="pr-4 fas fa-star"></i>
<input type="radio" value= "fas fa-lemon" name="icon"><i class="pr-4 fas fa-lemon"></i>














<div class="container d-flex justify-content-center">
    
    <button type="submit" class="site-btn  mt-5">
       Valider création
    </button>
</div>
    </form>

</div>

@endsection