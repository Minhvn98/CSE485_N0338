<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link file CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/css_all_course.css">
    <title>Tất cả khóa học</title>
  </head>
  <body>
  <?php require 'header.php' ?>

<!---------------------- Course ------------------>

<section class="courses my-5">
  <div class="container">
    <h2 class="title text-center">Course List</h2>
    <div class="row">
      
    <?php 
      require 'connect.php';
      mysqli_query($conn, 'set names UTF8');
      $sql = "SELECT * FROM `course`";

      $result = mysqli_query($conn, $sql);
    
      if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {

            $title = $row["title"];
            $image = $row["image"];
            $date  = $row["date_upload"];
            $link  = $row["link"];

            echo '<div class="col-12 col-md-6 col-lg-4 mb-5">';
            echo '<div class="card">';
            echo '<img class="card-img-top" src="'.$image.'" alt="Card image cap">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">'.$title.'</h5>';
            echo '<p class="card-text">Date upload : '.$date.'</p>';
            echo '<a href="'.$link.'" class="btn btn-success">View detail</a>';
            echo '</div>
            </div>
          </div>';
        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
    ?>
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

<?php 
  require_once 'footer.php';
 ?>


