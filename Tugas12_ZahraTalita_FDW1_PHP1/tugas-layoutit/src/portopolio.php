<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta
      name="description"
      content="Source code generated using layoutit.com"
    />
    <meta name="author" content="LayoutIt!" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav">
          <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="biodata.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portopolio.php">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <!-- <li class="nav-item dropdown ml-md-auto">
              <a
                class="nav-link dropdown-toggle"
                href="http://example.com"
                id="navbarDropdownMenuLink"
                data-toggle="dropdown"
                >Dropdown link</a
              >
              <div
                class="dropdown-menu dropdown-menu-right"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li> -->
          </ul>
        </div>
      </div>
      <div class="page">

        <div class="row">
          <img
            alt="Bootstrap Image Preview"
            src="assets/Detail Product (1).png"
            width="50%"
          />
          <div class="col-md-6">
            <?php 
              $tentang = "detail product";
            ?>
            <p>
              Ini adalah Salah satu proyek  yang saya ikuti adalah membuat tampilan tentang <?= $tentang ?>.
            </p>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html> 
