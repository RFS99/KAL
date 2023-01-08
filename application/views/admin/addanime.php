<section class="vh-100 bg-light mt-5">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong card-login">
                    <div class="card-body p-5">
                        <h3 class="mb-5 text-center text-title">Add Anime</h3>
                        <form id="default-form" action="<?= base_url('register/save') ?>" method="post">
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

                            <label>Choose Genre</label>
                            <select class="addGenre select2" multiple placeholder="Choose Genre" name="genres[]">
                                <?php foreach ($genre_list as $list) { ?>
                                <option value="<?php echo $list->id; ?>"><?php echo $list->title; ?></option>
                                <?php } ?>
                            </select>

                            <label class="mt-3">Choose Studio</label>
                            <select class="addGenre select2" multiple name="studios[]">
                                <?php foreach ($studio_list as $list) { ?>
                                <option value="<?php echo $list->id; ?>"><?php echo $list->title; ?></option>
                                <?php } ?>
                            </select>

                            <button id="btn-submit" class="btn btn-lg btn-block btn-login wadaw btnWadaw mt-5"
                                type="submit">Submit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>