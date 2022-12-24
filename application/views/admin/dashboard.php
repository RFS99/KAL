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
                                                    <p class="banner_text">Kamu bisa mencari anime menggunakan
                                                        button genre</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container">
                                                    <img src="assets/images/Logo-Type-KAL.png" alt=""
                                                        style="width: 400px; height:350;">
                                                    <p class="banner_text">Kamu bisa mencari anime menggunakan
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
                        <form style="margin-bottom: 10px; " action="<?= base_url("search") ?>" method="post" required
                            maxlength="50">
                            <input type="search" name="keyword" placeholder="Search anime . . . ">
                            <button type="submit" class="wadaw btnWadaw">Search</button>
                        </form>
                        <hr>

                        <table class="table borderless">
                            <tbody>
                                <form action="<?= base_url("genre") ?>" method="post">

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
                                        <td><?= $data['anime_title']; ?></td>
                                        <td><?= $data['description']; ?></td>
                                        <td><?= $data['nama_genre']; ?></td>
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
</body>