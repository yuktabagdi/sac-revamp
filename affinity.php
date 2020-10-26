<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Alumni Talks</title>

  <!--CSS only-->
  <link rel="stylesheet" href="css/affinity.css">
  <!--font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!--GSAP core plugin-->
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>

  <!--GSAP scroll trigger-->
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>
</head>

<body>
  <header>
    <div class="container text-center">
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">
          <h1 style="text-align: left;">AFFINITY PROGRAMME</h1>
          <h6 style="text-align: left;">SAC initiative</h6>
        </div>
      </div>
    </div>
  </header>
  <section class="section-1">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="panel text-left">
            <h1>AFFINITY PROGRAMME</h1>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
            <p class="pt-4">
              Students' Alumni Cell is a pioneer in volunteer-based organisations,
              since it's inception it has strived towards building connections between the
              students and the alumni community. One of the only initiative of its kind in
              the institute is the IIT Kharagpur Affinity Programme, an initiative that is
              undertaken by the SAC to benefit the entire KGP community ie. alumni and
              students alike. We strive towards establishing strong and firm relations
              with multinational companies by establishing two-way ties in which they provide
              KGPians with incentives and unimaginable discounts on goods and services and
              in return these companies benefit by gaining a huge client base an unprecedented
              marketing. Thus, this initiative is an excellent way to help instigate a
              feeling of privilege and pride to be part of the IIT Kharagpur community.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="pray">
            <br><br><br><br>
            <img src="img/guest-lecture/alumnitalks-2019-2.jpg" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-2">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12 col-12">
          <div class="panel panel1 text-center">
            <h1 class="x">Current Associations</h1>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-4">
                <div class="service-card">
                  <div class="card">
                    <img class="card-img-top" src="img\affinity\samsung.jpg" alt="Card image cap" style='height:14.4em;'>
                    <img class="card-img-top" src="img\affinity\Galaxy_buds.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="service-card">
                  <div class="card">
                    <img class="card-img-top" src="img\affinity\a_v2.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="service-card">
                  <div class="card">
                    <img class="card-img-top" src="img\affinity\geek.png" alt="Card image cap">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-2">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12 col-12">
          <div class="panel panel1 text-center">
            <h1 class="x">Previous Associations</h1>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-2">

              </div>
              <div class="col-sm-4">
                <div class="service-card">
                  <div class="card" >
                    <img class="card-img-top" src="img\affinity\hdfc.png" alt="Card image cap"  >
                  </div>
                </div>
              </div>
              <br>
              <div class="col-sm-4">
                <div class="service-card">
                  <div class="card" >
                    <img class="card-img-top" src="img\affinity\Oyo.jpg" alt="Card image cap" >
                  </div>
                </div>
              </div>
              <div class="col-sm-2">

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!--footer start-->
 <?php include 'footer.php' ?>
  </main>
  <!-- 	Footer end	 -->
  <script>
    gsap.from('header', { opacity: 0, duration: 1 })
    gsap.from('header h1', { opacity: 0, duration: 2, x: -200 })
    gsap.from('header h6', { opacity: 0, duration: 2, x: -500 })

    gsap.registerPlugin(ScrollTrigger);

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
          start: "top center",
          toggleActions: "play none none none",
        },
        opacity: 0,
        duration: 1.5,
      });

    }
    gsap.utils.toArray('#panel').forEach((panel, i) => {
      ScrollTrigger.create({
        trigger: panel,
        start: "top top",
        pin: true,
        pinSpacing: false
      });
    });
  </script>














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
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>


</body>

</html>
