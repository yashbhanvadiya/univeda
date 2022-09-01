@extends('layouts.apps',['data' => $data])
@section('content')
    <main id="about-us">
        {{-- Banner --}}
        <section class="banner-sec">
            <div class="container-fluid">
                <div class="container">
                    <h1>Sitemap</h1>
                </div>
            </div>
        </section>

        <section class="privacy-policy">
            <div class="container">
                <div class="row align-items-center wow fadeInUp mt-5 mb-5">
                    <div class="col-md-12">
                        <h3 class="mb-3">What We Do</h3>
                    </div>
                    <div class="col-md-6">
                        <ul class="pl-3">
                            <li class="mb-3"><a href="{{ route('home') }}">Home</a></li>
                            <li class="mb-3"><a href="{{ route('about-us') }}">About Us</a></li>
                            <li class="mb-3"><a href="{{ route('services') }}">Services</a></li>
                            <li class="mb-3"><a href="{{ route('case-studies') }}">Case Studies</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="pl-3">
                            <li class="mb-3"><a href="{{ route('careers') }}">Careers</a></li>
                            <li class="mb-3"><a href="{{ route('contact-us') }}">Contact Us</a></li>
                            <li class="mb-3"><a href="{{ route('terms-of-service') }}">Terms of Service</a></li>
                            <li class="mb-3"><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h3 class="mb-3">Services</h3>
                    </div>
                    <div class="col-md-6">
                        <ul class="pl-3">
                            <li class="mb-3"><a href="{{ route('app-development') }}">App Development</a></li>
                            <li class="mb-3"><a href="{{ route('web-development') }}">Web Development</a></li>
                            <li class="mb-3"><a href="{{ route('ui-ux') }}">UI & UX</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="pl-3">
                            <li class="mb-3"><a href="{{ route('internet-of-things') }}">Internet Of Things</a></li>
                            <li class="mb-3"><a href="{{ route('development-operations') }}">Development Oprations</a></li>
                            <li class="mb-3"><a href="{{ route('quality-assurance') }}">Quality Assurance</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
