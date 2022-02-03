@extends('layouts.default')

@section('content')

    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300 text-white"
        data-image-src="./assets/img/photos/bg2.jpg">
        <div class="container pt-17 pb-19 pt-md-19 pb-md-20 text-center">
            <div class="row mb-11">
                <div class="col-md-9 col-lg-7 col-xxl-6 mx-auto" data-cues="zoomIn" data-group="page-title"
                    data-interval="-200">
                    <h2 class="h6 text-uppercase ls-xl text-white mb-5">Hello! This is Sandbox</h2>
                    <h3 class="display-1 text-white mb-7">We bring rapid solutions for your business</h3>
                    <a href="./assets/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5"
                        data-glightbox><i class="icn-caret-right"></i></a>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-end">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col-12 mt-n20">
                    <figure class="rounded"><img src="./assets/img/photos/about5.jpg"
                            srcset="./assets/img/photos/about5@2x.jpg 2x" alt="" /></figure>
                    <div class="row" data-cue="slideInUp">
                        <div class="col-xl-10 mx-auto">
                            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 text-white mt-n5 mt-lg-0 mt-lg-n50p mb-lg-n50p border-radius-lg-top"
                                data-image-src="./assets/img/photos/bg2.jpg">
                                <div class="card-body p-9 p-xl-10">
                                    <div class="row align-items-center counter-wrapper gy-4 text-center">
                                        <div class="col-6 col-lg-3">
                                            <h3 class="counter counter-lg text-white">7518</h3>
                                            <p>Completed Projects</p>
                                        </div>
                                        <!--/column -->
                                        <div class="col-6 col-lg-3">
                                            <h3 class="counter counter-lg text-white">3472</h3>
                                            <p>Satisfied Customers</p>
                                        </div>
                                        <!--/column -->
                                        <div class="col-6 col-lg-3">
                                            <h3 class="counter counter-lg text-white">2184</h3>
                                            <p>Expert Employees</p>
                                        </div>
                                        <!--/column -->
                                        <div class="col-6 col-lg-3">
                                            <h3 class="counter counter-lg text-white">4523</h3>
                                            <p>Awards Won</p>
                                        </div>
                                        <!--/column -->
                                    </div>
                                    <!--/.row -->
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.card -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gx-lg-8 gy-8 mt-5 mt-md-12 mt-lg-0 mb-15 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="row gx-md-5 gy-5" data-cues="fadeIn" data-group="images">
                        <div class="col-md-4 offset-md-2 align-self-end">
                            <figure class="rounded"><img src="./assets/img/photos/g1.jpg"
                                    srcset="./assets/img/photos/g1@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 align-self-end">
                            <figure class="rounded"><img src="./assets/img/photos/g2.jpg"
                                    srcset="./assets/img/photos/g2@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 offset-md-1">
                            <figure class="rounded"><img src="./assets/img/photos/g3.jpg"
                                    srcset="./assets/img/photos/g3@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-4 align-self-start">
                            <figure class="rounded"><img src="./assets/img/photos/g4.jpg"
                                    srcset="./assets/img/photos/g4@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="display-4 mb-3">What We Do?</h2>
                    <p class="lead fs-lg mb-8 pe-xxl-2">The full service we are offering is <span
                            class="underline">specifically</span> designed to meet your business needs and projects.</p>
                    <div class="row gx-xl-10 gy-6" data-cues="slideInUp" data-group="services">
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i
                                            class="uil uil-phone-volume"></i> </div>
                                </div>
                                <div>
                                    <h4 class="mb-1">24/7 Support</h4>
                                    <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i
                                            class="uil uil-shield-exclamation"></i> </div>
                                </div>
                                <div>
                                    <h4 class="mb-1">Secure Payments</h4>
                                    <p class="mb-0">Vivamus sagittis lacus augue laoreet vel.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i
                                            class="uil uil-laptop-cloud"></i> </div>
                                </div>
                                <div>
                                    <h4 class="mb-1">Daily Updates</h4>
                                    <p class="mb-0">Cras mattis consectetur purus sit amet.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i
                                            class="uil uil-chart-line"></i> </div>
                                </div>
                                <div>
                                    <h4 class="mb-1">Market Research</h4>
                                    <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <h2 class="display-4 mb-3">How We Do It?</h2>
            <p class="lead fs-lg mb-8">We make your spending <span class="underline">stress-free</span> for you to have the
                perfect control.</p>
            <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line" data-cues="slideInUp" data-group="process">
                <div class="col-md-6 col-lg-3"> <span
                        class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span
                            class="number">01</span></span>
                    <h4 class="mb-1">Concept</h4>
                    <p>Nulla vitae elit libero elit non porta gravida eget metus cras. Aenean eu leo quam. Pellentesque
                        ornare.</p>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary disabled mb-4"><span
                            class="number">02</span></span>
                    <h4 class="mb-1">Prepare</h4>
                    <p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3"> <span
                        class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span
                            class="number">03</span></span>
                    <h4 class="mb-1">Retouch</h4>
                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero.</p>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3"> <span
                        class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span
                            class="number">04</span></span>
                    <h4 class="mb-1">Finalize</h4>
                    <p>Integer posuere erat, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300 text-white"
        data-image-src="./assets/img/photos/bg2.jpg">
        <div class="container py-14 py-md-17">
            <h2 class="display-4 mb-5 text-white text-center">Happy Customers</h2>
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto" data-cue="fadeIn">
                    <div class="basic-slider owl-carousel gap-small dots-over text-center mb-n2" data-margin="30">
                        <div class="item">
                            <blockquote class="border-0 fs-lg">
                                <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula
                                    porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus.”</p>
                                <div class="blockquote-details justify-content-center">
                                    <img class="rounded-circle w-12" src="./assets/img/avatars/te1.jpg"
                                        srcset="./assets/img/avatars/te1@2x.jpg 2x" alt="" />
                                    <div class="info">
                                        <h6 class="mb-1 text-white">Coriss Ambady</h6>
                                        <p class="mb-0">Financial Analyst</p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <blockquote class="border-0 fs-lg">
                                <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula
                                    porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus.”</p>
                                <div class="blockquote-details justify-content-center">
                                    <img class="rounded-circle w-12" src="./assets/img/avatars/te2.jpg"
                                        srcset="./assets/img/avatars/te2@2x.jpg 2x" alt="" />
                                    <div class="info">
                                        <h6 class="mb-1 text-white">Cory Zamora</h6>
                                        <p class="mb-0">Marketing Specialist</p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <blockquote class="border-0 fs-lg">
                                <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula
                                    porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus.”</p>
                                <div class="blockquote-details justify-content-center">
                                    <img class="rounded-circle w-12" src="./assets/img/avatars/te3.jpg"
                                        srcset="./assets/img/avatars/te3@2x.jpg 2x" alt="" />
                                    <div class="info">
                                        <h6 class="mb-1 text-white">Nikolas Brooten</h6>
                                        <p class="mb-0">Sales Manager</p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.owl-carousel -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row align-items-center mb-7">
                <div class="col-md-8 col-lg-8 col-xl-7 col-xxl-6 pe-lg-17">
                    <h2 class="display-4 mb-3">Recent Projects</h2>
                    <p class="lead fs-lg">We love to turn ideas into <span class="underline">beautiful things</span>.</p>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="grid grid-view projects-tiles">
                <div class="project">
                    <div class="row gx-md-8 gx-xl-12 gy-10 gy-md-12 isotope" data-cue="slideInUp">
                        <div class="item col-md-5">
                            <figure class="lift rounded mb-6"><a href="./single-project3.html"> <img
                                        src="./assets/img/photos/rp1.jpg" srcset="./assets/img/photos/rp1@2x.jpg 2x"
                                        alt="" /></a></figure>
                            <div class="post-category mb-3 text-purple">Stationary</div>
                            <h3 class="post-title">Ipsum Ultricies Cursus</h3>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-7 mt-md-17">
                            <figure class="lift rounded mb-6"><a href="./single-project2.html"> <img
                                        src="./assets/img/photos/rp2.jpg" srcset="./assets/img/photos/rp2@2x.jpg 2x"
                                        alt="" /></a></figure>
                            <div class="post-category mb-3 text-orange">Invitation</div>
                            <h3 class="post-title">Mollis Ipsum Mattis</h3>
                        </div>
                        <!-- /.item -->
                        <div class="item col-md-5">
                            <figure class="lift rounded mb-6"><a href="./single-project.html"> <img
                                        src="./assets/img/photos/rp3.jpg" srcset="./assets/img/photos/rp3@2x.jpg 2x"
                                        alt="" /></a></figure>
                            <div class="post-category mb-3 text-red">Notebook</div>
                            <h3 class="post-title">Magna Tristique Inceptos</h3>
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.project -->
            </div>
            <!-- /.projects-tiles -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gray">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0 mb-10">
                <div class="col-lg-4 mt-lg-2">
                    <h3 class="display-4 mb-3 pe-xxl-5">Trusted by over 300+ clients</h3>
                    <p class="lead fs-lg mb-0 pe-xxl-5">We <span class="underline">bring solutions</span> to make life
                        easier for our customers.</p>
                </div>
                <!-- /column -->
                <div class="col-lg-8">
                    <div class="row row-cols-2 row-cols-md-4 gx-0 gx-md-8 gx-xl-12 gy-12" data-cues="fadeIn"
                        data-group="clients">
                        <div class="col">
                            <figure class="px-3 px-md-0 px-xxl-2" data-cue="fadeIn"><img src="./assets/img/brands/z1.png"
                                    alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col">
                            <figure class="px-3 px-md-0 px-xxl-2" data-cue="fadeIn"><img src="./assets/img/brands/z2.png"
                                    alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col">
                            <figure class="px-3 px-md-0 px-xxl-2" data-cue="fadeIn"><img src="./assets/img/brands/z3.png"
                                    alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col">
                            <figure class="px-3 px-md-0 px-xxl-2" data-cue="fadeIn"><img src="./assets/img/brands/z4.png"
                                    alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col">
                            <figure class="px-3 px-md-0 px-xxl-2" data-cue="fadeIn"><img src="./assets/img/brands/z5.png"
                                    alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col">
                            <figure class="px-3 px-md-0 px-xxl-2" data-cue="fadeIn"><img src="./assets/img/brands/z6.png"
                                    alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col">
                            <figure class="px-3 px-md-0 px-xxl-2" data-cue="fadeIn"><img src="./assets/img/brands/z7.png"
                                    alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col">
                            <figure class="px-3 px-md-0 px-xxl-2" data-cue="fadeIn"><img src="./assets/img/brands/z8.png"
                                    alt="" /></figure>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-end">
        <div class="container py-14 py-md-16">
            <div class="row gy-6 gy-lg-0 mb-10 mb-md-18">
                <div class="col-lg-4">
                    <h2 class="display-4 mt-lg-18 mb-3">Our Pricing</h2>
                    <p class="lead fs-lg">We offer <span class="underline">great prices</span>, premium and quality products
                        for your business.</p>
                    <p>Enjoy a <a href="#" class="hover">free 30-day trial</a> and experience the full service. No credit
                        card required!</p>
                    <a href="#" class="btn btn-primary rounded-pill mt-2">See All Prices</a>
                </div>
                <!--/column -->
                <div class="col-lg-7 offset-lg-1 pricing-wrapper">
                    <div class="pricing-switcher-wrapper switcher justify-content-start justify-content-lg-end">
                        <p class="mb-0 pe-3">Monthly</p>
                        <div class="pricing-switchers">
                            <div class="pricing-switcher pricing-switcher-active"></div>
                            <div class="pricing-switcher"></div>
                            <div class="switcher-button bg-primary"></div>
                        </div>
                        <p class="mb-0 ps-3">Yearly <span class="text-red">(Save 30%)</span></p>
                    </div>
                    <div class="row gy-6 mt-5">
                        <div class="col-md-6">
                            <div class="pricing card">
                                <div class="card-body pb-12">
                                    <div class="prices text-dark">
                                        <div class="price price-show"><span class="price-currency">$</span><span
                                                class="price-value">19</span> <span class="price-duration">month</span>
                                        </div>
                                        <div class="price price-hide price-hidden"><span
                                                class="price-currency">$</span><span class="price-value">199</span> <span
                                                class="price-duration">year</span></div>
                                    </div>
                                    <!--/.prices -->
                                    <h4 class="card-title mt-2">Premium Plan</h4>
                                    <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9">
                                        <li><i class="uil uil-check"></i><span><strong>5</strong> Projects </span></li>
                                        <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                                        <li><i class="uil uil-check"></i><span><strong>200MB</strong> Storage </span></li>
                                        <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                                        <li><i class="uil uil-times bullet-soft-red"></i><span> 7/24
                                                <strong>Support</strong></span></li>
                                    </ul>
                                    <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.pricing -->
                        </div>
                        <!--/column -->
                        <div class="col-md-6 popular">
                            <div class="pricing card">
                                <div class="card-body pb-12">
                                    <div class="prices text-dark">
                                        <div class="price price-show"><span class="price-currency">$</span><span
                                                class="price-value">49</span> <span class="price-duration">month</span>
                                        </div>
                                        <div class="price price-hide price-hidden"><span
                                                class="price-currency">$</span><span class="price-value">499</span> <span
                                                class="price-duration">year</span></div>
                                    </div>
                                    <!--/.prices -->
                                    <h4 class="card-title mt-2">Corporate Plan</h4>
                                    <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9">
                                        <li><i class="uil uil-check"></i><span><strong>20</strong> Projects </span></li>
                                        <li><i class="uil uil-check"></i><span><strong>300K</strong> API Access </span></li>
                                        <li><i class="uil uil-check"></i><span><strong>500MB</strong> Storage </span></li>
                                        <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                                        <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span></li>
                                    </ul>
                                    <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.pricing -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gy-10 gx-lg-8 gx-xl-12 align-items-center">
                <div class="col-lg-7 position-relative">
                    <div class="row gx-md-5 gy-5">
                        <div class="col-md-6">
                            <figure class="rounded mt-md-10 position-relative" data-cue="fadeIn" data-delay="300"><img
                                    src="./assets/img/photos/g5.jpg" srcset="./assets/img/photos/g5@2x.jpg 2x" alt="">
                            </figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                            <div class="row gx-md-5 gy-5">
                                <div class="col-md-12 order-md-2">
                                    <figure class="rounded" data-cue="fadeIn" data-delay="1100"><img
                                            src="./assets/img/photos/g6.jpg" srcset="./assets/img/photos/g6@2x.jpg 2x"
                                            alt=""></figure>
                                </div>
                                <!--/column -->
                                <div class="col-md-10">
                                    <div class="card bg-pale-primary text-center" data-cue="fadeIn" data-delay="800">
                                        <div class="card-body py-11 counter-wrapper">
                                            <h3 class="counter text-nowrap">5000+</h3>
                                            <p class="mb-0">Satisfied Customers</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.card -->
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="col-lg-5">
                    <h2 class="display-4 mb-3">Let’s Talk</h2>
                    <p class="lead fs-lg">Let’s make something great together. We are <span class="underline">trusted
                            by</span> over 5000+ clients. Join them by using our services and grow your business.</p>
                    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus
                        mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                        fermentum massa justo sit amet risus.</p>
                    <a href="#" class="btn btn-primary rounded-pill mt-2">Join Us</a>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

@endsection
