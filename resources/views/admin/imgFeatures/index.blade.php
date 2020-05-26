@extends('adminlte::page')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('js')
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection


@section('content')


@if (empty($feature))
    
<form action="{{route('imgFeatures.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="services-section spad">
        <div class="container">
            <div class="section-title dark">
                <h2>Modification de l' <span>image</span> du header</h2>
            </div>

       <input type="file" name="img" id="img" class="form-control-file">
       @if ($errors->has('img'))
       <strong style="color: red">{{ $errors->first('img') }}</strong>
   
   @endif

            <div class="container d-flex justify-content-center">
    
                <button type="submit" class="site-btn  mt-5">
                   Valider création
                </button>
            </div>

        </div>

    </div>
</form>


@else
    
<form action="{{route('imgFeatures.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="services-section spad">
        <div class="container">
            <div class="section-title dark">
                <h2>Modification de l' <span>image</span> du header</h2>
            </div>

            <input type="file" name="img" id="img" class="form-control-file">
            @if ($errors->has('img'))
            <strong style="color: red">{{ $errors->first('img') }}</strong>
        
        @endif    


            <div class="container d-flex justify-content-center">
    
                <button type="submit" class="site-btn  mt-5">
                   Valider modification
                </button>
            </div>

        </div>

    </div>
</form>
@endif



@endsection