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

    <title>Home</title>
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.css') ?>">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome/css/all.css') ?>">
    <!-- animate.css -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/animate-css/animate.css') ?>">
    <!-- Icofont -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/icofont/icofont.css') ?>">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <!-- Alertify -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Alertify Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <nav class="navbar navbar-expand-lg fixed-top trans-navigation">
        <div class="container">
            <img src="assets/images/PISH2.png" alt="" class=" PISH">

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
                        <a class="nav-link smoth-scroll" href="#about">List Ikan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <?php if ($is_session) : ?>
                        <?php if ($user_type == 0) : ?>
                        <!-- User -->
                        <a class="nav-link smoth-scroll" href="<?= base_url('user') ?>">Account</a>
                        <?php else : ?>
                        <!-- Admin -->
                        <a class="nav-link smoth-scroll" href="<?= base_url('admin') ?>">Account</a>
                        <?php endif; ?>
                        <?php else : ?>
                        <a class="nav-link smoth-scroll" href="<?= base_url('login') ?>">Login</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--MAIN HEADER AREA END -->

    <!--MAIN BANNER AREA -->
    <div class="banner-area banner-2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                            <div class="banner-content content-padding">
                                <h5 class="subtitle">PISH</h5>
                                <h1 class="banner-title">PISH adalah sebuah website </h1>
                                <p>Website ini adalah wesite yang bisa digunakan untuk memberikan
                                    rekomendasi ikan hias air tawar untuk dipelihara dan
                                    yang berisi tentang beberapa informasi ikan hias air tawar.</p>

                                <a href="<?= base_url('user') ?>" class="btn btn-white btn-circled">LETS START</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MAIN HEADER AREA END -->

    <!--  ARWANA AREA START  -->
    <section id="about" class="bg-light">
        <div class="arwana-bg-img d-none d-lg-block d-md-block"></div> <!--  Gambar di style.css -->

        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-12 col-md-8">
                    <div class="about-content">
                        <h3 class="subtitle">Ikan Discus</h3>
                        <p>Ikan Discus merupakan salah satu jenis ikan hias air tawar yang sudah cukup
                            terkenal di kalangan pecinta ikan hias. Ikan ini memiliki bentuk tubuh
                            yang langsing yang berdiri tegak membulat yang menarik. Dikarenakan bentuk
                            tubuhnya ikan ini diberi nama Discus. Ikan Discus berasal dari sungai
                            Amazon (Brazil). Ikan Discus juga dijuluki sbagai raja ikan hias
                            air tawar, dan banyak oecinta ikan menyebutnya "The King of Aquarium".
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  ARWAN AREA END  -->

    <!--  DISCUS AREA START  -->
    <section id="about" class="bg-light">
        <div class="about-bg-img d-none d-lg-block d-md-block"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-12 col-md-8">
                    <div class="about-content">
                        <h3 class="subtitle">Ikan Discus</h3>
                        <p>Ikan Discus merupakan salah satu jenis ikan hias air tawar yang sudah cukup
                            terkenal di kalangan pecinta ikan hias. Ikan ini memiliki bentuk tubuh
                            yang langsing yang berdiri tegak membulat yang menarik. Dikarenakan bentuk
                            tubuhnya ikan ini diberi nama Discus. Ikan Discus berasal dari sungai
                            Amazon (Brazil). Ikan Discus juga dijuluki sbagai raja ikan hias
                            air tawar, dan banyak oecinta ikan menyebutnya "The King of Aquarium".
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  DISCUS AREA END  -->

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
                                    <button id="btn-submit" type="submit" class="btn btn-hero btn-circled">Send
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
    <script src="<?= base_url('assets/plugins/counterup/jquery.counterup.min.js') ?>"></script>

    <!-- Contact Form -->
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>

    <!-- Alertify JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="<?= base_url('assets/js/auth/login.js') ?>"></script>

    <!-- home js -->
    <script src="<?= base_url('assets/js/home.js') ?>"></script>
</body>

</html>