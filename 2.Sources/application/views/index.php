<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/header_and_footer.css">
    <title>Learning Management System</title>
  </head>
  <body>
  <?php require 'header.php' ?>

    <!------------------ carousel ----------------->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        
      </ol>
      <div class="carousel-inner">
        
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?= base_url() ?>images/banner/s1.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h1>Hệ thống quản lý khóa học</h1>
            <div class="btn btn-success">Get Started</div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?= base_url() ?>images/banner/s2.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h1>Hệ thống quản lý khóa học</h1>
            <div class="btn btn-success">Get Started</div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?= base_url() ?>images/banner/s3.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h1>Hệ thống quản lý khóa học</h1>
            <div class="btn btn-success">Get Started</div>
          </div>
        </div>
      </div> 
     
    </div>



    <!-------------- Featured Courses ----------------->
    
    <section class="featured-course py-3">
      <div class="container">
        <div class="wrap-title">
        <h2 class="title py-5">New Course</h2>
          
        </div>
        <div class="row">
        <?php foreach ($data_course as $value): ?>
        <?php 
          $date = strtotime($value['date_upload']); 
          $date = date('H:i d/m/Y', $date);
          ?>
        <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card">
              <img class="card-img-top" src="<?= $value['image'] ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?= $value['title'] ?></h5>
                <p class="card-text text-muted"><?= $date ?></p>
                <a href="<?= BASE_URL() ?>Home/detailt_course/<?= $value['id_course'] ?>" class="btn btn-success">View detail</a>
              </div>
            </div>
          </div>
        <?php endforeach ?>

        </div>
        <a href="<?= base_url() ?>Home/show_all_course" class="btn btn-outline-success my-3">All Course</a>
    </section>

    
    <!--------------------- Contact Us -------------------->

    <section class="contact my-4">
      <div class="container">
        <h2 class="title py-5">Contact Us</h2>

        <div class="row contact-us">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <i class="fas fa-map-marker-alt contact-icon"></i>
                <h3 class="contact-title">Address</h3>
                <p class="card-text">175 Tây Sơn, Đống Đa, Hà Nội</p>
                
              </div>
            </div>

          </div>


          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <i class="fas fa-phone contact-icon"></i>
                <h3 class="contact-title">Phone Number</h3>
                <p class="card-text">0969 969 969</p>
                
              </div>
            </div>

          </div>


          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <i class="far fa-envelope contact-icon"></i>
                <h3 class="contact-title">Email</h3>
                <p class="card-text">lmspage123@tlu.vn</p>
               
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

<?php require 'footer.php';?>