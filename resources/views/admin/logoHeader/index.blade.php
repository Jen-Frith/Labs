@extends('adminlte::page')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('js')
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection


@section('content')


@if (empty($logoHeader))
    
<form action="{{route('logoHeader.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="services-section spad">
        <div class="container">
            <div class="section-title dark">
                <h2>Modification de l' <span>image</span> du header</h2>
            </div>

       <input type="file" name="logoHeader" id="logoHeader" class="form-control-file">
       @if ($errors->has('logoHeader'))
       <strong style="color: red">{{ $errors->first('logoHeader') }}</strong>
   
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
    
<form action="{{route('logoHeader.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="services-section spad">
        <div class="container">
            <div class="section-title dark">
                <h2>Modification de l' <span>image</span> du header</h2>
            </div>

            <input type="file" name="logoHeader" id="logoHeader" class="form-control-file">
            @if ($errors->has('logoHeader'))
            <strong style="color: red">{{ $errors->first('logoHeader') }}</strong>
        
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