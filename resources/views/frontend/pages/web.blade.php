@extends('frontend.layouts.app')

@section('title')
    Al-Muhsiy Group
@endsection

@push('style')
@endpush

@section('contents')

    <!-- section web -->
    <section id="web">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="web-description pb-5 ">
                    <h2 class="animate__animated animate__bounceInRight pt-5 pb-2 text-center">Web Development Services</h2>
                  <p class="text-justify pb-5">
                    We are the most intimate and reliable place for web development services. We understand that your website is how the world perceives you, so it must be attention-grabbing and striking. Expect nothing but perfect from us because we are the trusted source of user-friendly and responsive sites beyond any measures. Furthermore, our Front End & Backend Developer Team can quickly redesign your existing website into a worthy artifact! We are here with the inspiring innovations for many recognizable brands. Our motive is to bring you a powerful website with our customer-centric and creative web solutions.
                  </p>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-xs-4 col-sm-4 col-md-4 pb-5">
                <div class="web-exert">
                  <img class="animate__animated animate__bounceInRight" src="{{asset('frontend/images/website-development.png')}}" alt="">
                </div>
              </div>
              <div class="col-xs-8 col-sm-8 col-md-8 pb-5">
                <div class="web-expert-desc">
                  <h5>Our expert development team works on the cutting
                    edge of technology and best practices.</h5>
                    <ul class="pt-3">
                      <li>We make websites built for performance</li>
                      <li>Our methodology is proven for each industry we serve</li>
                      <li>We provide a dedicated team of specialized experts</li>
                      <li>Our team plans, designs and develops stunning responsive websites that will increase convertion rates and overall traffic</li>
                      <li>Responsive designs prepares websites for the future of modern website deign by making them beautiful across multiple devices</li>
                    </ul>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- end of web -->

    <!-- section web services -->
    <section id="web-services">
      <div class="container">
        <div class="row pt-5 pb-5">
          <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="wb-service text-center">
              <img src="{{asset('frontend/images/info-box11.png')}}" class="animate__animated animate__shakeX animate__repeat-2 img-responsive pb-3">
              <h5>Web Development Services</h5>
              <p>Our priority is to build such websites for you, which generate handsome revenue and have worth</p>
            </div>
          </div>
          <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="wb-service text-center">
              <img src="{{asset('frontend/images/info-box12.png')}}" class="animate__animated animate__shakeX animate__repeat-2 img-responsive pb-3">
              <h5>Mobile App Design</h5>
              <p>To create a fast and smooth app for any platform, we also deliver products with outsourcing app development model.</p>
            </div>
          </div>
          <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="wb-service text-center">
              <img src="{{asset('frontend/images/info-box13.png')}}" class="animate__animated animate__shakeX animate__repeat-2 img-responsive pb-3">
              <h5>Logo Design</h5>
              <p>Need a custom logo fast? Our team will create a stunning, original design for you in just three days. Your business will stand out from the crowd.</p>
            </div>
          </div>
          <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="wb-service text-center">
              <img src="{{asset('frontend/images/info-box14.png')}}" class="animate__animated animate__shakeX animate__repeat-2 img-responsive pb-3">
              <h5>UI/UX Design</h5>
              <p>The difference between a good app and a bad app is usually the quality of its user experience (UX). A good UX is what separates successful apps from unsuccessful ones .</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of web services -->

@endsection

@push('scripts')
@endpush
