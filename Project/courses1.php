<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <title>Courses</title>
    <style>
    body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://images.unsplash.com/photo-1457276587196-a9d53d84c58b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80");
  height: 70%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.btn_section
{
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://thumbs.dreamstime.com/b/creative-chalkboard-education-background-creative-chalkboard-education-background-sketch-copy-space-knowledge-science-159269684.jpg");
  height: 200px;
}

h2 {
  text-align:center;
  margin-top:10px;
}

.button1 {
  border-radius: 4px;
  background-color: #5f939a;
  border: none;
  color: #black;
  text-align: center;
  font-size: 15px;
  padding: 12px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin-top: 60px;
  margin-left: 110px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}
.button2 {
  border-radius: 4px;
  background-color: #5f939a;
  border: none;
  color: #black;
  text-align: center;
  font-size: 15px;
  padding: 12px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin-top: 60px;
  margin-left: 150px;
}

.button2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button2:hover span {
  padding-right: 25px;
}

.button2:hover span:after {
  opacity: 1;
  right: 0;
}

.button3 {
  border-radius: 4px;
  background-color: #5f939a;
  border: none;
  color: #black;
  text-align: center;
  font-size: 15px;
  padding: 12px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin-top: 60px;
  margin-left: 170px;
}

.button3 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button3 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button3:hover span {
  padding-right: 25px;
}

.button3:hover span:after {
  opacity: 1;
  right: 0;
}

.button4 {
  border-radius: 4px;
  background-color: #5f939a;
  border: none;
  color: #black;
  text-align: center;
  font-size: 15px;
  padding: 12px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin-top: 60px;
  margin-left: 180px;
}

.button4 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button4 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button4:hover span {
  padding-right: 25px;
}

.button4:hover span:after {
  opacity: 1;
  right: 0;
}

    </style>
</head>
<?php
include 'layout.php';
?>
<body>
<!-- background-image -->
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">The Learning continues untill the day you die.</h1>
  </div>
</div>
<br>
<!-- buttons -->
<div class="btn_section" >
<h2>COURSES OFFERED</h2>
<button class="button1"><span>OS</span></button>
<button class="button2"><span>CN</span></button>
<button class="button3"><span>DS</span></button>
<button class="button4"><span>CC</span></button>
</div>
</body>
<footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Footer Content</h5>

        <p>
          Amartya Dixit is a 21 years old from Uttar Pradesh pursuing his <br> Bachelor's from Lovely Professional University Punjab.
          He is a <br>web development enthusiast and has interest in History as well<br> as Political Science. 
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Contact Me</h5>

        <ul class="list-unstyled mb-0">
          <li class="text-dark">
            123456789
          </li>
          <li class="text-dark">
            Facebook
          </li>
          <li class="text-dark">
            Instagram
          </li>
          <li class="text-dark">LinkedIn</li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Links</h5>

        <ul class="list-unstyled">
          <li class="text-dark">Link 1
          </li>
          <li class="text-dark">Link 2
          </li>
          <li class="text-dark">Link 3
          </li>
          <li class="text-dark">Link 4
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © Amartya Dixit Copyright:
  </div>
  <!-- Copyright -->
</footer>
</html>