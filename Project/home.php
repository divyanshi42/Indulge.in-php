<?php
include 'layout.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <title>Document</title>
<style>
.card1{
    /* margin-left:100px;
    margin-right:100px; */
    padding-left:100px;
    padding-right:100px;
    background-color: #F0F8FF;
}
</style>
</head>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/wels2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/wels1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/img1.jpg" class="d-block w-100" alt="...">
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
<br>

<h2 style="text-align:center;">About Us</h2>
<br>
<div class="card1">
  <div class="card-body1">
    Applying the Direct Method and the Communicative Approach in all our lessons, our teachers use contextual clues and
    questions to encourage students to express themselves in a facilitated conversation. Our lessons are structured in
    a way where there is equal opportunity for the student to get to know the target language and to be comfortable
    using it, progressively consolidating the students' understanding and ensure higher retention.!
  </div>
</div>
<br><br>
<!-- card -->
<div class="container overflow-hidden">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3 border bg-light">
     <div class="card" style="width: 31rem;">
  <img src="images/welp1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Our unique methodology of learning, which provides a planned track and hassle free learnig.</p>
  </div>
</div><br>
     <h6>Introduction</h6><hr>
     <p> This website deals with all the courses which a student studies during the course of his engineering
     </p>
     </div>
    </div>

    <div class="col">
      <div class=" border bg-light">
      <div class="list-group">
        <a href="articles/cc1" class="list-group-item list-group-item-action list-group-item-primary" >
          <div class="d-flex w-100 justify-content-between">

            <h5 class="mb-1">Cloud Computing Tutorial</h5>
            <small>18 days ago</small>
          </div>
          <p class="mb-1">Starting with cloud Computing.</p>
          <small>Cloud Computing tutorial provides basic and advanced concepts</small>
        </a>
        <a href="articles/cc2" class="list-group-item list-group-item-action list-group-item-secondary">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Advantages and Disadvantages of Cloud Computing</h5>
            <small class="text-muted">13 days ago</small>
          </div>
          <p class="mb-1">Advantages of Cloud Computing</p>
          <small class="text-muted">As we all know that Cloud computing is trending technology.</small>
        </a>
        <a href="articles/cc3" class="list-group-item list-group-item-action list-group-item-success">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">History of cloud Computing</h5>
            <small class="text-muted">10 days ago</small>
          </div>
          <p class="mb-1">Before emerging the cloud computing</p>
          <small class="text-muted">there was Client/Server computing which</small>
        </a>
        <a href="articles/cc4" class="list-group-item list-group-item-action list-group-item-danger">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Cloud Computing Architecture</h5>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-1">As we know, cloud computing technology</p>
          <small class="text-muted">is used by both small and large organizations</small>
        </a>
        <a href="articles/cc5" class="list-group-item list-group-item-action list-group-item-warning">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Difference between Cloud Computing and Grid Computing</h5>
            <small class="text-muted">20 days ago</small>
          </div>
          <p class="mb-1">Cloud Computing</p>
          <small class="text-muted">Cloud computing uses a client-server architecture</small>
        </a>

</div>
      </div>
    </div>
  </div>
</div>
<!-- Rounded cards here -->
<br>
</body>
</html>
<?php
include 'footer.php';
?>