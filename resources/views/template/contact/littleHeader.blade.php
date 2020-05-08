<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            @if ($link==null)

            <h2>Contact</h2>
            <div class="page-links">
                <a href="{{route('welcome')}}">Home</a>
                <span>Contact</span>
            </div>

            @else
                   <h2>{{$link->linkTitle3}}</h2>
            <div class="page-links">
                <a href="{{route('welcome')}}">Home</a>
                <span>{{$link->linkTitle3}}</span>
            </div>
            @endif
         
        </div>
    </div>
</div>
<!-- Page header end -->