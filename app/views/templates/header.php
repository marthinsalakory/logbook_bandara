<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $data['title']; ?></title>

  <!-- Bootstrap -->
  <link href="<?= BASEURL; ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="<?= BASEURL; ?>/assets/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Import Fontawesome -->
  <link rel="stylesheet" href="<?= BASEURL; ?>/assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/assets/fontawesome/js/all.min.js">

  <!-- Custom -->
  <link rel="stylesheet" href="<?= BASEURL; ?>/assets/custom/css/all.css">
</head>

<body>

  <nav class="navbar-custom navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-dark mt-1" href="#">
        <img width="260px" style="margin-left: 70px;" src="<?= BASEURL; ?>/assets/img/logo-bandar-ambon.png" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?= Helpers::nav_on($data['title'], 'Logbook', 'active'); ?>" href="<?= BASEURL; ?>/Logbook">MY LOG Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= Helpers::nav_on($data['title'], 'Profile', 'active'); ?>" href="<?= BASEURL; ?>/Profile">MY Profile</a>
          </li>
          <?php if (Auth::user()->role == 'admin') : ?>
            <li class="nav-item">
              <a class="nav-link <?= Helpers::nav_on($data['title'], 'Users', 'active'); ?>" href="<?= BASEURL; ?>/Users">Manage Users</a>
            </li>
          <?php endif ?>
          <li class="nav-item">
            <a class="nav-link <?= Helpers::nav_on($data['title'], 'Logout', 'active'); ?>" href="<?= BASEURL; ?>/Auth/logout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="mx-5 mt-5">
    <?= Flasher::flash(); ?>
  </div>