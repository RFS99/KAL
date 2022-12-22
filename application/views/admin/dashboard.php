<body data-spy="scroll" data-target=".fixed-top">

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
                                                    <h1 class="banner-title">KAL</h1>
                                                    <p class="banner_text">Kamu bisa mencari anime dengan mengetik judul
                                                        di dalam kotak pencarian</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container">
                                                    <h1 class="banner-title">KAL</h1>
                                                    <p class="banner_text">Kamu bisa melakukan pencarian menggunakan
                                                        button genre</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container">
                                                    <h1 class="banner-title">KAL</h1>
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

    <section id="about" class="bg-light hmm">
        <section id="service">

            <!-- search section start -->
            <div class="containerSearch">
                <div class="card container">
                    <div class="card-body ">

                        <hr>
                        <form style="margin-bottom: 10px; " action="<?= base_url("search") ?>" method="post">
                            <input type="text" placeholder="Search anime . . . ">
                            <button type="submit" class="wadaw">Search</button>
                        </form>
                        <hr>
                        <table class="table borderless">
                            <tbody>
                                <tr>
                                    <th scope="row">Genre</th>
                                    <td class="text-left"><a type="submit" href="">Action</a></td>
                                    <td class="text-left"><a type="submit" href="">Adventure</a></td>
                                    <td class="text-left"><a type="submit" href="">Comedy</a></td>
                                    <td class="text-left"><a type="submit" href="">Detective</a></td>
                                    <td class="text-left"><a type="submit" href="">Drama</a></td>
                                    <td class="text-left"><a type="submit" href="">Fantasy</a></td>
                                    <td class="text-left"><a type="submit" href="">Harem</a></td>
                                    <td class="text-left"><a type="submit" href="">Horror</a></td>
                                    <td class="text-left"><a type="submit" href="">Historical</a></td>
                                </tr>

                                <tr>
                                    <th scope="row"> </th>
                                    <td class="text-left"><a type="submit" href="">Isekai</a></td>
                                    <td class="text-left"><a type="submit" href="">Mahou Shoujo</a></td>
                                    <td class="text-left"><a type="submit" href="">Martial Arts</a></td>
                                    <td class="text-left"><a type="submit" href="">Mecha</a></td>
                                    <td class="text-left"><a type="submit" href="">Military</a></td>
                                    <td class="text-left"><a type="submit" href="">Mystery</a></td>
                                    <td class="text-left"><a type="submit" href="">Music</a></td>
                                    <td class="text-left"><a type="submit" href="">Parody</a></td>
                                    <td class="text-left"><a type="submit" href="">Psychological</a></td>
                                </tr>

                                <tr>
                                    <th scope="row"> </th>
                                    <td class="text-left"><a type="submit" href="">Romance</a></td>
                                    <td class="text-left"><a type="submit" href="">School</a></td>
                                    <td class="text-left"><a type="submit" href="">Sci</a></td>
                                    <td class="text-left"><a type="submit" href="">Slice of Life</a></td>
                                    <td class="text-left"><a type="submit" href="">Sports</a></td>
                                    <td class="text-left"><a type="submit" href="">Supernatural</a></td>
                                    <td class="text-left"><a type="submit" href="">Super Power</a></td>
                                    <td class="text-left"><a type="submit" href="">Vampire</a></td>
                                </tr>
                            </tbody>
                        </table>

                        <hr>
                        <!-- STUDIO -->

                        <table class="table borderless">
                            <tbody>
                                <tr>
                                    <th scope="row">Studio</th>
                                    <td class="text-left"><a type="submit" href="">8bit</a></td>
                                    <td class="text-left"><a type="submit" href="">8PAN</a></td>
                                    <td class="text-left"><a type="submit" href="">10 Gauge</a></td>
                                    <td class="text-left"><a type="submit" href="">1IN</a></td>
                                    <td class="text-left"><a type="submit" href="">AIC</a></td>
                                    <td class="text-left"><a type="submit" href="">A-1 Pictures</a></td>
                                    <td class="text-left"><a type="submit" href="">Actas</a></td>
                                    <td class="text-left"><a type="submit" href="">Asahi Prod</a></td>
                                    <td class="text-left"><a type="submit" href="">Bones</a></td>
                                </tr>

                                <tr>
                                    <th scope="row"> </th>
                                    <td class="text-left"><a type="submit" href="">BS11</a></td>
                                    <td class="text-left"><a type="submit" href="">Brain's Base</a></td>
                                    <td class="text-left"><a type="submit" href="">BS Fuji </a></td>
                                    <td class="text-left"><a type="submit" href="">Bandai NP</a></td>
                                    <td class="text-left"><a type="submit" href="">Bridge</a></td>
                                    <td class="text-left"><a type="submit" href="">CloverWorks</a></td>
                                    <td class="text-left"><a type="submit" href="">DLE</a></td>
                                    <td class="text-left"><a type="submit" href="">Doga Kobo</a></td>
                                    <td class="text-left"><a type="submit" href="">Diomedéa</a></td>
                                </tr>

                                <tr>
                                    <th scope="row"> </th>
                                    <td class="text-left"><a type="submit" href="">David Prod</a></td>
                                    <td class="text-left"><a type="submit" href="">EMT Square</a></td>
                                    <td class="text-left"><a type="submit" href="">feel</a></td>
                                    <td class="text-left"><a type="submit" href="">Fanworks</a></td>
                                    <td class="text-left"><a type="submit" href="">J.C.Staff</a></td>
                                    <td class="text-left"><a type="submit" href="">KyoAni</a></td>
                                    <td class="text-left"><a type="submit" href="">Madhouse</a></td>
                                    <td class="text-left"><a type="submit" href="">MAPPA</a></td>
                                    <td class="text-left"><a type="submit" href="">OLM</a></td>
                                </tr>

                                <tr>
                                    <th scope="row"> </th>
                                    <td class="text-left"><a type="submit" href="">Pierrot</a></td>
                                    <td class="text-left"><a type="submit" href="">Studio Deen</a></td>
                                    <td class="text-left"><a type="submit" href="">Studio Gibli</a></td>
                                    <td class="text-left"><a type="submit" href="">Shaft</a></td>
                                    <td class="text-left"><a type="submit" href="">Toei Animation</a></td>
                                    <td class="text-left"><a type="submit" href="">Ufotable</a></td>
                                    <td class="text-left"><a type="submit" href="">Wit Studio</a></td>
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
        <section id="service" class="bg-light">
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

                                    if (isset($toko_ikan)) {
                                        foreach ($anime as $data) :
                                    ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['Nama_Toko']; ?></td>
                                                <td><?= $data['Alamat_Toko']; ?></td>
                                                <td><?= $data['no_telp']; ?></td>
                                                <td><?= $data['no_telp']; ?></td>



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