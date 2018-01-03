<!doctype html>
<html lang="en">
<head>
        <meta name="robots" content="index, follow"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <title><?= isset($title) ? $title : "Delapp" ?></title>


        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!-- PRODUCTION MODE
        <link rel="stylesheet" type="text/css" href="./dist/lightweight-admin-template.min.css">
        -->
        <link rel="stylesheet" type="text/css" href="css/lightweight-admin-template.css">
        <link rel="stylesheet" type="text/css" href="css/bem-kit.min.css">





</head>
<body class="site">

  <header role="header" class="site__header header" id="home" style="z-index:99;">
  		<div class="header__wrapper">

        <div class="header__brand">
          <img src="./images/brand.png" />
          <div class="header__title">
            Lightweight Admin Template
          </div>
        </div>

        <div class="header__account account account--has-login">
            <div class="account__wrapper">
              <img class="account__img" src="./images/red.jpg" />
              <span class="account__name">Username</span>
            </div>
            <i class="account__arrow fa fa-angle-down js--show-dropdown-menu"></i>

            <div class="account__menu">
              <ul class="account__menu-wrapper">
                <li class="account__menu-item"><a href="#profil">Profile</a></li>
                <li class="account__menu-item"><a href="#logout">Logout</a></li>
              </ul>
            </div>

        </div>

        <div class="header__nav--mobile">
          <div class="header__nav-btn" id="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

      </div>
  </header>

  <main role="main" class="site__main main">
