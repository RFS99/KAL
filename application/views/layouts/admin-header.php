<?php defined('BASEPATH') or exit("No direct script access allowed"); ?>
<?PHP
header('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="seo & digital marketing">
    <meta name="keywords"
        content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company">
    <meta name="author" content="Themefisher.com">

    <title>Home - Kimi no AnimeList</title>
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.css?v=1.1') ?>">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome/css/all.css?v=1.1') ?>">
    <!-- animate.css -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/animate-css/animate.css?v=1.1') ?>">
    <!-- Icofont -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/icofont/icofont.css?v=1.1') ?>">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css?v=1.1') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style2.css?v=1.1') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style3.css?v=1.1') ?>">


    <!-- Alertify -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css?v=1.1" />
    <!-- Alertify Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css?v=1.1" />

	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>


<body data-spy="scroll" data-target=".fixed-top">



    <nav class="navbar navbar-expand-lg fixed-top trans-navigation header-white bl">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('home') ?>"><img src="assets/images/Logo2.png" alt=""
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
                            href="<?= base_url('home') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= @$title == "Add Anime" ? "active" : null ?> smoth-scroll"
                            href="<?= base_url("admin/addanime") ?>">Add Anime</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= @$title == "Delet Anime" ? "active" : null ?> smoth-scroll"
                            href="<?= base_url("admin/deleteanime") ?>">Delete Anime</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= @$title == "Message" ? "active" : null ?> smoth-scroll"
                            href="<?= base_url("admin/message") ?>">Message</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="<?= base_url("logout") ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--MAIN HEADER AREA END -->
