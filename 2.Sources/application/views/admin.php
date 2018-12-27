<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link file CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/css_all_course.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/admin.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/header_and_footer.css">
    <title>Quản trị khóa học</title>
  </head>
  <body>
     <!---------------------- nvarbar ----------------------->

<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
<div class="container menu-top">
  <a class="navbar-brand" href="http://localhost/LMS_Project/2.Sources/index.php">LMS Page</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>Main_controller/show_all_course">Course</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn-add-course" href="#">Add</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>login.html">Login</a>
      </li>
    </ul>
    
  </div>
</div>
</nav>

    <!-- form add course -->

  <div class="contain-add-course">  
    <form class="shadow form-add-course">
      <i class="fas fa-times btn-exit"></i>

      <div class="form-title">
        <h3 class="text-center py-4">ADD COURSE</h3>
      </div>

      <div class="form-group">
        <label >Tên khóa học</label>
        <input type="text" name="titile" class="form-control" placeholder="Nhập tên khóa học">
      </div>
      <hr>

     <div class="form-group">
        <label for="exampleFormControlFile1">Ảnh khóa học</label>
        <input type="file" class="form-control-file" name="image">
     </div>
     <hr>
      <button type="submit" class="btn btn-success btn-block">ADD COURSE</button>
    </form>
    <br>
    <br>
  </div>
    

<!---------------------- Course ------------------>

<section class="courses my-5">
  <div class="container">
    <h2 class="title text-center">Course List</h2>
    
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
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="<?= BASE_URL() ?>Main_controller/show_detailt_course/<?= $value['id_course'] ?>" class="btn btn-warning">View</a>
                  <a href="edit.php" class="btn btn-primary">Edit<i class="fas fa-pencil-alt"></i></a>
                  <a href="delete.php" class="btn btn-danger">Delete<i class="fas fa-trash"></i></a>
                  </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>

 </div><!--  end row -->
      

           
            
    <div class="pagination">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
          <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
    </div> <!-- end pagination -->

  </div><!-- end container -->
</section>

<?php require_once 'footer.php';?>


