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
<section class="section-padding">
    <div class="container">
        <br>
        <br>
        <br>
        <h3>Rangking Ikan Terbaik</h3><br>

        <table border="1" class="table table-striped text-dark">
            <thead class="thead-dark">
                <tr>
                    <th>Rank</th>
                    <th>Nama Ikan</th>

                </tr>
            </thead>
            <tbody>

                <?php
                $nomor = 1;

                if (isset($topsis_rank)) {
                    foreach ($topsis_rank as $data) :
                ?>

                <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $data['nama_ikan']; ?></td>


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
</section>





<!--INPUT DATA AIR USER -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-14 mt-2 mb-2">
                <div class="about-content mt-5">
                    <div class="section-heading">
                        <h3 class="section-title">Tambah Data (Exp: 5.6)</h3>
                    </div>
                    <form method="post" action="<?= base_url('input_cs') ?>">
                        <table>
                            <tr>
                                <td>Temperatur Air</td>
                                <td><input type="float" name="suhu" required></td>
                            </tr>
                            <tr>
                                <td>Tingkat PH Air</td>
                                <td><input type="float" name="ph" required></td>
                            </tr>
                            <tr>
                                <td>Kadar Oksigen Air (DO)</td>
                                <td><input type="float" name="do" required></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="SIMPAN"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div><br>
</section>

<section class="section-padding">
    <div class="container">
        <br>
        <br>
        <br>
        <h3>Daftar Toko Ikan</h3><br>

        <table border="2" class="table table-striped text-dark">
            <thead class="thead-dark">
                <tr>
                    <th>Rank</th>
                    <th>Nama Ikan</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;

                if (isset($toko_ikan)) {
                    foreach ($toko_ikan as $data) :
                ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['Nama_Toko']; ?></td>
                    <td><?= $data['Alamat_Toko']; ?></td>
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
</section>

</html>