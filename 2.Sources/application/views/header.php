   <!---------------------- nvarbar ----------------------->

<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
<div class="container menu-top">
  <a class="navbar-brand" href="<?= base_url() ?>Home/index">LMS Page</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>Home/index">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>Home/show_all_course">Course</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>Home/login">Login</a>
      </li>
    </ul>
    
  </div>
</div>
</nav>