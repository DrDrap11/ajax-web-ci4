<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta5
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>RISMON</title>
    <!-- CSS files -->
    <link href="/Assets/css/tabler.min.css" rel="stylesheet"/>
    <link href="/Assets/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="/Assets/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="/Assets/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="/Assets/css/demo.min.css" rel="stylesheet"/>

    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="/Assets/img/logo.png">


    <style>
      .field-icon {
        float: right;
        height: 15px;
        width: 15px;
        margin-top: 1px;
        position: relative;
        z-index: 2;
      }
    </style>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  </head>
  <body  class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <a href="#" style="font-family: Aclonica; font-size: 23px; color: #206bc4; text-decoration: none">
          <img src="/Assets/img/survei_login.png" alt="RISMON">
            <!-- <i class="ti ti-ghost"></i> B O O O ! ! -->
          </a>
        </div>
        <form class="card card-md" id="form" autocomplete="on">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Login</h2>
            <div class="mb-3">
              <label for="InputForEmail" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?> " placeholder="Masukkan Email">
            </div>
            <div class="mb-2">
            <label for="InputForPassword" class="form-label">Password</label>
                        
              <div class="input-group input-group-flat">
              <input id="password-field" type="password" name="password" class="form-control" id="InputForPassword" placeholder="Password">
                <span class="input-group-text">
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle toggle-password"></span>
                </span>
              </div>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100 login">Masuk</button>
            </div>
          </div>
          <div class="hr-text">or</div>
          
        </form>
        <div class="text-center text-muted mt-3">
          Belum punya akun? <a href="/register" tabindex="-1">Daftar</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Toggle Pass -->
    <script>
      $(".toggle-password").click(function() {

          $(this).toggleClass("fa-eye fa-eye-slash");
          var input = $($(this).attr("toggle"));
          if (input.attr("type") == "password") {
          input.attr("type", "text");
          } else {
          input.attr("type", "password");
          }
      });

      $(document).ready(function(e) {
        toastr.options = {
            'closeButton': false,
            'debug': false,
            'newestOnTop': false,
            'progressBar': true,
            'positionClass': 'toast-top-right',
            'preventDuplicates': false,
            'showDuration': '1000',
            'hideDuration': '1000',
            'timeOut': '5000',
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut',
        }

        $(document).on('click', '.login', function(e) {
          e.preventDefault();
          // var data = {
          //   'email': $('#InputForEmail').val(),
          //   'password': $('#InputForPassword').val(),
          // };
          $.ajax({
            method: "post",
            url: "login/auth",
            data: $('#form').serialize(),
            success: function(response) {
              if (response.status == "Berhasil") {
                window.location.href = 'data';
              } else if (response.status == "Email/Password Salah") {
                toastr.error(response.status);
              } else {
                toastr.error(response.status);
              }
            }
          });
          e.preventDefault();
        });
      });
    </script>
    <!-- Tabler Core -->
    <script src="/Assets/js/tabler.min.js"></script>
    <script src="/Assets/js/demo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  </body>
</html>