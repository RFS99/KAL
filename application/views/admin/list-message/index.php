<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-5">
                <div class="about-content mt-5">
                	<div class="section-heading">
                		<h4 class="section-title">List Message</h4>
                	</div>
                    <table id="dt" class="table table-striped" style="width:100%">
				        <thead>
				            <tr>
				                <th>Name</th>
				                <th>Subject</th>
				                <th>Email</th>
								<th>Status</th>
								<th><i class="fa fa-cogs"></i></th>
				            </tr>
				        </thead>
				        <tbody>
							<?php
							if ( isset($data) and $data ):
								foreach($data as $row): 
									$is_read = "";
									$status_read = "";
									/* User Type */
									if($row->is_read == "0"){
										$is_read = "#c6f6ff" ;
										$status_read = '<label class="badge badge-danger">Unread</label>';
									}
									else if($row->is_read == "1"){
										$is_read = "#feffff";
										$status_read = '<label class="badge badge-success">Read</label>';
									}
							?>
				            <tr style="background-color: <?=$is_read?>">
				                <td><?=$row->name?></td>
				                <td><?=$row->subject?></td>
				                <td><?=$row->email?></td>
								<td><?=$status_read?></td>
								<td>
								<a class="btn btn-sm btn-info" href="<?=base_url('admin/message/detail?id='. $row->id)?>"><i class="fa fa-eye"></i></a>
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
