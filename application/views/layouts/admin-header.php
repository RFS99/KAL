<?php defined('BASEPATH') or exit("No direct script access allowed"); ?>
<?PHP
header('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PISH">
    <meta name="keywords" content="PISH">
    <meta name="author" content="PISH">

    <title>PISH | <?= @$title ?></title>
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.css') ?>">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome/css/all.css') ?>">
    <!-- animate.css -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/animate-css/animate.css') ?>">
    <!-- Icofont -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/icofont/icofont.css') ?>">

    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- Alertify -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Alertify Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />

    <?php
    if (isset($css)) {
        foreach ($css as $css) {
            echo "<link type=\"text/css\" href=\"{$css}\" />" . "\r\n";
        }
    }
    ?>
</head>


<body data-spy="scroll" data-target=".fixed-top">



    <nav class="navbar navbar-expand-lg fixed-top trans-navigation header-white">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('admin') ?>"><img src="assets/images/PISH2.png" alt=""
                    class=" PISH"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link <?= @$title == "Dashboard" ? "active" : null ?> smoth-scroll"
                            href="<?= base_url('admin') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= @$title == "User" ? "active" : null ?> smoth-scroll"
                            href="<?= base_url("admin/user") ?>">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= @$title == "Message" ? "active" : null ?> smoth-scroll"
                            href="<?= base_url("admin/message") ?>">Message</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= @$title == "Profile" ? "active" : null ?> smoth-scroll"
                            href="<?= base_url("admin/profile") ?>">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="<?= base_url("logout") ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--MAIN HEADER AREA END -->