<!DOCTYPE html>
<html>

<body class="bg-light" data-spy="scroll" data-target=".fixed-top"> <br><br><br>


    <section class="bg-light">
        <div class="dlandadd text-center mb-5">
            <h3>Delete Anime</h3>
        </div>
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

                            if (isset($all_anime)) {
                                foreach ($all_anime as $data) :
                            ?>

                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['anime_title'] ?></td>
                                <td>
                                    <form id="form-login" action="<?= base_url('register/delete') ?>" method="post">
                                        <input type="hidden" name="anime_id" value="<?= $data['anime_id'] ?>" />
                                        <button type="submit" class="btn btn-danger btn-sm rounded-0" type="button"
                                            data-toggle="tooltip" data-placement="top" title="Delete"> <i
                                                class="fa fa-trash"></i> </button>
                                    </form>
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