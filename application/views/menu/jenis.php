<?php foreach($data_pemilih->result_array() as $row){ ?>
	<div class="row">
		<div class="col-sm-5" style="background:orange">
		<div class="panel-body">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email Address</label>
					<div class="col-lg-10">
						<input class="form-control" id="InputEmail1" placerholder="Email" type="email">
						<p class="help-block">Example block-level help text here.</p>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword1"  class="col-lg-2 col-sm-2 control-label">Password</label>
					<div class="col-lg-10">
						<input class="form-control" id="inputPassword1" placerholder="Password" type="password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-10">
						<div class="checkbox">
							<label>
								<input type="checkbox">Check me out
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-10">
						<button type="submit" class="btn btn-danger">Sign In</button>
					</div>
				</div>
			</form>
		</div>
		</div>
		</div>

				<?php } ?>