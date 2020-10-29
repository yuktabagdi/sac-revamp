<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/acap.css">
    <link rel="stylesheet" href="css/SAMP_mobile_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>

<body>

    <?php include 'navbar.php' ?>

    <header>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-7 col-sm-12  text-white">
                    <h1 style="text-align: left;">ALUMNI CAREER ASSISTANCE PROGRAMME</h1>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="section-1">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="panel text-left">
                            <h1>OVERVIEW</h1>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="pt-4">
                                Alumni Career Assistance Programme (ACAP) aims on helping the final year students to
                                understand the confusing and tedious process of placements. Each alumnus will be
                                allotted at most 5 mentees and, one mentee will be allotted a mentor based on the
                                preferences he/she has filled. This initiative will help the students in applying and
                                getting placed in various companies, and that too without any last minute chaos. This
                                Program also signifies the first of the Institute's attempt at engagement of the
                                recently graduated alumni with the Institute
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="pray">
                            <br><br><br>
                            <img src="img/acap/2.jpg" alt="Pray" class="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-1">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="panel text-left">
                            <h1 class="text-center">Register Here!</h1>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="pt-4">

                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Student</strong> - Fill the form specifying your top 3 companies in
                                    preference
                                    order.<br><br>

                                    <strong>Alumnus</strong> - Fill the form mentioning the company you are currently
                                    working for and the
                                    company you got placed in via the CDC recruitment procedure.<br><br>

                                    Each registered alumnus shall be allotted at most 5 mentees - forming a cohort by
                                    1st
                                    week of October.<br><br>

                                    An ice breaker session shall be organised for each cohort for initiating
                                    communication.<br><br>
                                </div>
                                <!-- Button trigger modal -->
                                <div class="col-md-6 text-center">
                                    <br>
                                    <br><br>
                                    <button type="button" class="btn btn-outline-primary btn-lg" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        Student Registration
                                    </button>
                                    <br><br><br>
                                    <button type="button" class="btn btn-outline-primary btn-lg" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        Alumni Registration
                                    </button>
                                </div>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- 		Footer start -->
    <?php include 'footer.php' ?>
    <!-- 	Footer end	 -->


    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>
    <script>
    gsap.from('header', {
        opacity: 0,
        duration: 1
    })
    gsap.from('header h1', {
        opacity: 0,
        duration: 2,
        x: -200
    })
    gsap.from('header h6', {
        opacity: 0,
        duration: 2,
        x: -500
    })


    gsap.from('.nav-item', {
        scrollTrigger: {
            trigger: '.nav-item',
            toggleActions: "play none none none"
        },
        opacity: 0,
        duration: 1,
        x: -200
    });


    gsap.from('.section-1 h1', {
        scrollTrigger: {
            trigger: '.section-1 h1',
            toggleActions: "play none none none"
        },
        opacity: 0,
        duration: 1,
        x: -200
    });

    gsap.from('.section-1 p', {
        scrollTrigger: {
            trigger: '.section-1 p',
            toggleActions: "play none none none"
        },
        opacity: 0,
        duration: 2.0,
    });

    gsap.from('.section-1 img', {
        scrollTrigger: {
            trigger: '.section-1 img',
            toggleActions: "play none none none"
        },
        opacity: 0,
        duration: 1.5,
        x: 200
    });

    var arr = document.getElementsByClassName("x");
    for (var i = 0; i < arr.length; i++) {

        gsap.from(arr[i], {
            scrollTrigger: {
                trigger: arr[i],
                toggleActions: "play none none none"
            },
            opacity: 0,
            duration: 1.5,
            x: -200
        });

    }
    var img_arr = document.getElementsByClassName("image");
    for (var i = 0; i < img_arr.length; i++) {

        gsap.from(img_arr[i], {
            scrollTrigger: {
                trigger: img_arr[i],
                toggleActions: "play none none none",
                start: "top center"
            },
            opacity: 0,
            duration: 1.5,
        });

    }

    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray('#panel').forEach((panel, i) => {
        ScrollTrigger.create({
            trigger: panel,
            start: "top top",
            pin: true,
            pinSpacing: false
        });
    });
    </script>
</body>

</html>