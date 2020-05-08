<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="img/big-logo.png" alt="">
            <p>Get your freebie template now!</p>
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">

@if (empty($carousels))
    
        <div class="item  hero-item" data-bg="img/01.jpg"></div>
        <div class="item  hero-item" data-bg="img/02.jpg"></div>
@else
    @foreach ($carousels as $carousel)
        

<div class="item  hero-item" data-bg="{{asset('storage/'.$carousel->imgCarousel)}}"></div>
    @endforeach

@endif

    
    
    
    </div>
</div>
<!-- Intro Section -->