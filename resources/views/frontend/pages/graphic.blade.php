@extends('frontend.layouts.app')

@section('title')
    Al-Muhsiy Group
@endsection

@push('style')

@endpush

@section('contents')


    <!-- Graphic mobile -->
    <section id="graphic">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="graphic-description pb-5">
                    <h2 class="animate__animated animate__bounceInRight pt-5 pb-2 text-center">Our Design For Your Business Achivment</h2>
                  <p class="text-justify">
                    One of the best graphic design agencies available on the web. We’re not talking about run-of-the-mill graphic design – the type you see everywhere – we’re talking about something special, something unique and something you would be proud to show your customers. Making sure that your graphics are something special requires more than just great designs – it requires a team with experience and who know how to communicate professionally with clients. As a design agency with over ten years of experience, MaxoBiz have perfected the art of making sure our clients are happy from beginning to end.
                  </p>
                  </div>
                </div>
            </div>
            <div class="row pt-5 pb-5">
                <div class="col-xs-6 col-sm-6 col-md-6  pt-5">
                    <p class="text-justify">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque temporibus modi asperiores quas alias? Cumque ipsum iusto inventore voluptatum earum dolorum possimus, odit vero labore veniam et atque dolores dolore? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque eligendi perspiciatis fugit praesentium quos quasi dignissimos veniam facilis! Consectetur voluptatum accusamus iusto repellat, ipsam officia officiis perferendis ea dolorum sequi.
                    </p>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                    <img src="{{asset('frontend/images/flyer.png')}}" alt="graphic-img">
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                    <img src="{{asset('frontend/images/logoDesigning.png')}}" alt="graphic-img">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6  pt-5">
                    <p class="text-justify">
                        A logo isn't just a tiny piece of art; it's the building block your company needs to build a strong
                         brand identity with. Using it on various parts of your business, such as website, packaging, label,
                          social media, printed materials, etc., gets your brand the much-needed visibility. A logo becomes
                           timeless when it uniquely identifies your brand from your competitors. If it gives a view of the
                            business you are into in just one glance; then it's a great logo! Every business is different,
                            and their requirements are different too. That's the reason why we, at <strong>AL-Mushiy Group</strong> provide
                            you with a custom logo design at the most affordable price around.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of mobile -->

    <!-- section web services -->
    <section id="web-services">
        <div class="container">
          <div class="row pt-5 pb-5">
            <div class="col-xs-3 col-sm-3 col-md-3">
              <div class="wb-service text-center">
                <img src="{{asset('frontend/images/info-box11.png')}}" class="animate__animated animate__shakeX animate__repeat-2 img-responsive pb-3">
                <h6>Web Development Services</h6>
                <p>Our priority is to build such websites for you, which generate handsome revenue and have worth</p>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
              <div class="wb-service text-center">
                <img src="{{asset('frontend/images/info-box12.png')}}" class="animate__animated animate__shakeX animate__repeat-2 img-responsive pb-3">
                <h6>Mobile App Design</h6>
                <p>To create a fast and smooth app for any platform, we also deliver products with outsourcing app development model.</p>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
              <div class="wb-service text-center">
                <img src="{{asset('frontend/images/info-box13.png')}}" class="animate__animated animate__shakeX animate__repeat-2 img-responsive pb-3">
                <h6>Logo Design</h6>
                <p>Need a custom logo fast? Our team will create a stunning, original design for you in just three days. Your business will stand out from the crowd.</p>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
              <div class="wb-service text-center">
                <img src="{{asset('frontend/images/info-box14.png')}}" class="animate__animated animate__shakeX animate__repeat-2 img-responsive pb-3">
                <h6>UI/UX Design</h6>
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
