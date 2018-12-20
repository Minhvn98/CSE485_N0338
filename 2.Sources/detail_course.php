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
    <link rel="stylesheet" href="./css/detail_course.css">
    <title>khóa học</title>
  </head>
  <body>
  <?php require 'header.php' ?>

  <div class="container mt-5 content">
    <h3 class="text-center mt-5">Mạng máy tính</h3>
    <section>
      <h4 class="title">Bài Giảng</h4>
    <table class="table table-hover table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">List</th>
          <th scope="col">Date upload</th>
          <th scope="col">Link Download</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        require 'connect.php';
        $sql = "SELECT * FROM `lesson` WHERE id_course = 1";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              $link = $row['link_dowload'];
              echo '<tr>';
              echo '<th scope="row"></th>';
              echo '<td>' . $row["title_lesson"] . '</td>';
              echo '<td>' . $row["date_upload"] . '</td>';
              echo '<td><a href="' . $link . '" class="ml-4 fas fa-cloud-download-alt"></a></td>';
              echo '</tr>';
            }
          } else {
              echo "0 results";
          }
          mysqli_close($conn);
         ?> 
        
      </tbody>
    </table>
    </section>
    <hr>

    <section>
      <h4 class="title">Mã Nguồn Mẫu</h4>
    <table class="table table-hover table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">List</th>
          <th scope="col">Date upload</th>
          <th scope="col">Link Download</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        require 'connect.php';
        $sql = "SELECT * FROM `code_example` WHERE id_course = 1";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              $link = $row['link_dowload'];
              echo '<tr>';
              echo '<th scope="row"></th>';
              echo '<td>' . $row["title_code_example"] . '</td>';
              echo '<td>' . $row["date_upload"] . '</td>';
              echo '<td><a href="' . $link . '" class="ml-4 fas fa-cloud-download-alt"></a></td>';
              echo '</tr>';
            }
          } else {
              echo "0 results";
          }
          mysqli_close($conn);
         ?> 
      </tbody>
    </table>
    </section>
    <hr>

  <section>
      <h4 class="title">Tài liệu tham khảo</h4>
    <table class="table table-hover table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">List</th>
          <th scope="col">Date upload</th>
          <th scope="col">Link Download</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        require 'connect.php';
        $sql = "SELECT * FROM `documents` WHERE id_course = 1";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              $link = $row['link_dowload'];
              echo '<tr>';
              echo '<th scope="row"></th>';
              echo '<td>' . $row["title_documents"] . '</td>';
              echo '<td>' . $row["date_upload"] . '</td>';
              echo '<td><a href="' . $link . '" class="ml-4 fas fa-cloud-download-alt"></a></td>';
              echo '</tr>';
            }
          } else {
              echo "0 results";
          }
          mysqli_close($conn);
         ?> 
      </tbody>
    </table>
    </section>
    <hr>



  </div>




<?php require 'footer.php'?>