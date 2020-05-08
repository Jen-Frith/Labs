@extends('adminlte::page')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
    


@if (empty($link))
        
<form action="{{route('link.store')}}" method="POST">
@csrf
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>Modification des <span>liens</span> su site web</h2>
        </div>

        <div class="form-row">
            <input type="text" class="input-text" id="input" name="linkTitle1" placeholder="Premier lien" />
            <label class="label-helper" for="input">Lien 1</label>
          </div>
          <div class="form-row">
            <input type="text" class="input-text" id="input" name="linkTitle2" placeholder="Deuxième lien" />
            <label class="label-helper" for="input">Lien 2</label>
          </div>
          <div class="form-row">
            <input type="text" class="input-text" id="input" name="linkTitle3" placeholder="Troisième lien" />
            <label class="label-helper" for="input">Lien 3</label>
          </div>
          <div class="form-row">
            <input type="text" class="input-text" id="input" name="linkTitle4" placeholder="Quatrième lien" />
            <label class="label-helper" for="input">Lien 4</label>
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
        

<form action="{{route('link.update')}}" method="post">
    @csrf
   
    <div class="services-section spad">
        <div class="container">
            <div class="section-title dark">
                <h2>Modification des <span>liens</span> su site web</h2>
            </div>
    
            <div class="form-row">
                <input type="text" class="input-text" id="input" name="linkTitle1" value="{{$link->linkTitle1}}" placeholder="Premier lien" />
                <label class="label-helper" for="input">Lien 1</label>
              </div>
              <div class="form-row">
                <input type="text" class="input-text" id="input" name="linkTitle2" value="{{$link->linkTitle2}}" placeholder="Deuxième lien" />
                <label class="label-helper" for="input">Lien 2</label>
              </div>
              <div class="form-row">
                <input type="text" class="input-text" id="input" name="linkTitle3" value="{{$link->linkTitle3}}" placeholder="Troisième lien" />
                <label class="label-helper" for="input">Lien 3</label>
              </div>
              <div class="form-row">
                <input type="text" class="input-text" id="input" name="linkTitle4" value="{{$link->linkTitle4}}" placeholder="Quatrième lien" />
                <label class="label-helper" for="input">Lien 4</label>
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