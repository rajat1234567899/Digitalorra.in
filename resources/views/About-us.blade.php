@include('header.header')
<!----------mainabout-------->
@include('frontend.aboutherosection')


<!-- second about -->
<div class="contentsbout">
<?php
use App\Models\Aboutuscontents;
?>
        <div class="highlight-text-z77">{!! aboutuscontents::where('section', 'Provide')->value('content') !!}</div>
        {!! aboutuscontents::where('section', 'Providecontent')->value('content') !!}
</div>
<!-- third about -->

<div class="unique-section-x92">
    <div class="distinct-heading-a17">{!! aboutuscontents::where('section', 'Guiding')->value('content') !!}</div>
            <div class="rare-image-container-b64">
    <div class="exclusive-image-box-q81" style="animation-delay: 0.5s;">
        <img src="{{ asset('images/1st.jpg') }}" alt="" style="width: 100%; height: auto;">
    </div>
    <div class="exclusive-image-box-q81" style="animation-delay: 1s;">
        <img src="{{ asset('images/2nd.jpg') }}" alt="" style="width: 100%; height: auto;">
    </div>
    <div class="exclusive-image-box-q81" style="animation-delay: 1.5s;">
        <img src="{{ asset('images/3rd.jpg') }}" alt="" style="width: 100%; height: auto;">
    </div>
    <div class="exclusive-image-box-q81" style="animation-delay: 2s;">
        <img src="{{ asset('images/4th.jpg') }}" alt="" style="width: 100%; height: auto;">
    </div>
</div>

    <div class="custom-content-container-m56">
        <div class="rare-content-box-y35">
            <h3>Our Mission</h3><br>
            <p>At Digitalorra, our mission is to empower individuals with cutting-edge IT skills that
                drive innovation and success in the digital world. We strive to create a dynamic and inclusive learning
                environment
                where students can gain practical experience, industry knowledge, and career-ready
                expertise in Web Development, UI/UX Design, SEO, Digital Marketing, App Development, and E-commerce
                Solutions.</p>
        </div>
        <div class="rare-content-box-y35">
            <h3>Our Vision</h3><br>
            <p>At Digitalorra, we envision a future where technology education empowers individuals to
                innovate, lead, and excel in the digital world. Our goal is to create a dynamic learning environment
                that
                fosters creativity, practical skills, and industry readiness,
                bridging the gap between education and real-world challenges for a successful tech-driven future. 🚀</p>
        </div>
    </div>
</div>
@include('Sections.counter')
@include('testimonials.testimonials')
@include('frontend.team')

@include('header.footer')