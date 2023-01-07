<!DOCTYPE html>
<html>


<body data-spy="scroll" class="login-container">
    <section class="vh-100 bg-light">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong card-login">
                        <div class="card-body p-5">
                            <h3 class="mb-5 text-center text-title">Add Anime</h3>
                            <form id="form-login" action="<?= base_url('register/save') ?>" method="post">
                                <div class="form-outline mb-4">
                                    <input type="text" placeholder="Judul Anime" name="title"
                                        class="form-control form-control-lg" />
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" placeholder="Sinopsis" name="description"
                                        class="form-control form-control-lg" />
                                </div>

                                <!-- <div class="form-outline mb-4">
                                    <input type="text" placeholder="Genre" name="genre"
                                        class="form-control form-control-lg" />
                                </div> -->

                                <select class="custom-select mb-4" id="inputGroupSelect01" name="genre">
                                    <option value="0" selected>Genre</option>
                                    <?php foreach($genre_list as $list) { ?>
                                        <option value="<?php echo $list->id; ?>"><?php echo $list->title; ?></option>
                                    <?php } ?>
                                </select>

                                <select class="custom-select mb-4" id="inputGroupSelect01" name="studio">
                                    <option value="0" selected>Studio</option>
                                    <?php foreach($studio_list as $list) { ?>
                                        <option value="<?php echo $list->id; ?>"><?php echo $list->title; ?></option>
                                    <?php } ?>
                                </select>

                                <button id="btn-submit" class="btn btn-lg btn-block btn-login wadaw btnWadaw"
                                    type="submit">Submit</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"
        integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Alertify JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="<?= base_url('assets/js/auth/login.js') ?>"></script>
</body>

</html>