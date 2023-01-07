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
                            <input type="search" name="keyword" placeholder="Search anime . . ." class="w-100" required>
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
                                <th>No</th>
                                <th>Judul Anime</th>
                                <th>Sinopsis</th>
                                <th>Genre</th>
                                <th>Studio</th>
                                <th>Score</th>
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
                                <td><?= @$data['anime'][0]->genre_title ?></td>
                                <td><?= @$data['anime'][0]->studio_title ?></td>
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
</body>