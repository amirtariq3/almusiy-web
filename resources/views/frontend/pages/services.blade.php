@extends('frontend.layouts.app')

@section('title')
    Al-Muhsiy Group
@endsection

@push('style')
@endpush

@section('contents')

    <!-- services -->
    <section id="services">
        <div class="container">
            <h5 class="section-title h1 pt-5 pb-5 text-center" style="color:#148bb3">Our Services</h5>
            <div class="row">
                  <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                    <img class="animate__animated animate__zoomInDown img-responsive" src="{{asset('frontend/images/Group 2265.png')}}" alt="mobile-img" class="pb-5">
                    <h4 class="pt-3">App development</h4>
                    <p class="pt-3">We create powerful and functional apps to increase presence of the company so that their content can be consumed without any problem.</p>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                   <img class="animate__animated animate__zoomInDown img-responsive" src="{{asset('frontend/images/Group 2261.png')}}" alt="mobile-img" class="pb-5">
                   <h4 class="pt-3">Web development</h4>
                   <p class="pt-3">We create powerful business, e-commerce and social media websites for companies locally in Lahore, throughout Pakistan and around the world.</p>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                  <img class="animate__animated animate__zoomInDown img-responsive" src="{{asset('frontend/images/Group 2262.png')}}" alt="mobile-img" class="pb-5">
                  <h4 class="pt-3">Graphic designing</h4>
                  <p class="pt-3">Creative graphics for business both locally and internationally to increase their presence dynamically i.e. logo, social media post, Flyers, Cards & more.</p>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4 text-center pt-5 pb-5">
                    <img class="animate__animated animate__zoomInDown img-responsive" src="{{asset('frontend/images/group 3.png')}}" alt="mobile-img" class="pb-5">
                    <h4 class="pt-3">App development</h4>
                    <p class="pt-3">We create powerful and functional apps to increase presence of the company so that their content can be consumed without any problem.</p>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4 text-center pt-5 pb-5">
                   <img class="animate__animated animate__zoomInDown img-responsive" src="{{asset('frontend/images/Group 2 (1).png')}}" alt="mobile-img" class="pb-5">
                   <h4 class="pt-3">Web development</h4>
                   <p class="pt-3">We create powerful business, e-commerce and social media websites for companies locally in Lahore, throughout Pakistan and around the world.</p>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4 text-center pt-5 pb-5">
                  <img class="animate__animated animate__zoomInDown img-responsive" src="{{asset('frontend/images/Group 2 (2).png')}}" alt="mobile-img" class="pb-5">
                  <h4 class="pt-3">Graphic designing</h4>
                  <p class="pt-3">Creative graphics for business both locally and internationally to increase their presence dynamically i.e. logo, social media post, Flyers, Cards & more.</p>
                  </div>
            </div>
        </div>
    </section>
    <!-- end of serveces -->

@endsection

@push('scripts')
@endpush
