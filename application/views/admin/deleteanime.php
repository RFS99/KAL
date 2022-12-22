<body data-spy="scroll" data-target=".fixed-top">


    <!--  GENRE AND STUDIO START  -->
    <br>
    <br>

    <section class="bg-light">
        <h3 class="mb-5 text-center text-title">Delete Anime</h3>
        <!-- search section start -->
        <div class="card container">
            <div class="card-body ">
                <div class="container">
                    <br>
                    <br>

                    <table border="1" class="table table-striped text-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Judul Anime</th>
                                <th>Sinopsis</th>
                                <th>Genre</th>
                                <th>Studio</th>
                                <th>Acton</th>

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