@extends('layouts.app');

@section('content')
<!-- Page Title -->
<div class="pagetitle">
  <h1>{{ isset($pageName) ? $pageName : 'Default' }}</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
      <li class="breadcrumb-item active">{{ isset($pageName) ? $pageName : 'Default' }}</li>
    </ol>
  </nav>
</div>
<!-- End Page Title -->
<section class="section contact">
  <div class="row gy-4">
    <div class="col-xl-6">
      <div class="row">
        <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>18 United Nations Ave,<br>Lusaka, Zambia.</p>
              </div>
        </div>
        <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+260 966 650 008<br>+260 961 484 633</p>
              </div>
        </div>
        <div class="col-lg-6">
          <div class="info-box card">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p>info@samafricaonline.com<br>support@sambusiness.com</p>
          </div>
        </div>
        <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday<br>8:00AM - 05:00PM</p>
              </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
          <div class="card p-4">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div>

    </div>
  </div>
</section>
@endsection