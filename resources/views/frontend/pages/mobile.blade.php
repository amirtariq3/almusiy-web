@extends('frontend.layouts.app')

@section('title')
    Al-Muhsiy Group
@endsection

@push('style')
@endpush

@section('contents')

    <!-- section mobile -->
    <section id="web">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="mobile-description pb-5">
                    <h2 class="animate__animated animate__bounceInRight pt-5 pb-2 text-center">Best Mobile App Strategy</h2>
                  <p class="text-justify">
                    This mobile application development agency has it all. We offer design and application development
                    services for every stage of your mobile project. App Design's mobile application development services
                     are client-centric to create a complete and customized solution. We are a leading digital agency
                      focused on UI / UX design. We develop web pages, mobile applications iOS / Android, and we create
                       Virtual Stores.
                  </p>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                    <img src="{{asset('frontend/images/native.gif')}}" alt="mobile-img" class="pb-5">
                    <h4>Native Apps</h4>
                    <p>App Design is a leader in high quality, efficient, and high-performance native application development services</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                    <img src="{{asset('frontend/images/map.gif')}}" alt="mobile-img">
                    <h4> Mobile Web Applications</h4>
                    <p>Hire native developers with React to create high-quality Android mobile applications using Hybrid technology</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                    <img src="{{asset('frontend/images/hybrid.gif')}}" alt="mobile-img">
                    <h4>IOS Application</h4>
                    <p>Native iOS application development solutions that work on the full range of Apple devices, including iPhone, iPad, and Apple Watch</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of mobile -->

    <!-- section mobile services -->
    <section id="mobile-services">
        <div class="container">
          <div class="row pt-5 pb-5">
            <div class="col-xs-3 col-sm-3 col-md-3">
              <div class="mb-service text-center">
                <img src="{{asset('frontend/images/info-box11.png')}}" class="animate__animated animate__shakeX animate__repeat-2 img-responsive pb-2">
                <h6>Cross Platform App Development</h6>
                <p>To create a fast and smooth app for any platform, we also deliver products with outsourcing app development model.</p>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
              <div class="mb-service text-center">
                <img src="{{asset('frontend/images/info-box12.png')}}" class="animate__animated animate__shakeX animate__repeat-2 img-responsive pb-2">
                <h6>Hybrid App Development</h6>
                <p>The digital world has seen a paradigm shift in the flutter App development after the introduction of Hybrid technology.</p>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
              <div class="mb-service text-center">
                <img src="{{asset('frontend/images/info-box13.png')}}" class="animate__animated animate__shakeX animate__repeat-2 img-responsive pb-2">
                <h6>App Development Cost</h6>
                <p>We are providing best app development prices in the market in which you can get very good developed apps</p>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
              <div class="mb-service text-center">
                <img src="{{asset('frontend/images/info-box14.png')}}" class="animate__animated animate__shakeX animate__repeat-2 img-responsive pb-2">
                <h6>UI Design</h6>
                <p>Are you looking for best mobile app design companies for UX/UI design of your mobile app project? We are offering UX/UI designs in a very professional way .AS The success of your mobile app lies in app design.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- end of web services -->

@endsection

@push('scripts')
@endpush
