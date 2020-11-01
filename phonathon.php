<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phonathon</title>
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--CSS ONLY-->
    <link rel="stylesheet" href="css/phonathon.css">

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!--GSAP core plugin-->
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>

    <!--GSAP scroll trigger-->
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>

</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="img/phonathon/sac_logo.png"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Events
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Students Alumni Meet</a>
                    <a class="dropdown-item" href="#">Alumni Meet</a>
                    <a class="dropdown-item" href="#">Homecomming</a>
                    <a class="dropdown-item" href="#">Phonathon</a>
                    <a class="dropdown-item" href="#">Leadership Summit</a>
                    <a class="dropdown-item" href="#">Alumni Talks</a>
                    <a class="dropdown-item" href="#">ALVIDA</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Initiatives
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">SAMP</a>
                    <a class="dropdown-item" href="#">SPARC</a>
                    <a class="dropdown-item" href="#">MYIMPRINT</a>
                    <a class="dropdown-item" href="#">ACAP</a>
                    <a class="dropdown-item" href="#">Alumni Blog</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Publications
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Yearbook</a>
                    <a class="dropdown-item" href="#">Yearnings of Yore</a>
                    <a class="dropdown-item" href="#">Tempo Shout</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">The Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Alumni-Reg</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Sponsors
                </a>
                <div class="dropdown-menu" style="padding-right: 50px !important;"
                    aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">2019</a>
                    <a class="dropdown-item" href="#">2018</a>
                    <a class="dropdown-item" href="#">2017</a>
                    <a class="dropdown-item" href="#">2016</a>
                    <a class="dropdown-item" href="#">2015</a>
                    <a class="dropdown-item" href="#">2014</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<body>
    <header>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-7 col-sm-12  text-white gsapx">
                    <h1 style="text-align: left;"></h1><!--spacing left for heading if required-->
                    <h6 style="text-align: left;"></h6>
                </div>
            </div>
        </div>
    </header>
    <script>
        gsap.registerPlugin(ScrollTrigger);
        gsap.from(".gsapx", {
            scrollTrigger: {
                trigger: ".gsapx",
                start: "top center",
                toggleActions: "play play play play"
            },
            opacity: 0,
            duration: 2
        });
    </script>

    <main>
        <section class="section-1">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="panel text-left">
                            <h1 class="gsap1">ABOUT</h1>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="pt-4 gsap1">
                                Phonathon is an initiative of Students’ Alumni Cell which helps in Institute development
                                under the Endowment Campaign while serving as a platform for the alumni to give back to
                                the alma mater. In various avenues like developing centers of excellence for innovative
                                research, recruiting world-class faculties, students scholarships etc; this event
                                benefits the institute. In our continuous efforts to expand the alumni network, bringing
                                forward conversations of first year students with the alumni supports our efforts as
                                well as provides the students with a unique opportunity to interact with the alumni as
                                well as contribute to the development of the institute.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-items-center">
                        <div class="pray">
                            <br><br><br><br>
                            <img src="img/phonathon/phonathon21.jpg" class="gsap1 img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Scroll animations for above section-->
        <script>
            gsap.registerPlugin(ScrollTrigger);
            gsap.from(".gsap1", {
                scrollTrigger: {
                    trigger: ".gsap1",
                    start: "top center",
                    toggleActions: "play play play play"
                },
                opacity: 0,
                duration: 2
            });
        </script>
        <section>
            <div class="container section-inner">
                <div class="row align-items-center">
                    <div class="col-12 text-center text-black">
                        <h1 class="font-weight-bold gsap2">Phonathon 4.0
                        </h1>
                        <div class="progress gsap2">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                    </div>
                </div>
                <div id="gallery_row" class="row align-items-center gsap2">
                    <div class="col-12 text-center col-sm-3">
                        <img class="img-fluid phonathon4_images" src="img/phonathon/phonathon42.jpg" height="auto">
                    </div>
                    <div class="col-12 text-center col-sm-6">
                        <img class="img-fluid phonathon4_images" src="img/phonathon/phonathon41.jpg" height="auto">
                    </div>
                    <div class="col-12 text-center col-sm-3">
                        <img class="img-fluid phonathon4_images" src="img/phonathon/phonathon42.jpg" height="auto">
                    </div>
                </div>
            </div>
        </section>
        <!--animations of Phonathon 4.0-->
        <script>
            gsap.registerPlugin(ScrollTrigger);
            gsap.from(".gsap2", {
                scrollTrigger: {
                    trigger: ".gsap2",
                    start: "top center",
                    toggleActions: "play play play play"
                },
                opacity: 0,
                duration: 2
            });

        </script>
        <section>
            <div class="container h-100 section-inner">
                <div class="row align-items-center">
                    <br><br><br><br><br><br>
                    <div class="col-12 text-center text-black">
                        <h1 class="font-weight-bold gsap3" style="font-family: 'Raleway', sans-serif;">Phonathon
                            3.0
                        </h1>
                        <div class="progress gsap3">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                        <img src="img/phonathon/phonathon31.jpg" class="img-fluid gsap3" height="auto" width="70%"
                            style="max-width: 100%;">
                    </div>
                </div>
                <br><br><br>
            </div>
        </section>
        <script>
            gsap.registerPlugin(ScrollTrigger);
            gsap.from(".gsap3", {
                scrollTrigger: {
                    trigger: ".gsap3",
                    start: "top center",
                    toggleActions: "play play play play"
                },
                opacity: 0,
                duration: 2
            });
        </script>
        <section>
            <div class="row align-items-center text-black justify-content-center">
                <h1 style="font-family: 'Raleway', sans-serif;">
                    TESTIMONIALS</h1>
            </div>
            <br><br>

            <div class="row align-items-center" style="margin-bottom: 5%;">
                <div class="col-12 col-sm-4 offset-sm-1">
                    <img src="img/phonathon/2.0/6.jpg" width="100%" height="auto" class="testimonial3_images">
                </div>
                <div class="col-12 col-sm-6 text-black">
                    <h1 class="font-weight-bold testimonial3_images testimonialheadingleft">Anmol Thakkar</h1>
                    <h2 class="font-weight-bold testimonial3_images testimonialheadingleft" style="color: grey;">batch
                        of '20</h2>
                    <div class="card c1 testimonialcaptionsleft testimonial3_images">
                        <div class="card-body mr-auto">
                            <p class="card-text">It was quite a funda session for me with an alumnus who is an
                                entrepreneur. He shared some of the insights and his own experiences.Do you have a
                                dream? he asked. Don't worry about success or failure | Jump in | This is the time of
                                your life when you
                                should take risks. He was stressing the fact that it's you who matters. Its in the
                                little steps that you
                                take,result into success.


                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row my-1 align-items-center bigscreenvisible" style="margin-top: 5%; margin-bottom: 5%;">
                <div class="col-12 col-sm-6 offset-sm-1 text-black">
                    <h1 class="font-weight-bold testimonial2-images1 testimonialheadingright">Md Zaman Khan</h1>
                    <h2 class="font-weight-bold testimonial2-images1 testimonialheadingright" style="color: grey;">batch
                        of '20</h2>
                    <div class="card c2 testimonialcaptionsright testimonial2-images1">
                        <div class="card-body ml-auto">
                            <p class="card-text">Varied feedbacks but most of the alumni were pretty concerned about the
                                expected hike in the tuition fee.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <img src="img/phonathon/2.0/5.jpg" width="100%" height="auto" class="testimonial2-images1">
                </div>
            </div>
            <div class="row my-1 align-items-center smallscreenvisible" style="margin-top: 5%; margin-bottom: 5%;">
                <div class="col-12 col-sm-4 offset-sm-1">
                    <img src="img/phonathon/2.0/5.jpg" width="100%" height="auto" class="testimonial2-images1b">
                </div>
                <div class="col-12 col-sm-6  text-black">
                    <h1 class="font-weight-bold testimonial2-images1b testimonialheadingright">Md Zaman Khan</h1>
                    <h2 class="font-weight-bold testimonial2-images1b testimonialheadingright" style="color: grey;">
                        batch of '20</h2>
                    <div class="card c2 testimonialcaptionsright testimonial2-images1b">
                        <div class="card-body ml-auto">
                            <p class="card-text">Varied feedbacks but most of the alumni were pretty concerned about the
                                expected hike in the tuition fee.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  align-items-center" style="margin-top: 5%; margin-bottom: 5%;">
                <div class="col-12 col-sm-4 offset-sm-1">
                    <img src="img/phonathon/2.0/2.jpg" width="100%" height="auto" class="testimonial_images">
                </div>
                <div class="col-12 col-sm-6 text-black">
                    <h1 class="font-weight-bold testimonial_images testimonialheadingleft">Aman Verma</h1>
                    <h2 class="font-weight-bold testimonial_images testimonialheadingleft" style="color: grey;">batch of
                        '20</h2>
                    <div class="card c1 testimonialcaptionsleft testimonial_images">
                        <div class="card-body mr-auto">
                            <p class="card-text">It was an awesome experience , where I got to talk to the alumni and
                                also got to learn a lot of things. I had really interesting conversations with the
                                alumni, which made the whole event a lot of fun </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  align-items-center bigscreenvisible" style="margin-top: 5%;">
                <div class="col-12 col-sm-6 offset-sm-1 text-black">
                    <h1 class="font-weight-bold testimonial3-images1 testimonialheadingright">Neerav Jain</h1>
                    <h2 class="font-weight-bold testimonial3-images1 testimonialheadingright" style="color: grey;">batch
                        of '20</h2>
                    <div class="card c2 testimonialcaptionsright testimonial3-images1">
                        <div class="card-body ml-auto">
                            <p class="card-text">It was a pretty good talk with one of the alumni. We could connect
                                well, him being from the same town as mine. Overall, it was a great experience. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <img src="img/phonathon/2.0/8.jpg" width="100%" height="auto" class="testimonial3-images1">
                </div>
            </div>

            <div class="row  align-items-center smallscreenvisible" style="margin-top: 5%;">
                <div class="col-12 col-sm-4 offset-sm-1">
                    <img src="img/phonathon/2.0/8.jpg" width="100%" height="auto" class="testimonial3-images1b">
                </div>
                <div class="col-12 col-sm-6  text-black">
                    <h1 class="font-weight-bold testimonial3-images1b testimonialheadingright">Neerav Jain</h1>
                    <h2 class="font-weight-bold testimonial3-images1b testimonialheadingright" style="color: grey;">
                        batch of '20</h2>
                    <div class="card c2 testimonialcaptionsright testimonial3-images1b">
                        <div class="card-body ml-auto">
                            <p class="card-text">It was a pretty good talk with one of the alumni. We could connect
                                well, him being from the same town as mine. Overall, it was a great experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Scroll animations for testimonials section-->
        <script>
            gsap.registerPlugin(ScrollTrigger);

            gsap.from(".testimonial_images", {
                scrollTrigger: {
                    trigger: ".testimonial_images",
                    start: "top center",
                    toggleActions: "play play play play"
                },
                opacity: 0,
                duration: 1.5,
                x: -200,
                stagger: 0.4
            });

            gsap.from(".testimonial2-images1", {
                scrollTrigger: {
                    trigger: ".testimonial2-images1",
                    start: "top center",
                    toggleActions: "play play play play"
                },
                opacity: 0,
                duration: 1.5,
                x: 1200,
                stagger: 0.4
            });
            gsap.from(".testimonial2-images1b", {
                scrollTrigger: {
                    trigger: ".testimonial2-images1b",
                    start: "top center",
                    toggleActions: "play play play play"
                },
                opacity: 0,
                duration: 1.5,
                x: 1200,
                stagger: 0.4
            });

            gsap.from(".testimonial3_images", {
                scrollTrigger: {
                    trigger: ".testimonial3_images",
                    start: "top center",
                    toggleActions: "play play play play"
                },
                opacity: 0,
                duration: 1.5,
                x: -200,
                stagger: 0.1
            });


            gsap.from(".testimonial3-images1", {
                scrollTrigger: {
                    trigger: ".testimonial3-images1",
                    start: "top center",
                    toggleActions: "play play play play"
                },
                opacity: 0,
                duration: 1.5,
                x: 1200,
                stagger: 0.1
            });
            gsap.from(".testimonial3-images1b", {
                scrollTrigger: {
                    trigger: ".testimonial3-images1b",
                    start: "top center",
                    toggleActions: "play play play play"
                },
                opacity: 0,
                duration: 1.5,
                x: 1200,
                stagger: 0.1
            });

        </script>
    </main>
    <?php include 'footer.php' ?>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>