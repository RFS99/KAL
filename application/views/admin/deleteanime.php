<!DOCTYPE html>
<html>

<body data-spy="scroll" data-target=".fixed-top">
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
                                <th>Acton</th>
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
                                <td><?= $data['anime_title']; ?>
                                <td>
                                    <?php echo anchor('Hapus'); ?>
                                </td>


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

</html>