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

  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <div class="container menu-top">
      <a class="navbar-brand" href="<?= base_url() ?>Home">LMS Page</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Admin">Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Home">Logout</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>  

  <div class="container mt-5 content">
    <h3 class="text-center pt-5">
      <?php foreach ($data_detail_course[3] as $value): ?>
        <?= $value['title']; ?>
        <? $id = $value['id_course']; ?>
      <?php endforeach ?>
    </h3>
    <section>
      <h4 class="title">Bài Giảng
        <button type="button" class="btn btn-primary float-right btn-add" data-toggle="modal" data-target="#add-lesson" data-whatever="@mdo">Add Lesson</button>
      </h4>

      <div class="modal fade" id="add-lesson" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Thêm bài giảng : </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="form-add-lesson" method="post" action="<?= base_url() ?>Admin/add_lesson/<?= $value['id_course']; ?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-form-label">Tên bài giảng :</label>
                  <input type="text" class="form-control" name="title-lesson" placeholder="Nhập tên bài giảng">
                </div>
                <div class="form-group">
                  <label>File lesson :</label>
                  <input type="file" class="form-control-file" name="file-lesson">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-info btn-add-lesson">Add lesson</button>
            </div>
          </div>
        </div>
      </div>

      <table class="table table-hover table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">List</th>
            <th scope="col">Date upload</th>
            <th scope="col">Link Download</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($data_detail_course[0] as $value): ?>
            <?php foreach ($value as $value2): ?>
              <?php 
              $date = strtotime($value2['date_upload']); 
              $date = date('H:i d/m/Y', $date);
              $id_lesson = $value2['id_lesson'];
              ?>
              <tr>
                <th scope="row"></th>
                <td><?= $value2['title_lesson'] ?></td>
                <td><?= $date ?></td>
                <td><a href="<?= $value2['link_dowload'] ?>" class="ml-4 fas fa-cloud-download-alt"></a></td>
                <td>
                  <button type="button" class="btn btn-warning btn-edit-detail" data-toggle="modal" data-target="#edit-lesson" data-whatever="@fat"><i class="fas fa-pencil-alt"></i></button>

                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $id_lesson ?>"><i class="fas fa-trash"></i></button>
                  <input type="hidden" value="<?= $id_lesson ?>">
                  <input type="hidden" value="1">           
                </td>
              </tr>
              <!-- Modal -->
              <div class="modal fade" id="delete<?= $id_lesson ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">Bạn có muốn xóa bài học ?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <?= $value2['title_lesson'] ?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <a href="<?= BASE_URL() ?>Admin/delete_lesson/<?= $id_lesson ?>" class="btn btn-danger">Delete <i class="fas fa-delete"></i></a> 
                    </div>
                  </div>
                </div>
              </div> <!-- end delete lesson -->
            <?php endforeach ?>
          <?php endforeach ?>

        </tbody>
      </table>


    </section>
    <hr>

    <section><!--  end lesson -->

      <h4 class="title">Mã Nguồn Mẫu
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#add-code" data-whatever="@fat">Add Code Example</button>
      </h4>
      <div class="modal fade" id="add-code" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Thêm mã nguồn mẫu :</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="form-add-code" method="post" action="<?= base_url() ?>Admin/add_code_example/<?= $id ?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tiêu đề :</label>
                  <input type="text" class="form-control" id="recipient-name" name="title-code">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">File code :</label>
                  <input type="file" class="form-control-file" name="file-code">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary btn-code">Add</button>
            </div>
          </div>
        </div>
      </div>


      <table class="table table-hover table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">List</th>
            <th scope="col">Date upload</th>
            <th scope="col">Link Download</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data_detail_course[1] as $value): ?>
            <?php foreach ($value as $value2): ?>
              <?php 
              $date = strtotime($value2['date_upload']); 
              $date = date('H:i d/m/Y', $date);
              $id_code = $value2['id_code_example'];
              ?>
              <tr>
                <th scope="row"></th>
                <td><?= $value2['title_code_example'] ?></td>
                <td><?= $date ?></td>
                <td><a href="<?= $value2['link_dowload'] ?>" class="ml-4 fas fa-cloud-download-alt"></a></td>
                <td>
                  <button type="button" class="btn btn-warning btn-edit-detail" data-toggle="modal" data-target="#edit-lesson" data-whatever="@fat"><i class="fas fa-pencil-alt"></i></button>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete2<?= $id_code ?>"><i class="fas fa-trash"></i></button>
                  <input type="hidden" value="<?= $id_code ?>">
                  <input type="hidden" value="2"> 
                </td>
              </tr>

              <!-- Modal -->
              <div class="modal fade" id="delete2<?= $id_code ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">Bạn có muốn xóa bài học ?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <?= $value2['title_code_example'] ?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <a href="<?= BASE_URL() ?>Admin/delete_code/<?= $id_code ?>" class="btn btn-danger">Delete <i class="fas fa-delete"></i></a> 
                    </div>
                  </div>
                </div>
              </div> <!-- end delete lesson -->


            <?php endforeach ?>
          <?php endforeach ?>
        </tbody>
      </table>
    </section>
    <hr>

    <section>



      <h4 class="title">Tài liệu tham khảo
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#add-docs" data-whatever="@fat">Add docments</button>
      </h4>

      <div class="modal fade" id="add-docs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add docments</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form  class="form-add-documents" method="post" action="<?= base_url() ?>Admin/add_documents/<?= $id ?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tiêu đề : </label>
                  <input type="text" class="form-control" id="recipient-name" name="title-docments">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">File docments:</label>
                  <input type="file" class="form-control-file" name="file-docments">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary btn-docs">Add</button>
            </div>
          </div>
        </div>
      </div>

      <table class="table table-hover table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">List</th>
            <th scope="col">Date upload</th>
            <th scope="col">Link Download</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data_detail_course[2] as $value): ?>
            <?php foreach ($value as $value2): ?>
              <?php 
              $date = strtotime($value2['date_upload']); 
              $date = date('H:i d/m/Y', $date);
              $id_docs = $value2['id_documents']
              ?>
              <tr>
                <th scope="row"></th>
                <td><?= $value2['title_documents'] ?></td>
                <td><?= $date ?></td>
                <td><a href="<?= $value2['link_dowload'] ?>" class="ml-4 fas fa-cloud-download-alt"></a></td>
                <td>
                  <button type="button" class="btn btn-warning btn-edit-detail" data-toggle="modal" data-target="#edit-lesson" data-whatever="@fat"><i class="fas fa-pencil-alt"></i></button>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete3<?= $id_docs ?>"><i class="fas fa-trash"></i></button>
                  <input type="hidden" value="<?= $id_docs ?>">
                  <input type="hidden" value="3"> 
                </td>
              </tr>

              <!-- Modal -->
              <div class="modal fade" id="delete3<?= $id_docs ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">Bạn có muốn xóa bài học ?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <?= $value2['title_documents'] ?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <a href="<?= BASE_URL() ?>Admin/delete_documents/<?= $id_docs ?>" class="btn btn-danger">Delete <i class="fas fa-delete"></i></a> 
                    </div>
                  </div>
                </div>
              </div> <!-- end delete lesson -->
            <?php endforeach ?>
          <?php endforeach ?>
        </tbody>
      </table>
    </section>
    <hr>

    <!-- form edit -->
    <div class="modal fade" id="edit-lesson" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" >Edit : </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-edit" method="post" action="<?= base_url() ?>Admin/update/<?= $id ?>" enctype="multipart/form-data">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Title :</label>
                <input type="text" class="form-control title-edit" name="title-edit">
              </div>
              <div class="form-group">
                <label class="col-form-label">File :</label>
                <input type="file" class="form-control-file" name="file-upload">
                <input type="hidden" class="file-upload2" name="file-upload2">
                <input type="hidden" name="type" class="type">
                <input type="hidden" name="id-edit" class="id-edit">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btn-save">Save</button>
          </div>
        </div>
      </div>
    </div>

  </div>
  <?php require 'footer.php'?>