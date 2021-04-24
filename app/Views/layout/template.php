<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('home') ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('data-siswa') ?>">Data Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('info-kegiatan') ?>">Info Kegiatan</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <?php if (session()->get('logged_in') === true) : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('logout') ?>">Logout</a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('registrasi') ?>">Registrasi</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <?= $this->renderSection('content') ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>