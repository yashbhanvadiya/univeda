@extends('layouts.apps',['data' => $data])
@section('content')
    <main id="case-studies">
        {{-- Banner --}}
        <section class="banner-sec">
            <div class="container-fluid">
                <div class="container">
                    <h1>Case Studies</h1>
                </div>
            </div>
        </section>

        {{-- The Products Story --}}
        <section class="mobile-app-dev">
            <div class="container mobile-app cross-sec">
                <div class="row align-items-center">
                    <div class="col col-md-6 wow fadeInUp cross-alter-content">
                        <h2>Discover Our Portfolio</h2>
                        <h4>Take a look at our case studies and discover how we can help businesses just like yours get a competitive edge in their domain.</h4>
                        <p>Our case studies detail the way we capture the vision of our clients and closely collaborate with them to develop apps and software, tailored to their organizational goals.</p>
                        <p>Our team of experienced professionals formulate custom software development strategies and lead your projects from the drawing board to deployment, working with a high degree of professionalism to deliver high-impact technical solutions that address your business needs.</p>
                        <p>Connect With Us To Gain Your Competitive Edge</p>

                        <a href="{{ route('contact-us') }}" class="btn button-primary mt-0">Contact Us</a>
                    </div>
                    <div class="col col-md-6 text-right wow fadeInUp">
                        <img src="{{ asset('images/case-studies.png') }}" widht="685px" height="100%" alt="case study unikwork">
                    </div>
                </div>
            </div>
        </section>


        {{-- Mobile Apps --}}
        <section class="our-work">
            <div class="container">
                <h2 class="section-title wow fadeInUp">Mobile Apps</h2>
                <div class="row work-sec kooberi-work">
                    <div class="work-sec-bg kooberi-bg"></div>
                    <div class="work-content-sec kooberi-sec d-lg-flex">
                        <div class="col-lg-6 col-12 work-img">
                            <img src="{{ asset('images/kooberi.png')}}" widht="529px" height="100%" alt="case study unikwork">
                        </div>
                        <div class="col-lg-6 col-12">
                            <a href="{{ route('kooberi') }}" class="d-block">
                                <div class="work-content">
                                    <h3>Kooberi</h3>
                                    <p>Helping people save money and business thrive! Just a click away!! No searching for the coupon now that has expirations. Kooberi is a completely reliable and faster application that helps you find best deals to get the coupon codes for the restaurants, cafes, stores, etc that has best offers available near you. It provides its users a complete online ordering solution from the neighborhood. Build an amazing experience around with the deal breaking offers.</p>
                                </div>
                                <div class="work-points kooberi-points">
                                    <div>
                                        <p>Fast and reliable</p>
                                        <p>Best coupon deals without expirations</p>
                                        <p>Gets you to the nearest restaurants, cafes, and grocery stores.</p>
                                        <p>Helps your business thrive</p>
                                    </div>
                                    <span>Read More</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row work-sec carblip-work">
                    <div class="work-sec-bg carblip-bg"></div>
                    <div class="work-content-sec carblip-sec d-lg-flex">
                        <div class="col-lg-6 col-12 work-img">
                            <img src="{{ asset('images/carblip.png')}}" widht="529px" height="100%" alt="case study unikwork">
                        </div>
                        <div class="col-lg-6 col-12">
                            <a href="{{ route('carblip') }}"  class="d-block">
                                <div class="work-content">
                                    <h3>Carblip</h3>
                                    <p>A complete personalised solution to your car buying and leasing. Get your personalised car delivered!!
                                        Carblip is an application that allows users to experience the personalised car buying. Skip the dealership and get in touch with the car configurators that helps users get their car just the way they want it to be. Carblip alleviates almost all the pain of the consumers who often experiences in the car buying.</p>
                                </div>
                                <div class="work-points carblip-points">
                                    <div>
                                        <p>No broker or dealership</p>
                                        <p>Personalised car buying and leasing</p>
                                        <p>Dedicated conceirge for the complete process guidance</p>
                                        <p>Upfront and no charge to use this service</p>
                                    </div>
                                    <span>Read More</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- <div class="row work-sec kixify-work">
                    <div class="work-sec-bg kixify-bg"></div>
                    <div class="work-content-sec kixify-sec d-lg-flex">
                        <div class="col-lg-6 col-12 work-img">
                            <img src="{{ asset('images/kixify.png')}}" widht="529px" height="100%" alt="case study unikwork">
                        </div>
                        <div class="col-lg-6 col-12">
                            <a href="{{ route('kixify') }}"  class="d-block">
                                <div class="work-content">
                                    <h3>Kixify</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets</p>
                                </div>
                                <div class="work-points kixify-points">
                                    <div>
                                        <p>Lorem Ipsum is simply</p>
                                        <p>Lorem Ipsum is simply dummy</p>
                                        <p>Lorem Ipsum is simply dummy text</p>
                                        <p>Lorem Ipsum is simply</p>
                                    </div>
                                    <span>Read More</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> --}}

                <div class="row work-sec quick-work">
                    <div class="work-sec-bg quick-bg"></div>
                    <div class="work-content-sec quick-sec d-lg-flex">
                        <div class="col-lg-6 col-12 work-img">
                            <img src="{{ asset('images/quick.png')}}" widht="529px" height="100%" alt="case study unikwork">
                        </div>
                        <div class="col-lg-6 col-12">
                            <a href="{{ route('quick') }}"  class="d-block">
                                <div class="work-content">
                                    <h3>Quick</h3>
                                    <p>One of the first ever coffee applications in the Kingdom of Saudi Arabia, that gives access to the artisanal coffee and international coffee available at the nearby cafes and restaurants. This application mainly targets the coffee lovers to bring them under an umbrella and serve the best experience. Quick application helps you reach out to various coffee brands nearby. Quick application connects and facilitates between their partners and the customers.
                                    </p>
                                </div>
                                <div class="work-points quick-points">
                                    <div>
                                        <p>First ever coffee application </p>
                                        <p>Popular coffee and brands available</p>
                                        <p>Smoother and reliable payment, and transactions services</p>
                                        <p>Reliable location services</p>
                                    </div>
                                    <span>Read More</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        @include('whatwedo')
    </main>
@endsection
