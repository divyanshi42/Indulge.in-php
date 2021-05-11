<?php
include 'layout.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Operating Systems</title>
    <style>
    body, html {
  height: 100%;
  margin: 0;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://wallpapercave.com/wp/wp3929778.jpg");
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
  left: 80%;
  transform: translate(-50%, -50%);
  color: white;
}
.heading1 {
    font-size:40px;
    font-family: 'Kiwi Maru', serif;
    position: absolute;
    left: 10%; 
    color: black;
}
.content_1 {
    position:relative;
    top:50px;
    width: 75%;
    margin-left: 10%; 
    /* margin:0 10 0 10; */
    font-size: 20px;
}
.img1 {
    position:relative;
    top:50px;
    width:75%;
    margin-left: 30%;
}
.img2 {
    position:relative;
    top:50px;
    width:40%;
    margin-left: 20%;
}
.img3 {
    position:relative;
    top:50px;
    width:40%;
    margin-left: 20%;
}
.content_2 {
    position:relative;
    top:50px;
    width: 75%;
    margin-left: 10%; 
    /* margin:0 10 0 10; */
    font-size: 20px;
}
.content_3 {
    position:relative;
    top:50px;
    width: 75%;
    margin-left: 10%; 
    /* margin:0 10 0 10; */
    font-size: 20px;
}
.article_list {

    position:relative;
    top:10%;
    bottom:5%;
    width:50%;
    left:10%;
}
    </style>
</head>
<body>
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:70px">CLOUD COMPUTING</h1>
  </div>
</div>
<!-- content --><br>
<h2 class = "heading1"><b>Introduction To Cloud Computing</b></h2>
<div class = "content_1">
<p><hr>->The term Cloud refers to a Network or Internet. In other words,
we can say that Cloud is something, which is present at remote location.
Cloud can provide services over public and private networks, i.e., WAN, LAN or VPN.
Applications such as e-mail, web conferencing, customer relationship management (CRM) execute on cloud.</p>

<p>-><b>Interface − </b><br>
Cloud computing offers platform independency, as the software is not required to be installed locally on the PC.
Hence, the Cloud Computing is making our business applications mobile and collaborative.<br><br> 
</p>
</div>
<br>

<div class = "img1">
<img src = "images/cc1.jpg">
</div>
<br>

<div class = "content_2">
<h2><b>Basic Concepts: </b></h2><br>
<p><b>Deployment Models - </b><br>
Deployment models define the type of access to the cloud, i.e., how the cloud is located? Cloud can have any of the
four types of access: Public, Private, Hybrid, and Community.<br><br>

<b>Public Cloud  - </b><br>
The private cloud allows systems and services to be accessible within an organization. It is more secured because of its private nature.<br><br>

<b>Private Cloud  - </b><br>
Memory usage of a data structure operation should be as little as possible.<br><br>

<b>Community Cloud  - </b><br>
The community cloud allows systems and services to be accessible by a group of organizations.<br><br>
</p>
</div>
<br>

<div class = "img2">
<img src = "images/cc2.jpg">
</div>
<br>

<div class = "content_3">
<h2><b>Service Models: </b></h2><br>
<p><b>Infrastructure-as–a-Service (IaaS) - </b><br>
IaaS provides access to fundamental resources such as physical machines, virtual machines, virtual storage, etc.<br><br>

<b>Platform-as-a-Service (PaaS)  - </b><br>
PaaS provides the runtime environment for applications, development and deployment tools, etc.<br><br>

<b>Software-as-a-Service (SaaS) - </b><br>
SaaS model allows to use software applications as a service to end-users.<br><br>
</p>
</div>
<br>

<div class = "img3">
<img src = "images/cc3.jpg">
</div>
<br>


<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">Recommend Articles</h1>
    </div>
    <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Authentic Cliche Forage</span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Kinfolk Chips Snackwave</span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Coloring Book Ethical</span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">The Catcher In The Rye</span>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<?php
include 'footer.php';
?>