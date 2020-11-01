<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>SAC</title>
  <link rel="stylesheet" type="text/css" href="css/imprint.css">
</head>



<body>
  <section class="section0 mb-5">
     <?php include'navbar.php' ?>
	<header>
	<div class="container-fluid img">
	</div>
	</header>
  </section>




  <section class="section-1 mt-5 mb-5">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="panel text-left">
            <h1 class="one">MY IMPRINT</h1>
              
            <p class="pt-3 one">
              Ever since its inception, IIT Kharagpur has given its students outstanding academic resources, a brand to
              identify and reckon with, lasting friendships and countless memories over the years they have spent in its
              colossal campus. And along the same lines, its alumni too have had a long and eventful history of giving
              back to the institute for all it has done in making them what they are today. The My Imprint Class Gift
              Programme is yet another chapter to be added to the legacy that the Alumni leave behind.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="pray">
            <br><br><br><br>
            <img src="img/imprint.jpg" alt="Pray" class="two" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-1">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="pray">
            <br><br><br><br>
            <img src="img/imprint.jpg" alt="Pray" class="one" />
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="panel text-left">
            <h1 class="two">SENIOR CLASS GIFT</h1>
       
          
            <p class="pt-3 two">
              Under this programme, the graduating batches are given the chance to forfeit their caution deposits and
              the amount generated is partially utilized currently in making their Graduating Class Gift and partially
              goes towards endowment for future use albeit for students' services only. It is an opportunity for the
              soon-to-be alumni to get a head-start in paying their tributes to their alma mater.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>





  <main id="main">
    <div id="wrapper" class="pinContainer">
      <section class="item section-2" id="item-1">
        <div class="container text-center">
          <div class="row align-items-center">
            <div class="col-md-12 col-12">
              <div class="panel text-center">
                <h1 class="x">CLASS GIFT 2017</h1>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
                <div>
                  <img src="img/latest programs/cg17.jpg" class="img-fluid img-panel pt-3">
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

      <section class="item section-2" id="item-2">
        <div class="container text-center">
          <div class="row align-items-center">
            <div class="col-md-12 col-12">
              <div class="panel text-center">
                <h1 class="x">CLASS GIFT 2016</h1>
                <div class="progress ">
                  <div class="progress-bar " role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
                <div>
                  <img src="img/latest programs/cg16.jpg" class="img-fluid img-panel pt-3">
                </div>

              </div>
            </div>
          </div>
		  </div>
      </section>

      <section class="item section-2" id="item-3">
        <div class="container text-center">
          <div class="row align-items-center">
            <div class="col-md-12 col-12">
              <div class="panel text-center">
                <h1 class="x">CLASS GIFT 2015</h1>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
                <div>
                  <img src="img/latest programs/CG15.jpg" class="img-fluid img-panel pt-3">
                </div>

              </div>
            </div>
          </div>
		  </div>
      </section>
	        <section class="item section-2 mb-5 pb-5" id="item-4">
        <div class="container text-center justify-content-center">
          <div class="row align-items-center">
            <div class="col-md-12 col-12">
              <div class="panel text-center">
                <h1 class="x">CLASS GIFT 2014</h1>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
                <div>
                  <img src="img/latest programs/cg14.jpg" class="img-fluid img-panel pt-3">
                </div>
              </div>
            </div>
			</div>
          </div>
      </section>





    </div>
  </main>

    <?php include'footer.php'?>
	 <?php include 'preloader.php' ?>


  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>

    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray(".item").forEach((panel, i) => {
      let cards = [0, 600, 1250, 1950, 2700];
      ScrollTrigger.create({
        trigger: panel,
        start: "top top",
        pin: true,
        markers: false,
        end: () => "+=" + cards[i],
        // pinSpacing: true,
        // scrub: true,
      });
    });


    let t1 = gsap.timeline({
      scrollTrigger: {
        trigger: '#second',
        pin: '#second',
        scrub: true,
        markers: false,
        start: 'center center',
        end: '=+2500 center'
      }
    });
    t1
      .from('.slide-right', { autoAlpha: 0, x: 100 })
      .from('.slide-left', { autoAlpha: 0, x: -100 })
      .from('.fade-in', { autoAlpha: 0 })
      .to('#second', { opacity: 0, y: -100 })



    gsap.from('.one', {
      scrollTrigger: {
        trigger: '.one',
        toggleActions: "restart none none none"
      },
      opacity: 0,
      duration: 1.5,
      x: -200
    });


    gsap.from('.two', {
      scrollTrigger: {
        trigger: '.two',
        toggleActions: "restart none none none"
      },
      opacity: 0,
      duration: 1.5,
      delay: 1.5,
      x: 200
    });
    var arr = document.getElementsByClassName("x");
    for (var i = 0; i < arr.length; i++) {
      gsap.from(arr[i], {
        scrollTrigger: {
          trigger: arr[i],
          toggleActions: "restart none none none"
        },
        opacity: 0,
        duration: 1.5,
        x: -200
      });
    }
    var arr = document.getElementsByClassName(".img-panel");
    for (var i = 0; i < arr.length; i++) {
      gsap.from(arr[i], {
        scrollTrigger: {
          trigger: arr[i],
          toggleActions: "restart none none none"
        },
        opacity: 0,
        duration: 2
      });
    }
  </script>

</body>

</html>
