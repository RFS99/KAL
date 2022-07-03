<section>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-5">
                <div class="about-content mt-5">
                	<div class="section-heading">
                		<h4 class="section-title">Detail Message</h4>
                	</div>
                    <table id="table-user" class="table table-striped" style="width:100%">
				        <thead>
				        </thead>
				        <tbody>
				            <tr>
				                <td>Name</td>
								<td>:</td>
				                <td><?=@$data[0]->name?></td>
				            </tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><?=@$data[0]->email?></td>
							</tr>
							<tr>
								<td>Created At</td>
								<td>:</td>
								<td><label class="badge badge-primary"><?=date("d M Y, h:m:s", strtotime(@$data[0]->created_at));?></label></td>
							</tr>
							<tr>
								<td>Read At</td>
								<td>:</td>
								<td><label class="badge badge-success"><?=date("d M Y, h:m:s", strtotime(@$data[0]->read_at));?></label></td>
							</tr>
							<tr>
								<td>Subject</td>
								<td>:</td>
								<td><?=@$data[0]->subject?></td>
							</tr>
							<tr>
								<td>Message</td>
								<td>:</td>
								<td><?=@$data[0]->message?></td>
							</tr>
				        </tbody>
				    </table>
                </div>
            </div>
        </div>
    </div>
</section>
