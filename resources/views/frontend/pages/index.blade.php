@extends('frontend.layouts.app')

@section('title')
    Al-Muhsiy Group
@endsection

@push('style')
@endpush

@section('contents')

    <!-- main slider section -->
    <section id="slider-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
{{--                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
                  @foreach( $banners as $banner )
                      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                  @endforeach
              </ol>
              <div class="carousel-inner">
{{--                <div class="carousel-item active">--}}
{{--                  <img class="d-block w-100" src="{{asset('frontend/images/slider1.png')}}" alt="First slide">--}}
{{--                </div>--}}

                  @foreach( $banners as $banner )
                      <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                          <img class="d-block img-fluid" src="{{asset('/backend/img/banner/'.$banner->file)}}" alt="{{ $banner->name }}">
                      </div>
                  @endforeach

              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of main slider -->

    <!-- about section -->
    <section id="about-section">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="about-img pt-5 pb-5">
              <img src="{{asset('frontend/images/logo.png')}}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-10">
            <div class="about-description pt-5 pb-5">
              <h2>Welcome To Almushiy Group</h2>
              <p class="text-justify">  Incepted in 2018, </strong>AL-Mushiy Group</strong> is a leading Development &amp;
                 Design expert company providing superior Software, Web, Mobile and Creative Designing solutions and
                 services to companies globally.Highly skilled intellectual personnel, most having substantial work
                 experience in diverse areas of Information Technology make up our team. Our management ensures that
                  each individual excels in their specific assigned tasks by working closely with them. Only those
                   individuals are hired who not only possess strong technical and analytical skills, high intellect,
                    sound work ethics and integrity but also who have confidence, decision making abilities and above
                     all the drive to excel whether it is at the management level or at a technology/software
                     development position.
              </p>
              <p class="text-justify">
                Our focused, sound and innovative approach is derived from the cumulative experience of our
                 team members and as a result of their combined practical business experience with strong
                  technology delivery capabilities, we are able to comprehend the Client’s business
                   requirements, propose IT and Creative strategies in line with the vision of the
                   business and execute the business plan by building or implementing high quality
                    scalable business solutions through the use of latest cutting edge Technologies.

            </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="company-services-img">
              <p><img  src="{{asset('frontend/images/about-picture2.png')}}" class="img-responsive" ></p>
              <p><img src="{{asset('frontend/images/about-picture3.png')}}" class="img-responsive"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="company-services-img">
              <p><img src="{{asset('frontend/images/about-picture4.png')}}" class="img-responsive"></p>
              <p><img src="{{asset('frontend/images/about-picture1.png')}}" class="img-responsive"></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end about section -->

    <!-- product done  -->
    <section id="project-done">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center pt-2">
          <h3>Clients Satisfiction</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class=" d-flex justify-content-around align-items-center text-center pt-2 pb-2">

              <div>
                  <h4 class="count">500</h4>
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                  <p>Working From</p>
              </div>

              <div>
                  <h4 class="count">300</h4>
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  <p>project completed</p>
              </div>

              <div>
                  <h4 class="count">100</h4>
                  <i class="fa fa-hourglass-start" aria-hidden="true"></i>
                  <p>Weekly Working hours</p>
              </div>

              <div>
                  <h4 class="count">500</h4>
                  <i class="fa fa-smile-o" aria-hidden="true"></i>
                  <p>Happy Clients</p>
              </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- end project done -->

@endsection

@push('scripts')
@endpush
