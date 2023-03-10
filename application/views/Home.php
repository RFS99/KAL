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
</head>

<body data-spy="scroll" data-target=".fixed-top" class="bg-light">
    <div id="loader">
        <div class="loading-app"></div>
    </div>
    <nav class="navbar navbar-expand-lg fixed-top trans-navigation bl">
        <div class="container">
            <a href="home"><img src="assets/images/Logo2.png" alt="" class=" PISH"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active smoth-scroll" href="home">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <?php if ($is_session) : ?>
                        <?php if ($user_type == 0) : ?>
                        <!-- User -->
                        <a class="nav-link smoth-scroll" href="<?= base_url('admin') ?>">Admin</a>
                        <?php else : ?>
                        <!-- Admin -->
                        <a class="nav-link smoth-scroll" href="<?= base_url('admin') ?>">Admin</a>
                        <?php endif; ?>
                        <?php else : ?>
                        <a class="nav-link smoth-scroll" href="<?= base_url('login') ?>">Login Admin</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--MAIN HEADER AREA END -->

    <!--MAIN BANNER AREA -->
    <div class="banner-area bg">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                            <div class="banner-content content-padding">
                                <!-- banner section start -->
                                <div class="banner_section layout_padding">
                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="container">
                                                    <img src="assets/images/Logo-Type-KAL.png" alt=""
                                                        style="width: 400px; height:350;">

                                                    <p class="banner_text">Kamu bisa mencari anime dengan mengetik judul
                                                        di dalam kotak pencarian</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container">
                                                    <img src="assets/images/Logo-Type-KAL.png" alt=""
                                                        style="width: 400px; height:350;">
                                                    <p class="banner_text">Kamu bisa menambahkan kriteria pencarian
                                                        dengan
                                                        button genre</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container">
                                                    <img src="assets/images/Logo-Type-KAL.png" alt=""
                                                        style="width: 400px; height:350;">
                                                    <p class="banner_text">Kamu bisa menambahkan kriteria pencarian
                                                        dengan
                                                        button studio</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- banner section end -->
                                <a href="#about" class="btn btn-white btn-circled wadaw">LETS
                                    START</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MAIN HEADER AREA END -->

    <!--  GENRE AND STUDIO START  -->
    <br>

    <section id="about" class="bg-light hmm">
        <!-- search section start -->
        <div class="containerSearch">
            <div class="card container">
                <div class="card-body">
                    <hr>
                    <form class="mb-5" action="<?= base_url("search") ?>" method="post" required>
                        <div class="col-md-12 d-flex">
                            <input id="tombolcari" type="search" name="keyword" placeholder="Search anime . . ."
                                class="w-100" required>
                            <button id="btn-search" type="submit" class="wadaw btnWadaw">Search</button>
                        </div>
                        <hr>

                        <table class="table borderless col-md-12">
                            <tbody>
                                <?php if (isset($genre_list) && $genre_list) :
                                    $a = 0;
                                    foreach ($genre_list as $row) : $a++ ?>
                                <tr>
                                    <th scope="row"><?= ($a == 1) ? "Genres" : "" ?></th>
                                    <?php foreach ($row as $genre) : ?>
                                    <td class="text-left">
                                        <label class="widiw">
                                            <input type="checkbox" name="genres[]" value="<?= @$genre->title ?>">
                                            <span class="checkmark"><?= @$genre->title ?></span>
                                        </label>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <?php
                                    endforeach;
                                else : ?>
                                <tr>
                                    <td colspan="100%">Tidak ada data.</td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <hr>
                        <table class="table borderless col-md-12">
                            <tbody>
                                <?php if (isset($studio_list) && $studio_list) :
                                    $a = 0;
                                    foreach ($studio_list as $row) : $a++ ?>
                                <tr>
                                    <th scope="row"><?= ($a == 1) ? "Studios" : "" ?></th>
                                    <?php foreach ($row as $studio) : ?>
                                    <td class="text-left">
                                        <label class="widiw">
                                            <input type="checkbox" name="studios" value="<?= @$studio->title ?>">
                                            <span class="checkmark"><?= @$studio->title ?></span>
                                        </label>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <?php
                                    endforeach;
                                else : ?>
                                <tr>
                                    <td colspan="100%">Tidak ada data.</td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <hr>
                    </form>
                </div>
            </div>
        </div>

        <!-- search section end -->
    </section>
    <section id="anime-recommendation">
        <!-- search section start -->
        <div class="card container">
            <div class="card-body ">
                <div class="container">
                    <h3>Anime</h3>
                    <table border="1" class="table table-striped text-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th class="th0">No</th>
                                <th class="th1">Judul Anime</th>
                                <th class="th2">Sinopsis</th>
                                <th class="th3">Genre</th>
                                <th class="th4">Studio</th>
                                <th class="th5">Score</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 1;
                            if (isset($anime_rec)) {
                                foreach ($anime_rec as $data) :
                            ?>

                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= @$data['anime'][0]->anime_title ?></td>
                                <td><?= @$data['anime'][0]->description ?></td>
                                <td><?= str_replace(',', ', ', @$data['anime'][0]->genre_title) ?></td>
                                <td><?= str_replace(',', ', ', @$data['anime'][0]->studio_title) ?></td>
                                <td><?= @$data['score']; ?></td>
                            </tr>
                            <?php
                                endforeach;
                                ?>
                            <?php

                            }
                            ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        <!-- search section end -->
    </section>
    <!--  CONTACT START  -->
    <section id="contact" class="section-padding dlandadd bg-light ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-mfd-12">
                    <div class="section-heading">
                        <h4 class="section-title">Get in touch</h4>
                        <p>Jika ada pertanyaan yang ingin ditanyakan</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-12 m-auto">
                    <div class="contact-form ">
                        <form id="form-submit" class="contact__form" method="post"
                            action="<?= base_url('contact/save') ?>">
                            <!-- form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                        Your message was sent successfully.
                                    </div>
                                </div>
                            </div>
                            <!-- end message -->
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input name="subject" type="text" class="form-control" placeholder="Subject"
                                        required>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea name="message" class="form-control" rows="6" placeholder="Message"
                                        required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button id="btn-submit" type="submit"
                                        class="btn btn-hero btn-circled btnWadaw wadaw">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  CONTACT END  -->

    <!--  FOOTER AREA START  -->
    <section id="footer" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer-copy">
                        ?? 2022 All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  FOOTER AREA END  -->

    <!-- Main jQuery -->
    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"
        integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>

    </script>

    <!-- Alertify JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="<?= base_url('assets/js/auth/login.js') ?>"></script>

    <!-- home js -->
    <script>
    var base = "<?= base_url() ?>";
    </script>
    <script src="<?= base_url('assets/js/home.js') ?>"></script>
</body>

</html>