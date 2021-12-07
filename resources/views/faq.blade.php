@extends('layouts.app');

@section('content')
<section class="section faq">
  <div class="row">
    <div class="col-12">
      <!-- F.A.Q Group 1 -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?= $pageName ?></h5>

          <div class="accordion accordion-flush" id="faq-group-1">

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-target="#faqsOne-1" type="button" data-bs-toggle="collapse">
                  What are the functions of the product?
                </button>
              </h2>
              <div id="faqsOne-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                <div class="accordion-body">
                  <p>The Sampay Business Account application will be accessible via a web portal (web application) on both computer and mobile as well as a mobile application (i.e. Android and iOS). Users will be able to access all features on all available platforms without any challenges. This will be done in order to maximize the accessibility of the app.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-target="#faqsOne-2" type="button" data-bs-toggle="collapse">
                  What are device restrictions of the Sampay Business product?
                </button>
              </h2>
              <div id="faqsOne-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                <div class="accordion-body">
                  <p>•	The SBA application will not be accessed by Android 5.0 and iOS 10 operating system.</p>
                  <p>•	The SBA application will be a standalone app that will be accessible from both within the Sampay app and outside the app. </p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-target="#faqsOne-3" type="button" data-bs-toggle="collapse">
                  Who are the main audience of Sampay Business Account?
                </button>
              </h2>
              <div id="faqsOne-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                <div class="accordion-body">
                  <p>The SBA main audience ranges from online stores to businesses that are in need of a financial management system.</p>
                  <p>The SBA will be a mirror of the already existing and curent Sampay Business Application with improvements varrying from the user interface to the actual fuctionality and user expirience of the app. This will include addition of static and dynamic content as well as responsiveness of the application. </p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-target="#faqsOne-4" type="button" data-bs-toggle="collapse">
                  Company Scenario?
                </button>
              </h2>
              <div id="faqsOne-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                <div class="accordion-body">
                  <p>In an instance where companies want to receive a huge payment in real-time, want to pay their employees through different receiving wallets via bulk payments, want to monitor all company expenses. The SBA application is the perfect solution for all such activities.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-target="#faqsOne-5" type="button" data-bs-toggle="collapse">
                  Local Businesses Scenario?
                </button>
              </h2>
              <div id="faqsOne-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                <div class="accordion-body">
                  <p>In an instance where a local business would like to receive customer payments in real-time, they can register for a merchant account which will allow them to have a SBA and this will facilitate merchant payments.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-target="#faqsOne-6" type="button" data-bs-toggle="collapse">
                  International Businesses Scenario?
                </button>
              </h2>
              <div id="faqsOne-6" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                <div class="accordion-body">
                  <p>In an instance where an international business has is conducting trade in Zambia and would like to receive real-time payments from customers, they too can register for a merchant account which will allow them to have a SBA and this will facilitate merchant payments.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-target="#faqsOne-7" type="button" data-bs-toggle="collapse">
                  Online Stores - Ecommerce Scenario?
                </button>
              </h2>
              <div id="faqsOne-7" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                <div class="accordion-body">
                  <p>In an instance where an online or ecommerce store wants to have a payment gateway integrated to their website, then a SBA would be ideal for them by allowing payments made through the Sampay payment gateway to be transferred into their account. </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div><!-- End F.A.Q Group 1 -->
    </div>
  </div>
</section>
@endsection