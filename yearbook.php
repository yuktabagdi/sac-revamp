<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/yearbook.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <style>
        .heading {
            align-self: center;
            color: white;
        }

        .yearbooks {
            background-color: blanchedalmond;
            background:linear-gradient(#02386E,white);
        }

        .card {
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            height: 450px;
            background:linear-gradient(#02386E,white);
        }

        .book {
            margin-left: 30%;
            height: 300px;
            width: 33%;
            position: absolute;
        }

        .book img {
            height: 100%;
            object-fit: center;
            width: 100%;
        }
    </style>
</head>

<body>



    <header>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-7 col-sm-12  text-white">
                    <h1 style="text-align: left;">  YearBook</h1>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <h1>YearBook</h1>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="pt-4">
                                The yearbook is a dedicated volume that captures the
                                nostalgic memories of the graduating batch of our Institute.
                                The beautiful years spent in the Institute are engraved and expressed via photos
                                and writeups which is given as a souvenir of departure from the Institute. Few years down the road when
                                they will walk down the memory lane,
                                the yearbook will be
                                the light which will lit up the faded memories and show the path through the old forgotten ways

                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="pray">
                            <br><br><br><br>
                            <img src="img/sam/sam_about.jpg" alt="Pray" class="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-2 ">
            <div class="container-fluid library">
                <div class="row justify-content-center">
                    <div class="col-xs-12">
                        <h1 class="heading display-1" style="font-size: 4.5em;">The Yearbooks</h1>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-9 py-5">
                        <div id="carouselExampleIndicators" class="carousel slide yearbooks" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="container-fluid">
                                        <div class="row-12 ">
                                            <div class="col-12">
                                            <h1 style="text-align: center;">YearBook 2017</h1>
                                            </div>
                                        </div>
                                        <div class="row px-4">
                                            <div class="col-md-8 col-xs-12 px-2 py-4 card">
                                                <div class="book">
                                                    <img src="img\yearbook\year17.jpg">
                                                    <h2 style="text-align: center;color:white;background-color:blue;">UG</h2>
                                                </div>
                                                <div class="book">
                                                    <img src="img\yearbook\year17.jpg">
                                                    <h2 style="text-align: center;color:white;background-color:red;">PG</h2>
                                                </div>
                                                <div class="book">
                                                    <img src="img\yearbook\year17.jpg">
                                                    <h2 style="text-align: center;color:white;background-color:green;">Research</h2>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-4 px-2 py-4 col-xs-12 align-self-center">
                                                <h4>Lorem, ipsum dolor sit ame modi totam voluptatum eius nulla
                                                    aliquid earum consequuntur obcaecati hic dolore tenetur porro
                                                    distinctio! Sit, vel voluptas?</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="container-fluid">
                                    <div class="row-12 ">
                                            <div class="col-12">
                                            <h1 style="text-align: center;">YearBook 2016</h1>
                                            </div>
                                        </div>
                                        <div class="row px-4">
                                            <div class="col-md-8 px-2 py-4 card">
                                                <div class="book">
                                                    <img src="img\yearbook\year16.jpg">
                                                    <h2 style="text-align: center;color:white;background-color:blue;">UG</h2>
                                                </div>
                                                <div class="book">
                                                    <img src="img\yearbook\year16.jpg">
                                                    <h2 style="text-align: center;color:white;background-color:red;">PG</h2>
                                                </div>
                                                <div class="book">
                                                    <img src="img\yearbook\year16.jpg">
                                                    <h2 style="text-align: center;color:white;background-color:green;">Research</h2>
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-2 py-4 align-self-center">
                                                <h4>Lorem, ipsum dolor sit ame modi totam voluptatum eius nulla
                                                    aliquid earum consequuntur obcaecati hic dolore tenetur porro
                                                    distinctio! Sit, vel voluptas?</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="container-fluid">
                                    <div class="row-12 ">
                                            <div class="col-12">
                                            <h1 style="text-align: center;">YearBook 2015</h1>
                                            </div>
                                        </div>
                                        <div class="row px-4">
                                            <div class="col-md-8 px-2 py-4 card">
                                                <div class="book">
                                                    <img src="img\yearbook\year2015.jpg">
                                                    <h2 style="text-align: center;color:white;background-color:blue;">UG</h2>
                                                </div>
                                                <div class="book">
                                                    <img src="img\yearbook\year2015.jpg">
                                                    <h2 style="text-align: center;color:white;background-color:red;">PG</h2>
                                                </div>
                                                <div class="book">
                                                    <img src="img\yearbook\year2015.jpg">
                                                    <h2 style="text-align: center;color:white;background-color:green;">Research</h2>
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-2 py-4 align-self-center">
                                                <h4>Lorem, ipsum dolor sit ame modi totam voluptatum eius nulla
                                                    aliquid earum consequuntur obcaecati hic dolore tenetur porro
                                                    distinctio! Sit, vel voluptas?</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="container-fluid">
                                    <div class="row-12 ">
                                            <div class="col-12">
                                            <h1 style="text-align: center;">YearBook 2014</h1>
                                            </div>
                                        </div>
                                        <div class="row px-4">

                                            <div class="col-md-8 px-2 py-4 card">
                                                <div class="book">
                                                    <img src="img\yearbook\year2014.jpg">
                                                    <h2 style="text-align: center;color:white;background-color:blue;">UG</h2>
                                                </div>
                                                <div class="book">
                                                    <img src="img\yearbook\year2014.jpg">
                                                    <h2 style="text-align: center;color:white;background-color:red;">PG</h2>
                                                </div>
                                                <div class="book">
                                                    <img src="img\yearbook\year2014.jpg">
                                                    <h2 style="text-align: center;color:white;background-color:green;">Research</h2>
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-2 py-4 align-self-center">
                                                <h4>Lorem, ipsum dolor sit ame modi totam voluptatum eius nulla
                                                    aliquid earum consequuntur obcaecati hic dolore tenetur porro
                                                    distinctio! Sit, vel voluptas?</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="container-fluid">
                                    <div class="row-12 ">
                                            <div class="col-12">
                                            <h1 style="text-align: center;">YearBook 2013</h1>
                                            </div>
                                        </div>
                                        <div class="row px-4">
                                            <div class="col-md-8 px-2 py-4 card">
                                                <div class="book">
                                                    <img src="img\yearbook\year2013.jpg">
                                                    <h2 style="text-align: center;color:white;background-color:blue;">UG</h2>
                                                </div>
                                                <div class="book">
                                                    <img src="img\yearbook\year2013.jpg">
                                                    <h2 style="text-align: center;color:white;background-color:red;">PG</h2>
                                                </div>
                                                <div class="book">
                                                    <img src="img\yearbook\year2013.jpg">
                                                    <h2 style="text-align: center;color:white;background-color:green;">Research</h2>
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-2 py-4 align-self-center">
                                                <h4>Lorem, ipsum dolor sit ame modi totam voluptatum eius nulla
                                                    aliquid earum consequuntur obcaecati hic dolore tenetur porro
                                                    distinctio! Sit, vel voluptas?</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- 		Footer start -->
        <?php include 'footer.php' ?>
        <!--        Footer end -->
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

            var card = document.getElementsByClassName("card");
            var book = document.getElementsByClassName("book");

            

            for (let i = 0; i < card.length; i++) {
                $(card[i]).on('mouseenter', function(e) {
                    gsap.to($(book[i * 3]), 1, {
                        xPercent: -70,
                        ease: Sine.easeInOut
                    });
                    gsap.to($(book[i * 3 + 2]), 1, {
                        xPercent: +70,
                        ease: Sine.easeInOut
                    });
                });
                $(card[i]).on('mouseleave', function(e) {
                    gsap.to($(book[i * 3]), 1, {
                        xPercent: 0,
                        ease: Sine.easeInOut
                    });
                    gsap.to($(book[i * 3 + 2]), 1, {
                        xPercent: 0,
                        ease: Sine.easeInOut
                    });
                });
            }
        </script>
</body>

</html>