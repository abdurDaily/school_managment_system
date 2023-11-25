@extends('FrontEnd.secondaryLayout.navFoot')
@section('missingFitch')


<div class="slider-area mb-5">
<div class="slider-height2 d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="hero-cap hero-cap2 text-center">
<h2>Contact Us</h2>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.2021602809496!2d91.71850347529823!3d22.496597079546014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad2777a615585d%3A0xdcf908f6e4f3a713!2sInternational%20Islamic%20University%20Chittagong!5e0!3m2!1sen!2sbd!4v1697978864898!5m2!1sen!2sbd" style="border:0; width:100%; height:500px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>


<section class="contact-section">
<div class="container">
<div class="d-none d-sm-block mb-5 pb-4">

</div>
<div class="row">
<div class="col-12">
<h2 class="contact-title">Get in Touch</h2>
</div>
<div class="col-lg-8">
<form class="form-contact contact_form" action="https://preview.colorlib.com/theme/onlineedu/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
<div class="row">
<div class="col-12">
<div class="form-group">
<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
</div>
</div>
<div class="col-12">
<div class="form-group">
<input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
</div>
</div>
</div>
<div class="form-group mt-3">
<button type="submit" class="button button-contactForm boxed-btn">Send</button>
</div>
</form>
</div>
<div class="col-lg-3 offset-lg-1">
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-home"></i></span>
<div class="media-body">
<h3>Chittagong, Bangladesh</h3>
<p>Rosemead, CA 91770</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-tablet"></i></span>
<div class="media-body">
<h3>+1 253 565 2365</h3>
<p>Mon to Fri 9am to 6pm</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-email"></i></span>
<div class="media-body">
<h3><a href="../../cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dfacaaafafb0adab9fbcb0b3b0adb3b6bdf1bcb0b2">[email&#160;protected]</a></h3>
<p>Send us your query anytime!</p>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection