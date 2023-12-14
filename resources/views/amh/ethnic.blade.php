<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<title> Life and Light | Ethnics
</title>
<link rel="icon" type="images/x-icon" href="img/logo.png"  />
<body>
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
  background: white;
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
.paginate_button.previous:before {
  content: '← ';
}

.paginate_button.next:after {
  content: ' →';
}
</style>

</head>
<body>
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
<br><br><br><br>
<div class="text-center">
<P><h2><strong>Ethnic Data </strong></h2></P>
</div>


<br><br>

<div class="gallery animate__animated animate__slideInUp">

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ስም </th>
      <th scope="col">ወንጌላውያን</th>
      <th scope="col">ህዝብ ቁጥር</th>
      <th scope="col">ቋንቋ </th>
      <th scope="col">ወንጌላዊ ቁጥር</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($posts as $post)
    <a href="{{url('profileAmh/'.$post->id)}}">
    <tr  class='clickable-row' onclick="window.location='{{url('profileAmh/'.$post->id)}}';">
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->nameAmh }}</td>
      <td>{{ $post->christianity }} %</td>
      <td>{{ $post->population }}</td>
      <td>{{ $post->languageAmh }}</td>
      <td>{{ $post->evangelicalNumber }}</td>
    </tr>
    @endforeach
    </a>
  </tbody>
</table>

  <div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>

</div>

  
  <!-- <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
</div> -->
@extends('footerAmh')


</div>
    
</body>
</html>