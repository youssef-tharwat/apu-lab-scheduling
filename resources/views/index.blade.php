@extends('layouts.app')
@section('content')
    <div class="super_container">
        <!-- Home -->
        <div class="home">
            <div class="home_background"></div>
            <div class="background_image background_city" style="background-image:url({{asset('images/city.png')}})"></div>
            <div class="cloud cloud_1"><img src="{{asset('images/cloud.png')}}" alt=""></div>
            <div class="cloud cloud_2"><img src="{{asset('images/cloud.png')}}" alt=""></div>
            <div class="cloud cloud_3"><img src="{{asset('images/cloud_full.png')}}" alt=""></div>
            <div class="cloud cloud_4"><img src="{{asset('images/cloud.png')}}" alt=""></div>
            <div class="home_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content text-center">
                                <div class="home_title">APU Lab Scheduling</div>
                                <div class="home_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="domain_search_form_container">
                                <form action="#" id="domain_search_form" class="domain_search_form d-flex flex-md-row flex-column align-items-center justify-content-start">
                                    @if(\Illuminate\Support\Facades\Auth::check())
                                        <a style="margin: auto;" class="domain_search_button d-flex flex-row align-items-center justify-content-center" href="{{route('schedule')}}">
                                            <img src="{{asset('images/search.png')}}" alt="">
                                            Schedule
                                        </a>
                                    @else
                                        <a style="margin: auto;" class="domain_search_button d-flex flex-row align-items-center justify-content-center" href="{{url('/login')}}">
                                            <img src="{{asset('images/search.png')}}" alt="">
                                            Schedule
                                        </a>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Intro -->

        <div class="intro">
            <div class="container">
                <div class="row">
                    <div class="col magic_fade_in">
                        <div class="section_title text-center"><h2>How to get started</h2></div>
                    </div>
                </div>
                <div class="row intro_row">
                    <div class="intro_dots magic_fade_in" style="background-image:url({{asset('images/dots.png')}})"></div>

                    <!-- Intro Item -->
                    <div class="col-lg-4 intro_col magic_fade_in">
                        <div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
                            <div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
                                <div class="intro_icon"><img src="{{asset('images/icon_1.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>
                            </div>
                            <div class="intro_item_content">
                                <div class="intro_item_title">Register/Login</div>

                            </div>
                        </div>
                    </div>

                    <!-- Intro Item -->
                    <div class="col-lg-4 intro_col magic_fade_in">
                        <div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
                            <div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
                                <div class="intro_icon"><img src="{{asset('images/icon_2.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>
                            </div>
                            <div class="intro_item_content">
                                <div class="intro_item_title">Schedule Lab</div>

                            </div>
                        </div>
                    </div>

                    <!-- Intro Item -->
                    <div class="col-lg-4 intro_col magic_fade_in">
                        <div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
                            <div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
                                <div class="intro_icon"><img src="{{asset('images/icon_3.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div>
                            </div>
                            <div class="intro_item_content">
                                <div class="intro_item_title">View Schedule</div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col text-center">
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <div class="intro_button text-center trans_200 ml-auto mr-auto"><a href="{{route('schedule')}}">Get Started</a></div>
                        @else
                            <div class="intro_button text-center trans_200 ml-auto mr-auto"><a href="{{url('/login')}}">Get Started</a></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>


        <!-- CTA -->

        <div class="cta">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="cta_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-between justify-content-center magic_fade_in">
                            <div class="cta_title">Schedule Labs at your comfort</div>
                            @if(\Illuminate\Support\Facades\Auth::check())
                                <div class="cta_button"><a href="{{route('schedule')}}">Schedule Now</a></div>
                            @else
                                <div class="cta_button"><a href="{{url('/login')}}">Schedule Now</a></div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


