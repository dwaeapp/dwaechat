	<link rel="stylesheet" href="<?=base_url()?>assets/css/before.css">	
	<div class="container">
		<div class="row">
			<div class="mt-4 mb-4 col-md-12">
				<h1 style="font-size: 20px; font-weight: bold;" class="text-primary text-center"> WELCOME TO OUR CHAT ROOM</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<img src="<?=base_url()?>assets/core/chat-icon.png" width="100%" class="img-circle" alt="logo">
			</div>
		</div>
		<div class="row">
			<div class="mt-4 col-md-12">
				<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#formsignin"> <i class="fa fa-sign-in"></i> Sign In</button>
				<p></p>
				<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#formsignup"> <i class="fa fa-user"></i> Sign Up</button>
			</div>
		</div>
		<!-- SIGN IN MODAL -->
		<div id="formsignin" class="modal hide fade" tabindex="-1" aria-hidden="true" data-backdrop="false" data-keyboard="false" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title text-info">Sign In</h3>
						<button type="button" data-dismiss="modal" class="close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" id="form-login">
							<div class="form-group">
								<p id="notif"></p>
							</div>
							<div class="form-group">
								<label for="Username" class="col-form-label">Username :</label>
								<input type="text" id="Username" class="form-control" placeholder="Username" required pattern="[a-zA-Z]{5,10}" x-moz-errormessage="The form must be in the 5-10 character!">
							</div>
							<div  class="form-group">
								<label for="Password" class="col-form-label">Password :</label>
								<input type="password" id="Password" class="form-control" placeholder="Password" required pattern=".{5,10}" x-moz-errormessage="The form must be in the 5-10 character!">
							</div>
							<div class="form-group">
								<label class="checkbox-inline">
									<input id="Remember" type="checkbox" value="rememberme"> <sup>Remember Me <font size=1 color='red'> <sup>*) 1 Hours</sup> </sup></font> 
								</label>
							</div>
							<div class="form-group pull-right">
								<button type="submit" id="signin" class="btn btn-sm btn-secondary"> Sign In</button>
								<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"> Close</button>
							</div>
						</form>
					</div>
					<div class="modal-footer"></div>
				</div>		
			</div>
		</div>
		<!-- Sign Up MODAL -->
		<div id="formsignup" class="modal hide fade" tabindex="-1" aria-hidden="true" data-backdrop="false" data-keyboard="true" role="dialog">il
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title text-info">Sign Up</h3>
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" id="form-register">
							<div class="form-group">
								<p id="reg-notif"></p>
							</div>
							<div class="form-group"> 
								<label for="Ruser" class="col-form-label">Username :</label>
								<input type="text" id="Ruser" class="form-control" placeholder="Username" required pattern="[a-zA-Z]{5,10}" x-moz-errormessage="The form must be in the 5-10 character!"> 
							</div>
							<div class="form-group">
								<label for="Rpass" class="col-form-label">Password :</label> 
								<input type="password" id="Rpass" class="form-control" placeholder="Password" required pattern=".{5,10}" x-moz-errormessage="The form must be in the 5-10 character!"> 
							</div>
							<div class="form-group">
								<label for="Rnick" class="col-form-label">Nickname :</label>
								<input type="text" id="Rnick" class="form-control" placeholder="Nickname" required pattern="[a-zA-Z]{5,10}" x-moz-errormessage="The form must be in the 5-10 character!">
							</div>
							<div class="form-group">
								<label for="Rmail" class="col-form-label">Email :</label>
								<input type="email" id="Rmail" class="form-control" placeholder="Email" required x-moz-errormessage="Email is invalid !">
							</div>
							<div class="form-group pull-right">
								<button type="submit" class="btn btn-sm btn-secondary"> Sign Up</button>
								<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"> Close </button>
							</div>
						</form>
					</div>
					<div class="modal-footer">
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /container -->
