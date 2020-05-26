@extends('adminlte::page')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('js')
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection

@section('content')
    


@if (empty($ready))
        
<form action="{{route('ready.store')}}" method="POST">
@csrf
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>Modification du <span>contenu</span> de ready</h2>
        </div>

        <div class="form-row">
            <input type="text" class="input-text" id="input" name="title" value="{{old('title')}}" />
            <label class="label-helper" for="input">Titre </label>
            @if ($errors->has('title'))
            <strong style="color: red">{{ $errors->first('title') }}</strong>
        @endif
          </div>


          <div class="form-row">
            <textarea type="text" class="input-text" id="input" name="sousTitre" value="{{old('paragraph1')}}"></textarea>
            <label class="label-helper" for="input">Sous-Titre</label>
            @if ($errors->has('sousTitre'))
            <strong style="color: red">{{ $errors->first('sousTitre') }}</strong>
        @endif
          </div>

          

          <div class="form-row">
            <input type="text" class="input-text" id="input" name="linkVideo"  value="{{old('linkVideo')}}"/>
            <label class="label-helper" for="input">Lien vidéo</label>
            @if ($errors->has('linkVideo'))
            <strong style="color: red">{{ $errors->first('linkVideo') }}</strong>
        @endif
          </div>

          
    <div class="container d-flex justify-content-center">

                    <button type="submit" class="site-btn  mt-5">
                       Valider création
                    </button>
                </div>
            </div>
            
        </div>
    </form>




@else
        
       
<form action="{{route('ready.update', $ready->id)}}" method="POST">
  @csrf

  <div class="services-section spad">
      <div class="container">
          <div class="section-title dark">
              <h2>Modification du <span>contenu</span> de ready</h2>
          </div>
  
          <div class="form-row">
              <input type="text" class="input-text" id="input" name="title" value="{{$ready->titre}}" />
              <label class="label-helper" for="input">Titre </label>
              @if ($errors->has('title'))
              <strong style="color: red">{{ $errors->first('title') }}</strong>
          @endif
            </div>
  
  
            <div class="form-row">
              <textarea type="text" class="input-text" id="input" name="sousTitre" value="{{old('sousTitre')}}">{{$ready->sousTitre}}</textarea>
              <label class="label-helper" for="input">Sous-Titre</label>
              @if ($errors->has('sousTitre'))
              <strong style="color: red">{{ $errors->first('sousTitre') }}</strong>
          @endif
            </div>
  
            
  
            <div class="form-row">
              <input type="text" class="input-text" id="input" name="linkVideo"  value="{{$ready->linkVideo}}"/>
              <label class="label-helper" for="input">Lien vidéo</label>
              @if ($errors->has('linkVideo'))
              <strong style="color: red">{{ $errors->first('linkVideo') }}</strong>
          @endif
            </div>
  
            
      <div class="container d-flex justify-content-center">
  
                      <button type="submit" class="site-btn  mt-5">
                         Valider modification
                      </button>
                  </div>
              </div>
              
          </div>
      </form>
  
  
  
    


    @endif

	<!-- About section end -->
@endsection