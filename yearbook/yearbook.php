<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .heading {
            background-image: url("imgs/1st page-01.jpg");
            height: 80vh;
            background-position: center bottom;
            background-repeat: no-repeat;
            background-size: cover;
            font-size: 4.5em;
            color: white;
        }

        .gradient-1 {
            height: 20vh;
            background: linear-gradient(#b3653c, #2b1a45);
        }

        .content {
            background-image: url("imgs/night-01.jpg");
            height: 100vh;
            background-position: center top;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .content-text {
            color: white;
            border-radius: 10px;
            background-color: rgba(100, 149, 237, 0.2);
            margin-top: 10%;
            box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.4);
        }

        .content-text h1 {
            color: rgb(25, 25, 112);
            font-size: 3rem;
        }

        .content-text h4 {
            font-size: 1.3em;
        }

        .yearbooks {
            background: url("imgs/bricks_Mesa de trabajo 1.jpg"),
                url("");
            height: 100%;
            background-position: center bottom;
            background-repeat: no-repeat;
            background-size: cover;
            font-size: 7rem;
            color: white;
        }

        .book img {
            height: 400px;
            width: 100%;
            max-width: 300px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <section class="heading ">
        <div class="container-fluid" style="max-width:1400px">
            <div class="row" style="height: 100vh;">
                <div class="col-md-6 px-6 align-self-center">
                    Yearbook<br />
                </div>
            </div>
        </div>
    </section>
    <section class="gradient-1"></section>
    <section class="content ">
        <div class="container-fluid" style="max-width:1400px">
            <div class="row px-md-5 px-2">
                <div class="col-md-6 col-x-12 py-4 content-text">
                    <div class="px-3 py-1">
                        <h1 class="">About</h1>
                        <div class="progress ">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="">The yearbook is a dedicated volume that captures the nostalgic memories of the graduating batch of our Institute. The beautiful years spent in the Institute are engraved and expressed via photos and writeups which is given as a souvenir of departure from the Institute. Few years down the road when they will walk down the memory lane,
                            the yearbook will be the light which will lit up the faded memories and show the path through the old forgotten ways
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="yearbooks">
        <div class="container-fluid">
            <div class="row-xs-12 py-4" style="text-align: center;">
                <div class="col">
                    <p style="font-size: 50px;">The Yearbooks</p>
                </div>
            </div>
            <div class="row-xs-12 py-4">
                <div class="col-md-6 col-xs-12 px-5 book">
                    <img src="imgs\yearbook\year2012.jpg">
                </div>
            </div>
            <div class="row-xs-12 py-4 justify-content-end">
                <div class="col-md-6 col-xs-12 book">
                    <img src="imgs\yearbook\year2012.jpg">
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>