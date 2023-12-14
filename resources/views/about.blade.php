<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title> Life and Light | About
</title>
<link rel="icon" type="images/x-icon" href="img/logo.png"  />
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;

}
.navbar{
  background:

}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
<body>

<div class="header">

</div>
<!-- 
nav bar -->


<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
<img src="img/logo.png" width="90px" height="90px" alt="">
  <!-- <a class="navbar-brand" href="#">Life and Light</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item font-weight-bold ">
        <a class="nav-link" href="{{url('/blog')}}">Home    <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item font-weight-bold">
        <a class="nav-link" href="{{url('/ethnic')}}">&nbsp&nbspEthnics </a>
      </li>
      <li class="nav-item dropdown font-weight-bold">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        &nbsp&nbspResearch
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">UPG</a>
          <a class="dropdown-item" href="#">disciple making movement</a>
          <a class="dropdown-item" href="#">church planting</a>
          
        </div>
      </li>
      
      <li class="nav-item font-weight-bold">
        <a class="nav-link" href="{{url('/resources')}}">Resources &nbsp&nbsp</a>
      </li>
      
      
      <li class="nav-item font-weight-bold">
        <a class="nav-link" href="{{url('/donation')}}">Donations &nbsp&nbsp</a>
      </li>
      <li class="nav-item font-weight-bold">
        <a class="nav-link" href="{{url('/gallery')}}">Gallery</a>
      </li>
      <li class="nav-item font-weight-bold active">
        <a class="nav-link" href="{{url('/about')}}">About Us &nbsp&nbsp</a>
      </li>
      
    </ul>
    <!-- <button class="btn btn-outline-success my-2 my-sm-0 navbar-right" type="submit">Search</button>
    <form class="nav navbar-nav navbar-right">
    
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      
    </form> -->
  </div>
</nav>
<br>

<!-- About 4 - Bootstrap Brain Component -->
<div class="gallery animate__animated animate__slideInLeft">
<section class="py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 col-lg-8">
        <h3 class="mb-2 text-uppercase"><strong>Who We Are ? </strong></h3>
        <h3 class="display-5 mb-4 lead fs-4 text-secondary mb-3">Many ministries in Ethiopia were dissatisfied with the accuracy of the data about People Groups in Ethiopia. Between 2013 and 2016 a “Task Force” met several times to create a new and updated database of Ethiopian People Groups and to make the data as accurate and up to date as possible. The “People Group List” on this website is taken from this new and updated database.

We welcome Ethiopian national leaders and field workers to give their input on corrections and additions to the data at any time.

We welcome suggestions for additional types of helpful information to be added to the current website. For example, available Scripture tools in each language, storying and orality projects. We encourage other additional information sets to be suggested by the wider group of Ethiopian ministry partners.</h3>
      
      </div>
    </div>
  </div>
  </div>

<div class="gallery animate__animated animate__zoomIn">
  <div class="container">
    <div  class="text-center">
  <h3><strong>Team mebers</strong></h3>
  </div>
    <div class="row gy-3 gy-md-4 gy-lg-0">
      <div class="col-12 col-lg-6">
        <div class="card bg-light p-3 m-0">
          <div class="row gy-3 gy-md-0 align-items-md-center">
            <div class="col-md-5">
              <img src="img/pr1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-7">
              <div class="card-body p-0">
                <h2 class="card-title h4 mb-3 text-secondary">Alex tomson</h2>
                <p class="card-text lead "><h4>With years of experience and deep industry knowledge, we have a proven track record of success and are pushing ourselves to stay ahead of the curve.</h4></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="card bg-light p-3 m-0">
          <div class="row gy-3 gy-md-0 align-items-md-center">
            <div class="col-md-5">
              <img src="img/pr2.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-7">
              <div class="card-body p-0">
                <h2 class="card-title h4 mb-3 text-secondary">Meri Frank</h2>
                <p class="card-text lead "><h4>With years of experience and deep industry knowledge, we have a proven track record of success and are pushing ourselves to stay ahead of the curve.</h4></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="card bg-light p-3 m-0">
          <div class="row gy-3 gy-md-0 align-items-md-center">
            <div class="col-md-5">
              <img src="img/pr3.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-7">
              <div class="card-body p-0">
                <h2 class="card-title h4 mb-3 text-secondary">Albert Ronaled</h2>
                <p class="card-text lead"><h4>With years of experience and deep industry knowledge, we have a proven track record of success and are pushing ourselves to stay ahead of the curve.</h4></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="card bg-light p-3 m-0">
          <div class="row gy-3 gy-md-0 align-items-md-center">
            <div class="col-md-5">
              <img src="img/pr4.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-7">
              <div class="card-body p-0">
                <h2 class="card-title h4 mb-3">Setve hailey</h2>
                <p class="card-text lead"><h4>With a team of visionary engineers, developers, and creative minds, we embark on a journey to transform complex challenges into ingenious technological solutions.</h4></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <br><br><br>
  <div class="gallery animate__animated animate__slideInLeft">
  <div class="container">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6 col-xl-5">
        <img class="img-fluid rounded" loading="lazy" src="img/logo.png" width="600px" height="600px"alt="">
      </div>
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
            <h2 class="h1 mb-3"><strong>Vission</strong></h2>
            <h4><p class="lead fs-4 text-secondary mb-3">We help people to build incredible brands and superior products. Our perspective is to furnish outstanding captivating services.</p></h4>
            <h4><p class="mb-5 lead fs-4 text-secondary mb-3">Nullam gravida orci ac luctus molestie. Fusce finibus congue erat, non aliquam magna tincidunt at. Aenean lacinia arcu ex, sed pharetra nibh porta a. Curabitur vel consequat nibh, ac interdum nisl. Nunc pulvinar nec massa vitae sollicitudin.</p></h4>
            <h2 class="h1 mb-3"><strong>Mission</strong></h2>
           <h4> <p class="mb-5 lead fs-4 text-secondary mb-3">Nullam gravida orci ac luctus molestie. Fusce finibus congue erat, non aliquam magna tincidunt at. Aenean lacinia arcu ex, sed pharetra nibh porta a. Curabitur vel consequat nibh, ac interdum nisl. Nunc pulvinar nec massa vitae sollicitudin.</p></h4>
           
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
</div>

@extends('footer')

</body>
</html>
