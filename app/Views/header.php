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
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>RISMON</title>
  <!-- DATATABLES AND SWEETALERT2 STYLE-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

  <!-- CSS files -->
  <link href="Assets/css/tabler.min.css" rel="stylesheet" />
  <link href="Assets/css/tabler-flags.min.css" rel="stylesheet" />
  <link href="Assets/css/tabler-payments.min.css" rel="stylesheet" />
  <link href="Assets/css/tabler-vendors.min.css" rel="stylesheet" />
  <link href="Assets/css/demo.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.1/css/selectize.css" rel="stylesheet"/>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
  <link rel="stylesheet" href="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="/Assets/img/logo.png">

  <style>
    .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current{
      color: white ! important;
      background-color: #467fd0;
      border: #467fd0 1p radius;
      border-radius: 5px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover{
      color: #467fd0 !important;
      border: 1px solid white;
      background: rgba(76, 175, 80, 0); 
      background: -webkit-linear-gradient(white 0%, white 0%, white 0%);
      background: -moz-linear-gradient(white 0%, white 0%, white 0%);
      background: -ms-linear-gradient(white 0%, white 0%, white 0%);
      background: -o-linear-gradient(white 0%, white 0%, white 0%);
      background: linear-gradient(to white 0%, white 0%, white 0%);
    }

    .markdown>table> :not(caption)>*>*,
    .table> :not(caption)>*>* {
      border: none;
    }

    a.buttons-collection {
      margin-left: 1em;
    }

    th,
    td {
      white-space: nowrap;
    }

    div.dataTables_wrapper {
      width: 100%;
      margin: 0 auto;
    }

    th input {
      width: 90%;
    }

    thead:nth-child(2) tr th:first-child {
      pointer-events: none;
    }

    /*::placeholder {
      Chrome, Firefox, Opera, Safari 10.1+ 
      color: red;
      opacity: 1;
       Firefox 
    }*/

    /*:-ms-input-placeholder {
       Internet Explorer 10-11 
      color: red;
    } 

    ::-ms-input-placeholder {
      /* Microsoft Edge 
      color: red;
    } */

    .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
      border-radius: 4px;
    }
    
    /* .buttons-html5 {
      float: left;
      margin-left: 20px;
      padding: 2px 15px;
      background-color: #467fd0;
      color: white;
      border: #467fd0 1px solid;
      border-radius: 5px;
    } */

    /* .buttons-html5:nth-child(2) {
      margin-left: 5px;
    } */
  </style>

</head>

<body class="layout-fluid">
  <div class="wrapper">
    <header class="navbar navbar-expand-md navbar-light d-print-none">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          <a href="./data" style="font-family: Aclonica; font-size: 23px; color: #206bc4; text-decoration: none;">
            <img src="/Assets/img/rismon.png" alt="RISMON" width="110" height="32">
          </a>
        </h1>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/data" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Data Survey
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/olt" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 4 4 8 12 12 20 8 12 4" /><polyline points="4 12 12 16 20 12" /><polyline points="4 16 12 20 20 16" /></svg>
                    </span>                    
                    <span class="nav-link-title">
                      OLT
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        <div class="navbar-nav flex-row order-md-last">
        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
		   data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
              </a>
              <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
		   data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
              </a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
              <span class="avatar avatar-sm" style="background-image: url(<?= base_url('') . '/Assets' ?>/static/avatars/000m.jpg)"></span>
              <div class="d-none d-xl-block ps-2">
                <div><?= $user_name; ?></div>
                <div class="mt-1 small text-muted"><?= $role; ?></div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <!-- <a href="#" class="dropdown-item">Set status</a> -->
              <a href="/profile" class="dropdown-item">Profile & account</a>
              <!-- <a href="#" class="dropdown-item">Feedback</a> -->
              <!-- <div class="dropdown-divider"></div> -->
              <!-- <a href="#" class="dropdown-item">Settings</a> -->
              <a href="http://localhost:8080/login/logout" class="dropdown-item">Logout</a>
            </div>
          </div>
          
        </div>
      </div>
    </header>