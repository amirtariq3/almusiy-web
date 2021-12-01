<!-- nav bar -->
<section id="section-navbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-md navbar-light pt-1">
                    <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('frontend/images/logo.png')}}" class="img-responsive" width="70px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active ml-5 navcurrent">
                                <a class="nav-link" href="{{route('home')}}" id="navcurrentlink">Al-Muhsiy Group </a>
                            </li>
                            <li class="nav-item ml-5 navleft">
                                <a class="nav-link" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('services')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Services
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('services')}}">  Services</a>
                                    <a class="dropdown-item" href="{{route('web.application')}}">Web Development</a>
                                    <a class="dropdown-item" href="{{route('mobile.application')}}">Mobile Application</a>
                                    <a class="dropdown-item" href="{{route('graphic.application')}}">Graphic Designing</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('team')}}">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Contact</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Request Qoute
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('qoute.website')}}">Website</a>
                                    <a class="dropdown-item" href="{{route('qoute.mobile')}}">Mobile Application</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- end of navbar -->
