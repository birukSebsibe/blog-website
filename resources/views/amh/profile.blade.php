<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="path-to-your-favicon"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>{{ $data->name }} Ethnic Information</title>
    <link rel="icon" type="images/x-icon" href="img/logo.png"  />
</head>

<style>
    

body{
    color: #6F8BA4;
    margin-top:20px;
}
.section {
    padding: 100px 0;
    position: relative;
}
.gray-bg {
    background-color: #f5f5f5;
}
img {
    max-width: 100%;
}
img {
    vertical-align: middle;
    border-style: none;
}
/* About Me 
---------------------*/
.about-text h3 {
  font-size: 45px;
  font-weight: 700;
  margin: 0 0 6px;
}
@media (max-width: 767px) {
  .about-text h3 {
    font-size: 35px;
  }
}
.about-text h6 {
  font-weight: 600;
  margin-bottom: 15px;
}
@media (max-width: 767px) {
  .about-text h6 {
    font-size: 18px;
  }
}
.about-text p {
  font-size: 18px;
  max-width: 450px;
}
.about-text p mark {
  font-weight: 600;
  color: #20247b;
}

.about-list {
  padding-top: 10px;
}
.about-list .media {
  padding: 5px 0;
}
.about-list label {
  color: #20247b;
  font-weight: 600;
  width: 88px;
  margin: 0;
  position: relative;
}
.about-list label:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  right: 11px;
  width: 1px;
  height: 12px;
  background: #20247b;
  -moz-transform: rotate(15deg);
  -o-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
  margin: auto;
  opacity: 0.5;
}
.about-list p {
  margin: 0;
  font-size: 15px;
}

@media (max-width: 991px) {
  .about-avatar {
    margin-top: 30px;
  }
}

.about-section .counter {
  padding: 22px 20px;
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
}
.about-section .counter .count-data {
  margin-top: 10px;
  margin-bottom: 10px;
}
.about-section .counter .count {
  font-weight: 700;
  color: #20247b;
  margin: 0 0 5px;
}
.about-section .counter p {
  font-weight: 600;
  margin: 0;
}
mark {
    background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: 0 bottom;
    background-color: transparent;
    padding: 0;
    color: currentColor;
}
.theme-color {
    color: #fc5356;
}
.dark-color {
    color: #20247b;
}


</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
<img src="{{ $logoImage }}" width="90px" height="90px" alt="">
  <!-- <a class="navbar-brand" href="#">Life and Light</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item font-weight-bold  ">
        <a class="nav-link" href="{{url('/blogAmh')}}">መግቢያ   <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item font-weight-bold active">
        <a class="nav-link" href="{{url('/ethnic')}}">&nbsp&nbspብሄረሰብ </a>
      </li>
      <li class="nav-item dropdown font-weight-bold">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        &nbsp&nbspምርምሮች
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">UPG</a>
          <a class="dropdown-item" href="#">disciple making movement</a>
          <a class="dropdown-item" href="#">church planting</a>
          
        </div>
      </li>
      
      <li class="nav-item font-weight-bold">
        <a class="nav-link" href="{{url('/resourcesAmh')}}">መረጃዎች &nbsp&nbsp</a>
      </li>
      
      
      <li class="nav-item font-weight-bold">
        <a class="nav-link" href="{{url('/donationAmh')}}">ልገሳ &nbsp&nbsp</a>
      </li>
      <li class="nav-item font-weight-bold">
        <a class="nav-link" href="{{url('/galleryAmh')}}">ፎቶግራፍ</a>
      </li>
      <li class="nav-item font-weight-bold">
        <a class="nav-link" href="{{url('/aboutAmh')}}">ስለኛ &nbsp&nbsp</a>
      </li>
      
      
    </ul>
    <!-- <button class="btn btn-outline-success my-2 my-sm-0 navbar-right" type="submit">Search</button>
    <form class="nav navbar-nav navbar-right">
    
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      
    </form> -->
  </div>
</nav>
<section class="section about-section gray-bg" id="about">
  <div class="gallery animate__animated animate__slideInLeft">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color">{{ $data->nameAmh }}</h3>
                           
                            <p>{{ $data->descriptionAmh }}</p>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>ህዝብ ቁጥር</label>
                                        <p>{{ $data->population }}</p>
                                    </div>
                                    <div class="media">
                                        <label>ወንጌላዊ</label>
                                        <p>{{ $data->christianity }} %</p>
                                    </div>
                                    <div class="media">
                                        <label>ቋንቋ</label>
                                        <p>{{ $data->languageAmh }}</p>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                    <label>ወንጌላዊ ቁጥር</label>
                                        <p>{{ $data->evangelicalNumber }}</p>
                                    </div>
                                   
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                        <img src="{{ asset('uploads/'.$data->image)}}" width="400px" height="250px" alt="">
                        </div>
                    </div>
                </div>
               
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
            
            <div class="gallery animate__animated animate__zoomIn">

<div class="container">

<h2>ክ {{ $data->nameAmh }} ብሄረሰብ ጋር ተዛማጅ የሆኑ ፋይሎችን በመጫን ሚኒስቴሩን መደገፍ ትችላላችሁ፡፡ </h2>

<form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="file" class="form-label">በ (png, jpeg, docx, doc,pdf) የሆነ ፋይል ብቻ ይምረጡ</label>
        <input type="file" class="form-control" id="file" name="file" required>
    </div>

    <button type="submit" class="btn btn-primary">ይጫኑ</button>
</form>



</div>

</div>

        </section>

        @extends('footerAmh')

   
</body>
</html>