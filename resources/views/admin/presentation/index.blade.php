@extends('adminlte::page')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('js')
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection

@section('content')
    


@if (empty($presentation))
        
<form action="{{route('presentation.store')}}" method="POST">
@csrf
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>Modification du <span>contenu</span> de présentation</h2>
        </div>

        <div class="form-row">
            <input type="text" class="input-text" id="input" name="title" value="{{old('title')}}" />
            <label class="label-helper" for="input">Titre </label>
            @if ($errors->has('title'))
            <strong style="color: red">{{ $errors->first('title') }}</strong>
        @endif
          </div>


          <div class="form-row">
            <textarea type="text" class="input-text" id="input" name="paragraph1" value="{{old('paragraph1')}}"></textarea>
            <label class="label-helper" for="input">Paragraphe 1</label>
            @if ($errors->has('paragraph1'))
            <strong style="color: red">{{ $errors->first('paragraph1') }}</strong>
        @endif
          </div>


          <div class="form-row">
            <textarea type="text" class="input-text" id="input" name="paragraph2" value="{{old('paragraph2')}}" ></textarea>
            <label class="label-helper" for="input">Paragraphe 2</label>
            @if ($errors->has('paragraph2'))
            <strong style="color: red">{{ $errors->first('paragraph2') }}</strong>
        @endif
          </div>

          <div class="form-row">
            <input type="text" class="input-text" id="input" name="linkText"  value="{{old('linkText')}}" />
            <label class="label-helper" for="input">Texte boutton</label>
            @if ($errors->has('linkText'))
            <strong style="color: red">{{ $errors->first('linkText') }}</strong>
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
        
      
<form action="{{route('presentation.update')}}" method="POST">
    @csrf
    <div class="services-section spad">
        <div class="container">
            <div class="section-title dark">
                <h2>Modification du <span>contenu</span> de présentation</h2>
            </div>
    
            <div class="form-row">
                <input type="text" class="input-text" id="input1" name="title" value="{{$presentation->title}}" />
                <label class="label-helper" for="input">Titre </label>
                {{-- <button onclick="addSpan()" id='addSpan' class="bg-span">add</button> --}}
                @if ($errors->has('title'))
                <strong style="color: red">{{ $errors->first('title') }}</strong>
            @endif
              </div>
    
    
              <div class="form-row">
                <textarea type="text" class="input-text" id="input2" name="paragraph1" value="">{{$presentation->paragraph1}}</textarea>
                <label class="label-helper" for="input">Paragraphe 1</label>
                @if ($errors->has('paragraph1'))
                <strong style="color: red">{{ $errors->first('paragraph1') }}</strong>
            @endif
              </div>
    
    
              <div class="form-row">
                <textarea type="text" class="input-text" id="input3" name="paragraph2" value="" >{{$presentation->paragraph2}}</textarea>
                <label class="label-helper" for="input">Paragraphe 2</label>
                @if ($errors->has('paragraph2'))
                <strong style="color: red">{{ $errors->first('paragraph2') }}</strong>
            @endif
              </div>
    
              <div class="form-row">
                <input type="text" class="input-text" id="input4" name="linkText"  value="{{$presentation->linkText}}" />
                <label class="label-helper" for="input">Texte boutton</label>
                @if ($errors->has('linkText'))
                <strong style="color: red">{{ $errors->first('linkText') }}</strong>
            @endif
              </div>
              
    
              <div class="form-row">
                <input type="text" class="input-text" id="input5" name="linkVideo"  value="{{$presentation->linkVideo}}"/>
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