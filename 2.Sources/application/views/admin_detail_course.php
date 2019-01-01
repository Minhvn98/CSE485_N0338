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
    <link rel="stylesheet" href="<?= base_url() ?>css/detail_course.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/header_and_footer.css">
    <title><?php foreach ($data_detail_course[3] as $value): ?>
      <?= $value['title']; ?>
      <?php endforeach ?>        
    </title>
  </head>
  <body>
  <?php require 'header.php' ?>

  <div class="container mt-5 content">
    <h3 class="text-center pt-5">
      <?php foreach ($data_detail_course[3] as $value): ?>
        <?= $value['title']; ?>
      <?php endforeach ?>
    </h3>
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

      <?php foreach ($data_detail_course[0] as $value): ?>
        <?php foreach ($value as $value2): ?>
        <?php 
          $date = strtotime($value2['date_upload']); 
          $date = date('H:i d/m/Y', $date);
        ?>
        <tr>
          <th scope="row"></th>
          <td><?= $value2['title_lesson'] ?></td>
          <td><?= $date ?></td>
          <td><a href="<?= $value2['link_dowload'] ?>" class="ml-4 fas fa-cloud-download-alt"></a></td>
        </tr>
        <?php endforeach ?>
      <?php endforeach ?>
        
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
        <?php foreach ($data_detail_course[1] as $value): ?>
        <?php foreach ($value as $value2): ?>
        <?php 
          $date = strtotime($value2['date_upload']); 
          $date = date('H:i d/m/Y', $date);
        ?>
        <tr>
          <th scope="row"></th>
          <td><?= $value2['title_code_example'] ?></td>
          <td><?= $date ?></td>
          <td><a href="<?= $value2['link_dowload'] ?>" class="ml-4 fas fa-cloud-download-alt"></a></td>
        </tr>
        <?php endforeach ?>
      <?php endforeach ?>
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
        <?php foreach ($data_detail_course[2] as $value): ?>
        <?php foreach ($value as $value2): ?>
        <?php 
          $date = strtotime($value2['date_upload']); 
          $date = date('H:i d/m/Y', $date);
        ?>
        <tr>
          <th scope="row"></th>
          <td><?= $value2['title_documents'] ?></td>
          <td><?= $date ?></td>
          <td><a href="<?= $value2['link_dowload'] ?>" class="ml-4 fas fa-cloud-download-alt"></a></td>
        </tr>
        <?php endforeach ?>
      <?php endforeach ?>
      </tbody>
    </table>
    </section>
    <hr>

  </div>

<?php require 'footer.php'?>