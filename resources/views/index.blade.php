
<?php
      use App\Models\Content;
    ?>
@include('header.header')

@include('frontend.herosection')
<!---------------Hero Section-------------------->

<section class="hero-section22" id="hero">
    <span class="highlight">{!!Content::where('section', 'Welcome')->value('content')!!}</span>
    
    {!!Content::where('section', 'meet')->value('content')!!}
    
    <div class="trusted">
        <img src="{{ asset('images/rajat.webp') }}" alt="User 1">
        <img src="{{ asset('images/madhavi.webp') }}" alt="User 2">
        <img src="{{ asset('images/tanuj.png') }}" alt="User 3">
        <span>Trusted by: <strong>3k+ Students</strong></span>
    </div>
    <div class="cta-button"> {!!Content::where('section', 'joinnowbutton')->value('content')!!}<i class="fas fa-arrow-right"></i></div>
</section>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>

<!----------------About Section------------------>
<section class="about-section">
    <div class="about-container">
        <div class="wrapper">
            <input type="radio" name="slide" id="one" checked>
            <input type="radio" name="slide" id="two">
            <input type="radio" name="slide" id="three">
            <input type="radio" name="slide" id="four">
            <input type="radio" name="slide" id="five">
            <div class="img img-1">
                <img src="{{ asset('images/1st.jpg') }}" alt="">
            </div>
            <div class="img img-2">
                <img src="{{ asset('images/2nd.jpg') }}" alt="">
            </div>
            <div class="img img-3">
                <img src="{{ asset('images/3rd.jpg') }}" alt="">
            </div>
            <div class="img img-4">
                <img src="{{ asset('images/4th.jpg') }}" alt="">
            </div>
            <div class="img img-5">
                <img src="{{ asset('images/5ft.jpg') }}" alt="">
            </div>
            <div class="sliders">
                <label for="one" class="one"></label>
                <label for="two" class="two"></label>
                <label for="three" class="three"></label>
                <label for="four" class="four"></label>
                <label for="five" class="five"></label>
            </div>
        </div>
    </div>
    <div class="about-content">
    {!!Content::where('section', 'about')->value('content')!!}
        <a href="#contact" class="btnabout">Learn More</a>
    </div>
    </div>
</section>
<!-----------------services----------------------->


@include('frontend.servicessection')

<!------------------achivement---------------->
<section class="achievement-section">
    <div class="fun-facts">
        <button class="fun-facts-button">✨ Fun Facts</button>
    </div>
    <div class="content">
    {!!Content::where('section', 'Achievementitle')->value('content')!!}
    {!!Content::where('section', 'Achievementcontent')->value('content')!!}
    </div>
    <div class="stats">
        <div class="stat">
            <h3 class="counter" data-target="43000">43000</h3>
            <p>Active Customers</p>
        </div>
        <div class="stat">
            <h3 class="counter" data-target="205">205</h3>
            <p>Team Members</p>
        </div>
        <div class="stat">
            <h3 class="counter" data-target="205">205</h3>
            <p>Clients Satisfactory Reviews</p>
        </div>
        <div class="stat">
            <h3 class="counter" data-target="95">95</h3>
            <p>Success Rate</p>
        </div>
    </div>
</section>
<!-------whyus---------->
<section class="why-choose-us">
    <div class="image-container">
        <img src="{{ asset('images/ABoutussection.jpg') }}" alt="AI Illustration">
        <div class="testimonial">
            "This is due to their excellent service, competitive pricing, and support. It’s thoroughly refreshing to get
            such a personal touch."
        </div>
    </div>
    <div class="content">
    {!!Content::where('section', 'Empowering')->value('content')!!}
  
    {!!Content::where('section', 'Empoweringcontent')->value('content')!!}
    {!!Content::where('section', 'Empoweringli')->value('content')!!}
       
        <a href="#" class="btn">Learn All More →</a>
    </div>
</section>
<!------Testimonials------->
@include('testimonials.testimonials')
@include('frontend.team')
<!----footer------>
@include('header.footer')

</body>

</html>