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
    <link rel="stylesheet" href="<?= base_url() ?>css/header_and_footer.css">
    <title>Tất cả khóa học</title>
  </head>
  <body> 
  <?php require 'header.php' ?>

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
                <a href="<?= BASE_URL() ?>Home/detailt_course/<?= $value['id_course'] ?>" class="btn btn-success">View detail</a>
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


