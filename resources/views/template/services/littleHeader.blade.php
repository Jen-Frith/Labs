<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
@if ($link==null)
<h2>Services</h2>
<div class="page-links">
    <a href="{{route('welcome')}}">Home</a>
    <span>Services</span>
</div>
@else
  <h2>{{$link->linkTitle1}}</h2>
            <div class="page-links">
                <a href="{{route('welcome')}}">Home</a>
                <span>{{$link->linkTitle1}}</span>
            </div>  
@endif

            
        </div>
    </div>
</div>
<!-- Page header end-->