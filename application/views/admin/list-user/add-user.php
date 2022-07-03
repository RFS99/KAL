<section>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-5">
                <div class="about-content mt-5">
                	<div class="section-heading">
                		<h4 class="section-title">Add New User</h4>
                	</div>
					<form id="form-submit" action="<?=base_url('admin/user/add/save')?>" method="post">
						<div class="row">
							<div class="col-md-12 form-group">
								<input name="fullname" type="text" class="form-control" placeholder="Name">
							</div>
							<div class="col-12 form-group">
								<input name="email" type="text" class="form-control" placeholder="Email">
							</div>
							<div class="col-12 form-group">
								<select name="user_type" class="form-control">
									<option value="">- User Type -</option>
									<option value="0">User</option>
									<option value="1">Admin</option>
								</select>
							</div>
							<div class="col-12 mt-5 text-center">
								<button id="btn-submit" class="btn btn-sm btn-hero">Submit</button>
							</div>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</section>
