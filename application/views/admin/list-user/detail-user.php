<section>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-5">
                <div class="about-content mt-5">
                	<div class="section-heading">
                		<h4 class="section-title">Detail User</h4>
                	</div>
                    <table id="table-user" class="table table-striped" style="width:100%">
				        <thead>
				        </thead>
				        <tbody>
				            <tr>
				                <td>Avatar</td>
								<td>:</td>
				                <td>
									<?php if(@$user[0]->avatar == null): ?>
										<img class="avatar-user" src='<?=base_url("assets/images/profile/default.jpg")?>'>
									<?php else: ?>
										<img class="avatar-user" src="<?=base_url('assets/images/profile/' . @$user[0]->avatar )?>">
									<?php endif; ?>
								</td>
				            </tr>
							<tr>
								<td>Name</td>
								<td>:</td>
								<td><?=@$data[0]->fullname?></td>
							</tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><?=@$data[0]->email?></td>
							</tr>
							<tr>
								<td>Type of User</td>
								<td>:</td>
								<td>
										<?php switch(@$data[0]->user_type){
											case 0:
												echo '<label class="badge badge-primary">User</label>';
											break;
											case 1:
												echo '<label class="badge badge-info">Admin</label>';
											break;
										}
									?>
								</td>
							</tr>
							<tr>
								<td>Is Active</td>
								<td>:</td>
								<td>
									<?php switch(@$data[0]->is_active){
										case 0:
											echo '<label class="badge badge-success">Active</label>';
										break;
										case 1:
											echo '<label class="badge badge-danger">Deactive</label>';
										break;
									}
									?>
								</td>
							</tr>
							<tr>
								<td>User Status</td>
								<td>:</td>
								<td>
									<?php switch(@$data[0]->user_status){
										case 0:
											echo '<label class="badge badge-warning">Pending</label>';
										break;
										case 1:
											echo '<label class="badge badge-success">Verify</label>';
										break;
									}
									?>
								</td>
							</tr>
							<tr>
								<td>Settings</td>
								<td>:</td>
								<td>
									<button type="button" class="btn btn-sm btn-danger ml-2 btn-delete"  data-id="<?=@$data[0]->id?>" data-name="<?=@$data[0]->fullname?>" data-uri="<?=base_url('admin/user/delete')?>">
										<i class="fa fa-trash"></i> Deactive account
									</button>
									<button type="button" class="btn btn-sm btn-info ml-2 btn-reset" data-id="<?=@$data[0]->id?>" data-name="<?=@$data[0]->fullname?>" data-uri="<?=base_url('admin/user/reset-password')?>">
										<i class="fa fa-key"></i> Reset Password
									</button>
									<button type="button" class="btn btn-sm btn-success ml-2 btn-verify" data-id="<?=@$data[0]->id?>" data-name="<?=@$data[0]->fullname?>" data-uri="<?=base_url('admin/user/activation')?>">
										<i class="fa fa-check"></i> Verification Account
									</button>
								</td>
							</tr>
				        </tbody>
				    </table>
                </div>
            </div>
        </div>
    </div>
</section>
