<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="seo & digital marketing">
  <meta name="keywords" content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company">
  <meta name="author" content="Themefisher.com">

  <title>Register | PISH</title>
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.css') ?>">
  <!-- Icofont Css -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome/css/all.css') ?>">
  <!-- animate.css -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/animate-css/animate.css') ?>">
  <!-- Icofont -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/icofont/icofont.css') ?>">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?= base_url('assets/css/auth/login.css') ?>">

  <!-- Alertify -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
  <!-- Alertify Default theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />


</head>

<body data-spy="scroll" class="login-container">
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong card-login">
            <div class="card-body p-5">
              <h3 class="mb-5 text-center text-title">Sign Up</h3>
              <form id="form-login" action="<?= base_url('register/save') ?>" method="post">
                <div class="form-outline mb-4">
                  <input type="text" placeholder="Name" name="fullname" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <input type="email" placeholder="Email" name="email" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <input type="password" placeholder="Password" name="password" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <input type="password" placeholder="Confirm Password" name="confirm_password" class="form-control form-control-lg" />
                </div>
                <button id="btn-submit" class="btn btn-lg btn-block btn-login" type="submit">Register</button>
                <div class="col-12 text-center mt-5">
                  <span>Sudah mempunyai akun? <a href="<?= base_url('login') ?>" class="text-register">Masuk</a></span>
                </div>
                <div class="col-12 text-center">
                  <span>atau</span>
                </div>
                <div class="col-12 text-center">
                  <span>Belum aktivasi akun? <a href="<?= base_url('activation') ?>" class="text-register">Aktivasi akun</a></span>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Alertify JavaScript -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  <script src="<?= base_url('assets/js/auth/login.js') ?>"></script>
</body>

</html>