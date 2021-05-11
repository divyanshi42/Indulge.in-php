<?php
include 'layout.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>



    <main role="main">

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20200710234318/Why-Cloud-Computing-is-Booming-in-the-Market.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
     <h5>By 2020, a corporate “no-cloud” policy will be as rare as a “no-Internet” policy-Gartner
   </h5>
    <p>By 2020, a staggering 83% of the company workload will be stored on the cloud.”– Forbes</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.naukri.com/learning/articles/wp-content/uploads/sites/11/2020/05/2167870_21e8.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
     <h5>A data structure is a particular way of organizing data in a computer so that it can be used effectively.</h5>
    <p>For example, we can store a list of items having the same data-type using the array data structure.</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.howtogeek.com/wp-content/uploads/2018/08/img_5b68e80f77e33.png?height=200p&trim=2,2,2,2" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    <h5>An Operating System (OS) is an interface between a computer user and computer hardware.</h5>
    <p> An operating system is the most important software that runs on a computer</p>
  </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br><br><br>
      <!-- corousel ends here -->


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/wels2.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Computer Networks</h2>
            <p>A computer network is a group of computers that use a set of common communication protocols over digital interconnections for the purpose of sharing resources located on or provided by the network nodes.</p>
            <p><a class="btn btn-secondary" href="cn_main.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/wels1.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Data Structure</h2>
            <p>A data structure is a particular way of organizing data in a computer so that it can be used effectively. For example, we can store a list of items having the same data-type using the array data structure.</p>
            <p><a class="btn btn-secondary" href="ds_main.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/img1.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Operating systems</h2>
            <p>An Operating System (OS) is an interface between a computer user and computer hardware.
                All the basic tasks like file management,
                memory management, process management, handling input and output.</p>
            <p><a class="btn btn-secondary" href="os_main.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Computer Network Tutorial<span class="text-muted">&nbspMaking your concepts easier</span></h2>
            <p class="lead">Computer Network tutorial provides basic and advanced concepts of Data Communication & Networks (DCN). Our Computer Networking Tutorial is designed for beginners and professionals.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="images/wels2.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Data Structures Tutorial<span class="text-muted">&nbsp Algorithm Expert</span></h2>
            <p class="lead">Data Structures (DS) tutorial provides basic and advanced concepts of Data Structure. Our Data Structure tutorial is designed for beginners and professionals.
              Data Structure is a way to store and organize data so that it can be used efficiently.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="images/wels1.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Operating System Tutorial<span class="text-muted">&nbsp Be a powerful user</span></h2>
            <p class="lead">Operating System Tutorial provides the basic and advanced concepts of operating
              system . Our Operating system tutorial is designed for beginners, professionals
              and GATE aspirants. We have designed this tutorial after the completion of a deep
              research about every concept.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="images/img1.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
<?php
include 'footer.php';
?>
