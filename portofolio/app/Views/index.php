<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="rahman">

    <title>Rahman's Portfolio</title>

    <link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>css/unicons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>css/owl.theme.default.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="<?= base_url(); ?>css/tooplate-style.css">

    <!--

Tooplate 2115 Marvel

https://www.tooplate.com/view/2115-marvel

-->
</head>

<body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="/android-chrome-512x512.png" style="max-width: 5rem"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link"><span data-hover="About">About</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link"><span data-hover="Projects">Projects</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link"><span data-hover="Resume">Resume</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link"><span data-hover="Contact">Contact</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-4">
                        <div class="color-mode d-lg-flex justify-content-center align-items-center">
                            <i class="color-mode-icon"></i>
                            Color mode
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <small class="small-text">Welcome to <span class="mobile-block">my portfolio website!</span></small>
                        <h1 class="animated animated-text">
                            <span class="mr-2">Hi world, I'm</span>
                            <div class="animated-info">
                                <span class="animated-item">A. Rahman M.</span>
                                <span class="animated-item">a Web Developer</span>
                                <span class="animated-item">a Data Analyst</span>
                                <span class="animated-item">an IT Technician</span>
                                <span class="animated-item">a Web Analyst</span>
                            </div>
                        </h1>

                        <p>As a Full-Stack Developer with 4 years of experience, I have gained extensive experience in developing various web applications using different frameworks such as Laravel, CodeIgniter, WordPress, and ExpressJS. Additionally, I possess experience in using various styling tools like Tailwind and Bootstrap. In my current role, I am responsible for designing system flows, creating database relations, developing APIs, and presenting to superiors before and after project completion.</p>

                        <div class="custom-btn-group mt-4">
                            <a href="<?= base_url(); ?>images/RAHMAN NEW CV.pdf" target="_blank" class="btn mr-lg-2 custom-btn"><i class='uil uil-file-alt'></i> Download Resume</a>
                            <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">Get a free quote</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="<?= base_url(); ?>images/undraw/hands.svg" class="img-fluid" alt="svg image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="project py-5" id="project">
        <div class="container">

            <div class="row">
                <div class="col-lg-11 text-center mx-auto col-12">

                    <div class="col-lg-8 mx-auto">
                        <h2>Publicly Released Projects I Have Built</h2>
                    </div>

                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="project-info">
                                <img src="<?= base_url(); ?>images/project/project-propnexplus.png" class="img-fluid" alt="project image">
                            </div>
                        </div>

                        <div class="item">
                            <div class="project-info">
                                <img src="<?= base_url(); ?>images/project/project-arraya.png" class="img-fluid" alt="project image">
                            </div>
                        </div>

                        <div class="item">
                            <div class="project-info">
                                <img src="<?= base_url(); ?>images/project/project-propnexplus-app.png" class="img-fluid" alt="project image">
                            </div>
                        </div>

                        <div class="item">
                            <div class="project-info">
                                <img src="<?= base_url(); ?>images/project/project-gapihs.png" class="img-fluid" alt="project image">
                            </div>
                        </div>

                        <div class="item">
                            <div class="project-info">
                                <img src="<?= base_url(); ?>images/project/project-propnex.png" class="img-fluid" alt="project image">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <h2 class="mb-4">Experiences</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2021</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Full Stack Developer</span><small>PropNex</small></h3>
                                <p>Providing API development, server and web/app maintenance, as well as conducting thorough reviews and deploying team works to production.</p>
                            </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2020</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Jr. Full Stack Developer</span><small>PropNex</small></h3>
                                <p>My responsibilities include creating queries and table relations for all menus, documenting all functions and APIs used in all PropNex web and app development, upgrading and maintaining web servers and frameworks, and creating traffic reports to improve overall system performance.</p>
                            </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2019</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Front End Web developer</span><small>PropNex</small></h3>
                                <p>Creating a website page that is easy to use and efficient. Adding interaction with Google Webmaster and determining keywords on each page to get more traffic from Google Search.</p>
                            </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2018</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Web Designer<small>Jasa ERP</small></h3>
                                <p>Create design from client needs and make mock up from it.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <h2 class="mb-4 mobile-mt-2">Educations</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2021</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Udacity</span><small>Personal Course</small></h3>
                                <p> Full Stack Web Developer, The goal of the program is to equip learners with the unique skills they need to build database-backed APIs and web applications.</p>
                            </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2019</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Digitalent</span><small>Govt. Program</small></h3>
                                <p>Mechine Learning Course, Here I sharpened my computer vision skills using Python, TensorFlow, and Keras to master the art of learning and decision-making.</p>
                            </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2018</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Computer Engineering</span><small>Bachelor Degree</small></h3>
                                <p>Computer Engineering is the backbone of the modern digital world. It involves the design, development, and maintenance of computer systems, from hardware to software, with the ultimate goal of creating innovative solutions that make our lives easier and more efficient. With Computer Engineering, the possibilities are endless, and the future is full of endless opportunities for innovation and advancement.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact py-5" id="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 mr-lg-5 col-12">
                    <div class="google-map w-100">
                        <iframe height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=300&height=400&hl=en&q=Jl.%20Gubeng%20Kertajaya%20I%20Raya%20No.6,%20Gubeng,%20Kec.%20Gubeng,%20Kota%20SBY,%20Jawa%20Timur%2060282+(Koala%20Jahat)&t=&z=18&ie=UTF8&iwloc=B&output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on map</a></iframe>
                    </div>

                    <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                        <div class="contact-info-item">
                            <h3 class="mb-3 text-white">Say hello</h3>
                            <p class="footer-text mb-0"><a href="https://wa.me/6281803793442" target="_blank">+6281803793442</a></p>
                            <p><a href="mailto:rahman@koalajahat.my.id">rahman@koalajahat.my.id</a></p>
                        </div>

                        <ul class="social-links">
                            <!-- <li><a href="#" target="_blank" class="uil uil-dribbble" data-toggle="tooltip" data-placement="left" title="Dribbble"></a></li> -->
                            <li><a href="https://www.instagram.com/achmadrahmanm/" target="_blank" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram"></a></li>
                            <li><a href="https://github.com/achmadrahmanm" target="_blank" class="uil uil-processor" data-toggle="tooltip" data-placement="left" title="Project"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="contact-form">
                        <h2 class="mb-4">Interested to work together? Let's talk</h2>

                        <form action="<?= base_url(); ?>send_email" method="post">
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="phone" class="form-control" name="phone" placeholder="Phone" id="phone">
                                </div>


                                <div class="col-12">
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                                </div>

                                <div class="ml-lg-auto col-lg-5 col-12">
                                    <input type="submit" class="form-control submit-btn" value="Send Button">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer py-5 d-none">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <p class="copyright-text text-center">Copyright &copy; 2019 Company Name . All rights reserved</p>
                    <p class="copyright-text text-center">Designed by <a rel="nofollow" href="https://www.facebook.com/tooplate">Tooplate</a></p>
                </div>

            </div>
        </div>
    </footer>

    <script src="<?= base_url(); ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url(); ?>js/popper.min.js"></script>
    <script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>js/Headroom.js"></script>
    <script src="<?= base_url(); ?>js/jQuery.headroom.js"></script>
    <script src="<?= base_url(); ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>js/smoothscroll.js"></script>
    <script src="<?= base_url(); ?>js/custom.js"></script>

</body>

</html>