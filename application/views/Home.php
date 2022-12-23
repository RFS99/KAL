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

<body data-spy="scroll" data-target=".fixed-top">

    <nav class="navbar navbar-expand-lg fixed-top trans-navigation bl">
        <div class="container">
            <img src="assets/images/Logo2.png" alt="" class=" PISH">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active smoth-scroll" href=".banner-area">Home <span
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
                                                    <p class="banner_text">Kamu bisa melakukan pencarian menggunakan
                                                        button genre</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container">
                                                    <img src="assets/images/Logo-Type-KAL.png" alt=""
                                                        style="width: 400px; height:350;">
                                                    <p class="banner_text">Kamu bisa melakukan pencarian menggunakan
                                                        button studio</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- banner section end -->
                                <a href="<?= base_url('#about') ?>" class="btn btn-white btn-circled wadaw">LETS
                                    START</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
    </div>
    <!--MAIN HEADER AREA END -->

    <!--  GENRE AND STUDIO START  -->
    <br>
    <br>

    <section id=" about" class="bg-light hmm">
        <section id="service">

            <!-- search section start -->
            <div class="containerSearch">
                <div class="card container">
                    <div class="card-body ">

                        <hr>
                        <form style="margin-bottom: 10px; " action="<?= base_url("search") ?>" method="post">
                            <input type="text" placeholder="Search anime . . . ">
                            <button type="submit" class="wadaw btnWadaw">Search</button>
                        </form>
                        <hr>

                        <table class="table borderless">
                            <tbody>
                                <form>

                                    <tr class="text-left">
                                        <th scope="row">Genre</th>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Action</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Adventure</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Comedy</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Detective</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Drama</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Fantasy</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Harem</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Horror</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Historical</span>
                                            </label>
                                        </td>

                                    </tr>

                                    <tr>
                                        <th scope="row"> </th>

                                        <td>

                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Isekai</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Mahou Shoujo</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Martial Arts</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Mecha</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Military</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Mystery</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Music</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Parody</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Psychological</span>
                                            </label>
                                        </td>

                                    </tr>

                                    <tr>
                                        <th scope="row"> </th>

                                        <td>

                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Romance</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">School</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Sci-Fi</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Slice of Life</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Sports</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Supernatural</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Super Power</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="widiw">
                                                <input type="checkbox" href="">
                                                <span class="checkmark">Vampire</span>
                                            </label>
                                        </td>

                                    </tr>
                                </form>

                            </tbody>
                        </table>
                        <hr>
                        <!-- STUDIO -->

                        <table class="table borderless">
                            <tbody>
                                <tr>
                                    <th scope="row">Studio</th>
                                    <td>

                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">8bit</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">8PAN</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">10 Gauge</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">1IN</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">AIC</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">A-1 Pictures</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Actas</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Asahi Prod</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Bones</span>
                                        </label>
                                    </td>

                                </tr>

                                <tr>
                                    <th scope="row"> </th>

                                    <td>

                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">BS11</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Brain's Base</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">BS Fuji</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Bandai</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Bridge</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">CloverWorks</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">DLE</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Doga Kobo</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Diomedéa</span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row"> </th>


                                    <td>

                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">David Prod</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">EMT Square</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">feel</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Fanworks</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">J.C.Staff</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">KyoAni</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Madhouse</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">MAPPA</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">OLM</span>
                                        </label>
                                    </td>

                                </tr>

                                <tr>
                                    <th scope="row"> </th>


                                    <td>

                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Pierrot</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Studio Deen</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Studio Gibli</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Shaft</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Toei
                                                Animation</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Ufotable</span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="widiw">
                                            <input type="checkbox" href="">
                                            <span class="checkmark">Wit Studio</span>
                                        </label>
                                    </td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



            <!-- search section end -->
        </section>
        <br>
        <br>
        <section id=" service" class="bg-light">
            <section id="service">

                <!-- search section start -->
                <div class="card container">
                    <div class="card-body ">
                        <div class="container">
                            <br>
                            <br>
                            <h3>Anime</h3><br>

                            <table border="1" class="table table-striped text-dark">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Anime</th>
                                        <th>Sinopsis</th>
                                        <th>Genre</th>
                                        <th>Studio</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $no = 1;

                                    if (isset($animerec)) {
                                        foreach ($animerec as $data) :
                                    ?>

                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data['title']; ?></td>
                                        <td><?= $data['description']; ?></td>
                                        <td><?= $data['title']; ?></td>
                                        <td><?= $data['title']; ?></td>



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
            <section id="contact" class="section-padding ">
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
                                            <div class="alert alert-success contact__msg" style="display: none"
                                                role="alert">
                                                Your message was sent successfully.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end message -->
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input name="name" type="text" class="form-control" placeholder="Name"
                                                required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="email" type="email" class="form-control" placeholder="Email"
                                                required>
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
                                © 2022 All Rights Reserved.
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
            <script src="<?= base_url('assets/plugins/bootstrap/js/popper.min.js') ?>"></script>
            <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
            <!-- Woow animtaion -->
            <script src="<?= base_url('assets/plugins/counterup/wow.min.js') ?>"></script>
            <script src="<?= base_url('assets/plugins/counterup/jquery.easing.1.3.js') ?>"></script>
            <!-- Counterup -->
            <script src="<?= base_url('assets/plugins/counterup/jquery.waypoints.js') ?>"></script>
            <script src="<?= base_url('assets/plugins/counterup/jquery.counterup.min.js') ?>">
            </script>

            <!-- Contact Form -->
            <script src="<?= base_url('assets/js/custom.js') ?>"></script>

            <!-- Alertify JavaScript -->
            <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
            <script src="<?= base_url('assets/js/auth/login.js') ?>"></script>

            <!-- home js -->
            <script src="<?= base_url('assets/js/home.js') ?>"></script>
</body>

</html>
</script>

<!-- Contact Form -->
<script src="<?= base_url('assets/js/custom.js') ?>"></script>

<!-- Alertify JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="<?= base_url('assets/js/auth/login.js') ?>"></script>

<!-- home js -->
<script src="<?= base_url('assets/js/home.js') ?>"></script>
</body>

</html>