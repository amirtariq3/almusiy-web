@extends('frontend.layouts.app')

@section('title')
    Al-Muhsiy Group
@endsection

@push('style')
@endpush

@section('contents')

    <!-- Team -->
    <section id="team" class="pb-5">
        <div class="container">
            <h5 class="section-title h1 pt-5">OUR TEAM</h5>
            <div class="row">
                <!-- Team member -->
                @foreach($teams as $team)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" >
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="{{asset('backend/img/team/'.$team->file)}}" alt="card image"></p>
                                        <h4 class="card-title">{{$team->name}}</h4>
                                        <p class="card-text">{{$team->post}}</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">

                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">{{$team->team}}</h4>
                                        <p class="card-text">{{$team->description}}</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- ./Team member -->
{{--                <!-- Team member -->--}}
{{--                <div class="col-xs-12 col-sm-6 col-md-4">--}}
{{--                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">--}}
{{--                        <div class="mainflip">--}}
{{--                            <div class="frontside">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-body text-center">--}}
{{--                                        <p><img class=" img-fluid" src="{{asset('frontend/images/wazir.jpg')}}" alt="card image"></p>--}}
{{--                                        <h4 class="card-title">Wazir Khan</h4>--}}
{{--                                        <p class="card-text">Software  Engineer</p>--}}
{{--                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="backside">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-body text-center mt-4">--}}
{{--                                        <h4 class="card-title">Wazir Khan</h4>--}}
{{--                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>--}}
{{--                                        <ul class="list-inline">--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-facebook"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-twitter"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-skype"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-google"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- ./Team member -->--}}
{{--                <!-- Team member -->--}}
{{--                <div class="col-xs-12 col-sm-6 col-md-4">--}}
{{--                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">--}}
{{--                        <div class="mainflip">--}}
{{--                            <div class="frontside">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-body text-center">--}}
{{--                                        <p><img class=" img-fluid" src="{{asset('frontend/images/profile.png')}}" alt="card image"></p>--}}
{{--                                        <h4 class="card-title">Rizwan Ashraf</h4>--}}
{{--                                        <p class="card-text">Software Engineer</p>--}}
{{--                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="backside">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-body text-center mt-4">--}}
{{--                                        <h4 class="card-title">Rizwan Ashraf</h4>--}}
{{--                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>--}}
{{--                                        <ul class="list-inline">--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-facebook"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-twitter"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-skype"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-google"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Team member -->--}}
{{--                <div class="col-xs-12 col-sm-6 col-md-4">--}}
{{--                    <div class="image-flip" >--}}
{{--                        <div class="mainflip flip-0">--}}
{{--                            <div class="frontside">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-body text-center">--}}
{{--                                        <p><img class=" img-fluid" src="{{asset('frontend/images/aitsam.jpg')}}" alt="card image"></p>--}}
{{--                                        <h4 class="card-title">Aithsam</h4>--}}
{{--                                        <p class="card-text">CEO</p>--}}
{{--                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="backside">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-body text-center mt-4">--}}
{{--                                        <h4 class="card-title">Aithsam</h4>--}}
{{--                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>--}}
{{--                                        <ul class="list-inline">--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-facebook"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-twitter"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-skype"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-google"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- ./Team member -->--}}
{{--                <!-- Team member -->--}}
{{--                <div class="col-xs-12 col-sm-6 col-md-4">--}}
{{--                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">--}}
{{--                        <div class="mainflip">--}}
{{--                            <div class="frontside">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-body text-center">--}}
{{--                                        <p><img class=" img-fluid" src="{{asset('frontend/images/wazir.jpg')}}" alt="card image"></p>--}}
{{--                                        <h4 class="card-title">Wazir Khan</h4>--}}
{{--                                        <p class="card-text">Software  Engineer</p>--}}
{{--                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="backside">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-body text-center mt-4">--}}
{{--                                        <h4 class="card-title">Wazir Khan</h4>--}}
{{--                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>--}}
{{--                                        <ul class="list-inline">--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-facebook"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-twitter"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-skype"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-google"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- ./Team member -->--}}
{{--                <!-- Team member -->--}}
{{--                <div class="col-xs-12 col-sm-6 col-md-4">--}}
{{--                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">--}}
{{--                        <div class="mainflip">--}}
{{--                            <div class="frontside">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-body text-center">--}}
{{--                                        <p><img class=" img-fluid" src="{{asset('frontend/images/profile.png')}}" alt="card image"></p>--}}
{{--                                        <h4 class="card-title">Rizwan Ashraf</h4>--}}
{{--                                        <p class="card-text">Software Engineer</p>--}}
{{--                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="backside">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-body text-center mt-4">--}}
{{--                                        <h4 class="card-title">Rizwan Ashraf</h4>--}}
{{--                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>--}}
{{--                                        <ul class="list-inline">--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-facebook"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-twitter"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-skype"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-inline-item">--}}
{{--                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">--}}
{{--                                                    <i class="fa fa-google"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


            </div>
        </div>
    </section>
    <!-- Team -->

@endsection

@push('scripts')
@endpush
