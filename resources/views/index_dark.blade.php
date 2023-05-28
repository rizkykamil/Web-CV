@include('partials._headers')
<!-- Preloader -->
@include('partials._preloader')
<!-- mobile header -->
@include('partials._responsive_header')

<!-- main layout -->
<main class="content">
    <!-- section home -->
    <section id="home" class="home d-flex align-items-center">
        <div class="container">

            <!-- intro -->
            <div class="intro">
                <!-- avatar image -->
                <img src="https://via.placeholder.com/108x108" alt="Bolby" class="mb-4" />

                <!-- info -->
                <h1 class="mb-2 mt-0">Bolby Doe</h1>
                <span>I'm a Back-End Developer</span>

                <!-- social icons -->
                <ul class="social-icons light list-inline mb-0 mt-4">
                    {{-- linkind,Whatsapp, Email,Github --}}
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-envelope"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                </ul>

                <!-- buttons -->
                <div class="mt-4">
                    <a href="#contact" class="btn btn-default">Hire me</a>
                </div>
            </div>

            <!-- scroll down mouse wheel -->
            <div class="scroll-down">
                <a href="#about" class="mouse-wrapper">
                    <span>Scroll Down</span>
                    <span class="mouse">
                        <span class="wheel"></span>
                    </span>
                </a>
            </div>

            <!-- parallax layers -->
            @include('partials._paralax')
        </div>

    </section>

    <!-- section about -->
    <section id="about">

        <div class="container">
            <!-- section title -->
            <h2 class="section-title wow fadeInUp mb-5">About Me</h2>
            <div class="row">

                <div class="col-md-3">
                    <div class="text-center text-md-left">
                        <!-- avatar image -->
                        <img src="https://via.placeholder.com/150x150" alt="Bolby" />
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-9 triangle-left-md triangle-top-sm">
                    <div class="rounded bg-dark shadow-light padding-30">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- about text -->
                                <p>Backend Developer berpengalaman dengan Laravel, pengalaman di 2 perusahaan, magang di
                                    1 perusahaan. Keahlian: pengembangan web, integrasi API, pengoptimalan database.
                                    Kemampuan analitis, komunikasi, bersemangat untuk proyek inovatif.</p>
                                <div class="mt-3">
                                    <a href="#" class="btn btn-default">Download CV</a>
                                </div>
                                <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="spacer" data-height="40"></div>
                                <!-- skill item -->
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">Backend</h4>
                                        <span class="float-right">Intermediet</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                            aria-valuemax="100" aria-valuenow="85" data-color="#FFD15C">
                                        </div>
                                    </div>
                                    <div class="spacer" data-height="20"></div>
                                </div>

                                <!-- skill item -->
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">Front-End</h4>
                                        <span class="float-right">Intermediet</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                            aria-valuemax="100" aria-valuenow="85" data-color="#FF4C60">
                                        </div>
                                    </div>
                                    <div class="spacer" data-height="20"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- row end -->

            <div class="spacer" data-height="70"></div>

            <div class="row">

                <div class="col-md-3 col-sm-6 py-2">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-fire"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">198</em></h3>
                            <p class="mb-0">Projects completed</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-cup"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">5670</em></h3>
                            <p class="mb-0">Cup of coffee</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-people"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">427</em></h3>
                            <p class="mb-0">Satisfied clients</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-badge"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">35</em></h3>
                            <p class="mb-0">Nominees winner</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- section services -->

    
    <section id="services">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Job placement</h2>

            <div class="spacer" data-height="60"></div>

            <div class="col-md-12 py-3">
                <!-- service box -->
                <div class="service-box rounded data-background padding-30 text-center text-light shadow-blue"
                    data-color="#6C6CE5">
                    <img src="{{asset('assets/images/icon/BackEnd.svg')}}" class="gambar_backend" alt="Backend Logo" />
                    <h3 class="mb-3 mt-0">Back-End Developer</h3>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetuer adipiscing elit aenean commodo ligula
                        eget.</p>
                </div>
                <div class="spacer d-md-none d-lg-none" data-height="30"></div>
            </div>

            <div class="mt-5 text-center">
                <p class="mb-0">Looking for a custom job? <a href="#contact">Click here</a> to contact me! 👋</p>
            </div>

        </div>

    </section>

    <!-- section experience -->
    <section id="experience">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Experience</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-6">

                    <!-- timeline wrapper -->
                    <div class="timeline edu bg-dark rounded shadow-light padding-30 overflow-hidden">

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
                            <div class="content">
                                <span class="time">2017 - 2013</span>
                                <h3 class="title">Bachelor’s Degree</h3>
                                <p></p>
                            </div>
                        </div>

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
                            <div class="content">
                                <span class="time">2013 - 2009</span>
                                <h3 class="title">SMK Islamic Development Network</h3>
                                <p>
                                    saya masuk di IDN pada tahun 2019, saya mengikuti kelas full IT dan mempelajari
                                    banyak bahasa seperti: HTML, CSS, Javascript, PHP, Laravel, dan Java,Kotlin,Database
                                </p>
                            </div>
                        </div>

                        <!-- main line -->
                        <span class="line"></span>

                    </div>

                </div>

                <div class="col-md-6">

                    <!-- responsive spacer -->
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>

                    <!-- timeline wrapper -->
                    <div class="timeline exp bg-dark rounded shadow-light padding-30 overflow-hidden">

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp">
                            <div class="content">
                                <span class="time">2019 - Present</span>
                                <h3 class="title">Wibi Digital</h3>
                                <p>
                                    Saya bekerja di Wibi Digital sebagai Backend Developer, saya membuat API untuk
                                    aplikasi mobile dan web, saya juga membuat beberapa aplikasi web menggunakan Laravel
                                </p>
                            </div>
                        </div>

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
                            <div class="content">
                                <span class="time">2017 - 2013</span>
                                <h3 class="title">Heptaco Digital Media</h3>
                                <p>
                                    Saya bekerja di Heptaco Digital Media sebagai Backend Developer, saya membuat API
                                    untuk aplikasi mobile dan web, saya juga membuat beberapa aplikasi web menggunakan
                                    Laravel
                                </p>
                            </div>
                        </div>

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
                            <div class="content">
                                <span class="time">2013 - 2009</span>
                                <h3 class="title">PT.Industri Telekomunikasi Indonesia (INTI)</h3>
                                <p>
                                    Saya magang di PT.Industri Telekomunikasi Indonesia (INTI) sebagai Backend
                                    Developer, saya membuat Web Admin, saya juga membuat beberapa aplikasi web
                                    menggunakan Laravel
                                </p>
                            </div>
                        </div>

                        <!-- main line -->
                        <span class="line"></span>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- section works -->
    <section id="works">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Recent works</h2>

            <div class="spacer" data-height="60"></div>

            <!-- portfolio filter (desktop) -->
            <ul class="portfolio-filter list-inline wow fadeInUp">
                <li class="current list-inline-item" data-filter="*">Everything</li>
                <li class="list-inline-item" data-filter=".creative">Kantor</li>
                <li class="list-inline-item" data-filter=".art">FreeLance</li>
                <li class="list-inline-item" data-filter=".design">Charity</li>
            </ul>

            <!-- portfolio filter (mobile) -->
            <div class="pf-filter-wrapper">
                <select class="portfolio-filter-mobile">
                    <option value="*">Everything</option>
                    <option value=".creative">Kantor</option>
                    <option value=".art">FreeLance</option>
                    <option value=".design">Charity</option>
                </select>
            </div>

            <!-- portolio wrapper -->
            <div class="row portfolio-wrapper">

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item art">
                    <a href="https://via.placeholder.com/330x267" class="work-image">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Art</span>
                                <h4 class="title">Project Managment Illustration</h4>
                                <span class="more-button"><i class="icon-magnifier-add"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="https://via.placeholder.com/330x267" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item creative design">
                    <a href="#small-dialog" class="work-content">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Creative</span>
                                <h4 class="title">Guest App Walkthrough Screens</h4>
                                <span class="more-button"><i class="icon-options"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="https://via.placeholder.com/330x267" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="small-dialog" class="white-popup zoom-anim-dialog mfp-hide">
                        <img src="https://via.placeholder.com/590x280" alt="Title" />
                        <h2>Guest App Walkthrough Screens</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam hendrerit nibh in massa semper
                            rutrum. In rhoncus eleifend mi id tempus.</p>
                        <p>Donec consectetur, libero at pretium euismod, nisl felis lobortis urna, id tristique nisl
                            lectus eget ligula.</p>
                        <a href="#" class="btn btn-default">View on Dribbble</a>
                    </div>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item branding">
                    <a href="https://www.youtube.com/watch?v=qf9z4ulfmYw" class="work-video">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Branding</span>
                                <h4 class="title">Delivery App Wireframe</h4>
                                <span class="more-button"><i class="icon-camrecorder"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="https://via.placeholder.com/330x267" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item creative">
                    <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/240233494&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
                        class="work-video">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Creative</span>
                                <h4 class="title">Onboarding Motivation</h4>
                                <span class="more-button"><i class="icon-music-tone-alt"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="https://via.placeholder.com/330x267" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item art branding">
                    <a href="#gallery-1" class="gallery-link">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Art, Branding</span>
                                <h4 class="title">iMac Mockup Design</h4>
                                <span class="more-button"><i class="icon-picture"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="https://via.placeholder.com/330x267" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="gallery-1" class="gallery mfp-hide">
                        <a href="https://via.placeholder.com/330x267"></a>
                        <a href="https://via.placeholder.com/330x267"></a>
                    </div>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item creative design">
                    <a href="https://themeforest.net/user/pxlsolutions/portfolio" target="_blank">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Creative, Design</span>
                                <h4 class="title">Game Store App Concept</h4>
                                <span class="more-button"><i class="icon-link"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="https://via.placeholder.com/330x267" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <!-- more button -->
            <div class="load-more text-center mt-4">
                <a href="javascript:" class="btn btn-default"><i class="fas fa-spinner"></i> Load more</a>
                <!-- numbered pagination (hidden for infinite scroll) -->
                <ul class="portfolio-pagination list-inline d-none">
                    <li class="list-inline-item">1</li>
                    <li class="list-inline-item"><a href="works-2.html">2</a></li>
                </ul>
            </div>

        </div>

    </section>

    <!-- section testimonials -->
    <section id="testimonials">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Clients & Reviews</h2>

            <div class="spacer" data-height="60"></div>

            <!-- testimonials wrapper -->
            <div class="testimonials-wrapper">

                <!-- testimonial item -->
                <div class="testimonial-item text-center mx-auto">
                    <div class="thumb mb-3 mx-auto">
                        <img src="https://via.placeholder.com/90x90" alt="customer-name" />
                    </div>
                    <h4 class="mt-3 mb-0">Keysya</h4>
                    <span class="subtitle">Product designer at Dribbble</span>
                    <div class="bg-dark padding-30 shadow-light rounded triangle-top position-relative mt-4">
                        <p class="mb-0">I enjoy working with the theme and learn so much. You guys make the process fun
                            and interesting. Good luck! 👍</p>
                    </div>
                </div>

                <!-- testimonial item -->
                <div class="testimonial-item text-center mx-auto">
                    <div class="thumb mb-3 mx-auto">
                        <img src="https://via.placeholder.com/90x90" alt="customer-name" />
                    </div>
                    <h4 class="mt-3 mb-0">Faruq</h4>
                    <span class="subtitle">Product designer at Dribbble</span>
                    <div class="bg-dark padding-30 shadow-light rounded triangle-top position-relative mt-4">
                        <p class="mb-0">I enjoy working with the theme and learn so much. You guys make the process fun
                            and interesting. Good luck! 🔥</p>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="https://via.placeholder.com/100x30" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="https://via.placeholder.com/100x30" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="https://via.placeholder.com/100x30" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="https://via.placeholder.com/100x30" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="https://via.placeholder.com/100x30" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="https://via.placeholder.com/100x30" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="https://via.placeholder.com/100x30" alt="client-name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img src="https://via.placeholder.com/100x30" alt="client-name" />
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- section contact -->
    <section id="contact">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Get In Touch</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-4">
                    <!-- contact info -->
                    <div class="contact-info">
                        <h3 class="wow fadeInUp">Let's talk about everything!</h3>
                        <p class="wow fadeInUp">Don't like forms? Send me an <a
                                href="mailto:name@example.com">email</a>. 👋</p>
                    </div>
                </div>

                <div class="col-md-8">
                    <!-- Contact Form -->
                    <form id="contact-form" class="contact-form mt-6" method="post" action="form/contact.php">

                        <div class="messages"></div>

                        <div class="row">
                            <div class="column col-md-6">
                                <!-- Name input -->
                                <div class="form-group">
                                    <input type="text" class="form-control" name="InputName" id="InputName"
                                        placeholder="Your name" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-6">
                                <!-- Email input -->
                                <div class="form-group">
                                    <input type="email" class="form-control" id="InputEmail" name="InputEmail"
                                        placeholder="Email address" required="required" data-error="Email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-12">
                                <!-- Email input -->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="InputSubject" name="InputSubject"
                                        placeholder="Subject" required="required" data-error="Subject is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-12">
                                <!-- Message textarea -->
                                <div class="form-group">
                                    <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5"
                                        placeholder="Message" required="required"
                                        data-error="Message is required."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Send
                            Message</button><!-- Send Button -->

                    </form>
                    <!-- Contact Form end -->
                </div>

            </div>

        </div>

    </section>

    <div class="spacer" data-height="96"></div>

</main>

<!-- Go to top button -->
<a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>
@include('partials._js')
