<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <br><br><br>

  <title>Login Santri</title>

  <!-- Custom fonts for this template-->
  <link href="assets/ppdb/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/ppdb/css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    .img-logo {
      max-height: 120px;
      margin-bottom: 20px;
    }
  </style>

</head>

<body class="bg-gradient-success">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-md-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Santri</h1>
                  </div>

                  <form class="user" method="POST" action="login_control.php">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="username" aria-describedby="emailHelp" placeholder="Masukan Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Masukan Password">
                    </div>
                     <button type="submit" name="login" value="masuk" class="btn btn-success btn-user btn-block">
                      Login
                     </button>
                     <div class="col-mt-3">
                     </div>

                    </a>
                    <hr>
                  </form>
                  <div class="text-center">
                    <p><i>Belum Terdaftar?</i> <a class="small" href="daftar.php"> Registrasi Disini!</a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/ppdb/vendor/jquery/jquery.min.js"></script>
  <script src="assets/ppdb/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/ppdb/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/ppdb/js/sb-admin-2.min.js"></script>

</body>

</html>