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

    <nav class="navbar navbar-expand-lg fixed-top trans-navigation">
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
                        <a class="nav-link smoth-scroll" href="#about">List Genre</a>
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
    <div class="banner-area ">
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
                                                    <h1 class="banner-title">KAL</h1>
                                                    <p class="banner_text">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority have sufferedThere are
                                                        ma available, but the majority have suffered</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container">
                                                    <h1 class="banner-title">KAL</h1>
                                                    <p class="banner_text">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority have sufferedThere are
                                                        ma available, but the majority have suffered</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container">
                                                    <h1 class="banner-title">KAL</h1>
                                                    <p class="banner_text">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority have sufferedThere are
                                                        ma available, but the majority have suffered</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- banner section end -->

                                <a href="<?= base_url('user') ?>" class="btn btn-white btn-circled">LETS START</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MAIN HEADER AREA END -->

    <!--  GENRE AND STUDIO START  -->

    <section id="about" class="bg-light">
        <section id="service">
            <!-- search section start -->
            <div class="containerSearch">
                <form>
                    <input type="text" placeholder="Search anime . . .">
                    <button type="submit"> Search</button>
                </form>
            </div>
            <!-- search section end -->
            <div class="container" style="padding: 10px;">
                <div class="col-lg-20 col-sm-20 col-md-20">
                    <a type="submit" href="">Action</a>
                    <a type="submit" href="">Adventure</a>
                    <a type="submit" href="">Comedy</a>
                    <a type="submit" href="">Detective</a>
                    <a type="submit" href="">Drama</a>
                    <a type="submit" href="">Fantasy</a>
                    <a type="submit" href="">Harem</a>
                    <a type="submit" href="">Horror</a>
                    <a type="submit" href="">Historical</a>
                    <a type="submit" href="">Isekai</a>
                    <a type="submit" href="">Mahou Shoujo</a>
                    <a type="submit" href="">Martial Arts</a>
                    <a type="submit" href="">Mecha</a>
                    <a type="submit" href="">Military</a>
                    <a type="submit" href="">Mystery</a>
                    <a type="submit" href="">Music</a>
                    <a type="submit" href="">Parody</a>
                    <a type="submit" href="">Psychological</a>
                    <a type="submit" href="">Romance</a>
                    <a type="submit" href="">School</a>
                    <a type="submit" href="">Sci-Fi</a>
                    <a type="submit" href="">Slice of Life</a>
                    <a type="submit" href="">Sports</a>
                    <a type="submit" href="">Supernatural</a>
                    <a type="submit" href="">Super Power</a>
                    <a type="submit" href="">Vampire</a>

                </div>
            </div>
            <div class="container">
                <div class="col-lg-20 col-sm-20 col-md-20">
                    <a type="submit" href="">8bit</a>
                    <a type="submit" href="">8PAN</a>
                    <a type="submit" href="">10 Gauge</a>
                    <a type="submit" href="">1IN</a>
                    <a type="submit" href="">AIC</a>
                    <a type="submit" href="">A-1 Pictures</a>
                    <a type="submit" href="">Actas</a>
                    <a type="submit" href="">Asahi Production</a>
                    <a type="submit" href="">Bones </a>
                    <a type="submit" href="">BS11</a>
                    <a type="submit" href="">Brain's Base</a>
                    <a type="submit" href="">BS Fuji </a>
                    <a type="submit" href="">Bandai Namco Pictures</a>
                    <a type="submit" href="">Bridge</a>
                    <a type="submit" href="">CloverWorks</a>
                    <a type="submit" href="">DLE</a>
                    <a type="submit" href="">Doga Kobo</a>
                    <a type="submit" href="">Diomedéa</a>
                    <a type="submit" href="">David Production</a>
                    <a type="submit" href="">EMT Squared</a>
                    <a type="submit" href="">feel.</a>
                    <a type="submit" href="">Fanworks</a>
                    <a type="submit" href="">J.C.Staff</a>
                    <a type="submit" href="">Kyoto Animation</a>
                    <a type="submit" href="">Madhouse</a>
                    <a type="submit" href="">MAPPA</a>
                    <a type="submit" href="">OLM </a>
                    <a type="submit" href="">Pierrot</a>
                    <a type="submit" href="">Studio Deen</a>
                    <a type="submit" href="">Studio Gibli</a>
                    <a type="submit" href="">Shaft</a>
                    <a type="submit" href="">Toei Animation</a>
                    <a type="submit" href="">Ufotable</a>
                    <a type="submit" href="">Wit Studio</a>

                </div>
            </div>


        </section>
        <!--  GENRE AND STUDIO SECTION END-->



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
                                        <input name="name" type="text" class="form-control" placeholder="Name" required>
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