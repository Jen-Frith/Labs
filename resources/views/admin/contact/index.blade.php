@extends('adminlte::page')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('js')
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection

@section('content')
    


@if (empty($contact))
        
<form action="{{route('contact.store')}}" method="POST">
@csrf
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>Modification du <span>contenu</span> de contact</h2>
        </div>

        <div class="form-row">
            <input type="text" class="input-text" id="input" placeholder="Veuillez insérer titre à la section contact" name="title" value="{{old('title')}}" />
            <label class="label-helper" for="input">Titre </label>
            @if ($errors->has('title'))
            <strong style="color: red">{{ $errors->first('title') }}</strong>
        @endif
          </div>


          <div class="form-row">
            <textarea type="text" class="input-text" id="input" name="description" value="" placeholder="Veuillez insérer description à la section contact" >{{old('description')}}</textarea>
            <label class="label-helper" for="input">Description</label>
            @if ($errors->has('description'))
            <strong style="color: red">{{ $errors->first('description') }}</strong>
        @endif
          </div>
   

          <div class="form-row">
            <input type="text" class="input-text" id="input" name="adress" placeholder="Veuillez insérer titre adresse à la section contact"   value="{{old('adress')}}"/>
            <label class="label-helper" for="input">Adresse</label>
            @if ($errors->has('adress'))
            <strong style="color: red">{{ $errors->first('adress') }}</strong>
        @endif
          </div>

          <div class="form-row">
            <textarea type="text" class="input-text" id="input" name="street"   placeholder="Veuillez insérer rue à la section contact" >{{old('street')}}</textarea>
            <label class="label-helper" for="input">Rue + CP</label>
            @if ($errors->has('street'))
            <strong style="color: red">{{ $errors->first('street') }}</strong>
        @endif
          </div>


          <div class="form-row">
            <input type="text" class="input-text" id="input" name="tel" placeholder="Veuillez insérer téléphone à la section contact"  value="{{old('tel')}}"/>
            <label class="label-helper" for="input">telephone</label>
            @if ($errors->has('tel'))
            <strong style="color: red">{{ $errors->first('tel') }}</strong>
        @endif
          </div>


          <div class="form-row">
            <input type="text" class="input-text" id="input" name="mail" placeholder="Veuillez insérer mail à la section contact"  value="{{old('mail')}}"/>
            <label class="label-helper" for="input">Mail</label>
            @if ($errors->has('mail'))
            <strong style="color: red">{{ $errors->first('mail') }}</strong>
        @endif
          </div>


          <div class="form-row">
            <input type="text" class="input-text" id="input" name="contentButton" placeholder="Veuillez insérer contenu button à la section contact"  value="{{old('contentButton')}}"/>
            <label class="label-helper" for="input">Contenu Button</label>
            @if ($errors->has('contentButton'))
            <strong style="color: red">{{ $errors->first('contentButton') }}</strong>
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
        
<form action="{{route('contact.update', $contact->id)}}" method="POST">
    @csrf
    <div class="services-section spad">
        <div class="container">
            <div class="section-title dark">
                <h2>Modification du <span>contenu</span> de contact</h2>
            </div>
    
            <div class="form-row">
                <input type="text" class="input-text" id="input" placeholder="Veuillez insérer titre à la section contact" name="title" value="{{$contact->titleSection}}" />
                <label class="label-helper" for="input">Titre </label>
                @if ($errors->has('title'))
                <strong style="color: red">{{ $errors->first('title') }}</strong>
            @endif
              </div>
    
    
              <div class="form-row">
                <textarea type="text" class="input-text" id="input" name="description" value="" placeholder="Veuillez insérer description à la section contact" >{{$contact->description}}</textarea>
                <label class="label-helper" for="input">Description</label>
                @if ($errors->has('description'))
                <strong style="color: red">{{ $errors->first('description') }}</strong>
            @endif
              </div>
       
    
              <div class="form-row">
                <input type="text" class="input-text" id="input" name="adress" placeholder="Veuillez insérer titre adresse à la section contact" value="{{$contact->adress}}"/>
                <label class="label-helper" for="input">Adresse</label>
                @if ($errors->has('adress'))
                <strong style="color: red">{{ $errors->first('adress') }}</strong>
            @endif
              </div>
    
              <div class="form-row">
                <textarea type="text" class="input-text" id="input" name="street"   placeholder="Veuillez insérer rue à la section contact" >{{$contact->street}}</textarea>
                <label class="label-helper" for="input">Rue + CP</label>
                @if ($errors->has('street'))
                <strong style="color: red">{{ $errors->first('street') }}</strong>
            @endif
              </div>
    
    
              <div class="form-row">
                <input type="text" class="input-text" id="input" name="tel" placeholder="Veuillez insérer téléphone à la section contact"  value="{{$contact->tel}}"/>
                <label class="label-helper" for="input">telephone</label>
                @if ($errors->has('tel'))
                <strong style="color: red">{{ $errors->first('tel') }}</strong>
            @endif
              </div>
    
    
              <div class="form-row">
                <input type="text" class="input-text" id="input" name="mail" placeholder="Veuillez insérer mail à la section contact" value="{{$contact->mail}}"/>
                <label class="label-helper" for="input">Mail</label>
                @if ($errors->has('mail'))
                <strong style="color: red">{{ $errors->first('mail') }}</strong>
            @endif
              </div>
    
    
              <div class="form-row">
                <input type="text" class="input-text" id="input" name="contentButton" placeholder="Veuillez insérer contenu button à la section contact" value="{{$contact->contentButton}}"/>
                <label class="label-helper" for="input">Contenu Button</label>
                @if ($errors->has('contentButton'))
                <strong style="color: red">{{ $errors->first('contentButton') }}</strong>
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