<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-5">
                <div class="about-content mt-5">
                	<div class="section-heading">
                		<h4 class="section-title">List User</h4>
                	</div>
					<div class="float-right mb-5">
						<a href="<?=base_url('admin/user/add')?>" class="btn btn-sm btn-primary text-white"><i class="fa fa-plus"></i> Add New User</a>
					</div>
                    <table id="dt" class="table table-striped" style="width:100%">
				        <thead>
				            <tr>
				                <th>Name</th>
				                <th>Email</th>
				                <th>Type of User</th>
				                <th>Is Active</th>
				                <th>User Status</th>
								<th><i class="fa fa-cogs"></i></th>
				            </tr>
				        </thead>
				        <tbody>
							<?php
							if ( isset($data) and $data ):
								foreach($data as $row): 
									$user_type = "";
									$user_active = "";
									$user_status = "";
									/* User Type */
									switch($row->user_type){
										case 0:
											$user_type = '<label class="badge badge-primary">User</label>';
										break;
										case 1:
											$user_type = '<label class="badge badge-info">Admin</label>';
										break;
									}

									/* User Active */
									switch($row->is_active){
										case 0:
											$user_active = '<label class="badge badge-success">Active</label>';
										break;
										case 1:
											$user_active = '<label class="badge badge-danger">Deactive</label>';
										break;
									}

									/* User Status */
									switch($row->user_status){
										case 0:
											$user_status = '<label class="badge badge-warning">Pending</label>';
										break;
										case 1:
											$user_status = '<label class="badge badge-success">Verify</label>';
										break;
									}
							?>
				            <tr>
				                <td><?=$row->fullname?></td>
				                <td><?=$row->email?></td>
				                <td><?=$user_type?></td>
				                <td><?=$user_active?></td>
				                <td><?=$user_status?></td>
								<td>
									<a class="btn btn-sm btn-info" href="<?=base_url('admin/user/detail?id='. $row->id)?>"><i class="fa fa-eye"></i></a>
								</td>
				            </tr>
							<?php 
								endforeach;
							endif; ?>
				        </tbody>
				    </table>
                </div>
            </div>
        </div>
    </div>
</section>
