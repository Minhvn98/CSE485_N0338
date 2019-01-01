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
        <a class="nav-link add-course" href="#">Add</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>Main_controller/login">Login</a>
      </li>
    </ul>
    
  </div>
</div>
</nav>

    <!-- form add course -->

  <div class="contain-add-course">  
    <form class="shadow form-add-course" method="post" action="<?= base_url() ?>Main_controller/add_course" enctype="multipart/form-data">
      <i class="fas fa-times btn-exit"></i>

      <div class="form-title">
        <h3 class="text-center py-4">ADD COURSE</h3>
      </div>

      <div class="form-group">
        <label >Tên khóa học</label>
        <input type="text" name="title" class="form-control title-course" placeholder="Nhập tên khóa học">
      </div>
      <hr>

     <div class="form-group">
        <label for="exampleFormControlFile1">Ảnh khóa học</label>
        <input type="file" class="form-control-file image-course" name="image">
     </div>
     <hr>
     <input type="submit" value="ADD COURSE" class="btn btn-success btn-block btn-add-course">
      
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
                  <a href="<?= BASE_URL() ?>Main_controller/show_detailt_course/<?= $value['id_course'] ?>" class="btn btn-warning">View detail</a>

                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?= $value['id_course'] ?>" data-whatever="@mdo">Edit <i class="fas fa-pencil-alt"></i></button>

                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_course'] ?>">
                  Delete <i class="fas fa-trash"></i>
                </button>
                  </div>
              </div>

            </div>

            <!-- Modal -->
            <div class="modal fade" id="delete<?= $value['id_course'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Bạn có muốn xóa khóa học ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?= $value['title'] ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?= BASE_URL() ?>Main_controller/delete_course/<?= $value['id_course'] ?>" class="btn btn-danger">Delete <i class="fas fa-delete"></i></a> 
                  </div>
                </div>
              </div>
            </div> <!-- end delete course -->


        <div class="modal fade" id="edit<?= $value['id_course'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Sửa khóa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="form-edit" method="post" action="<?= base_url() ?>Main_controller/update_course" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Tên khóa học : </label>
                    <input type="text" class="form-control" name="title_edit" value="<?= $value['title'] ?>">
                    <input type="text" name="id_edit<?= $value['id_course'] ?>" value="<?= $value['id_course'] ?>">
                    <input type="hidden" name="image_no_edit" value="<?= $value['image'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Ảnh khóa học cũ :</label>
                    <img class="img-fluid" src="<?= $value['image'] ?>" alt="ảnh khóa học">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Ảnh khóa học :</label>
                    <input type="file" class="form-control-file image-course" name="image_edit">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary button-save">Lưu</button>
              </div>
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



