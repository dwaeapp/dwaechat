<link rel="stylesheet" href="<?=base_url()?>assets/css/before.css">
<script defer src="<?=base_url()?>assets/js/manager.js"></script>
<div class="container">
	<br/><br/>
	<div class="card mt-4">
		<div class="card-header">
		<h3 class="text-info page-header">Please login</h3>
		</div>
		<div class="card-body">
			<form id="admin-login">
				<div class="form-group">
					<p id="login-notif"></p>
				</div>
				<div class="form-group">
					<label for="Username">Username</label>
					<input id="Username" class="form-control" type="text" required pattern="[a-zA-Z0-9]{5,15}" placeholder="Username">
					<small id="helpUsername" class="form-text text-muted">The username format is a-z or A-Z and long between 5 - 15 characters</small>
				</div>
				<div class="form-group">
					<label for="Password">Password</label>
					<input id="Password" class="form-control" type="password" required pattern="[a-zA-Z0-9]{5,15}" placeholder="Password">
					<small id="helpPassword" class="form-text text-muted">The password format is a-z or A-Z and long between 5 - 15 characters</small>
				</div>
				<div class="form-group pull-right">
					<button id="btn-login" type="submit" class="btn btn-primary"> <i class="fa fa-sign-in"></i> Login</button>
					<button type="reset" class="btn btn-secondary"> <i class="fa fa-refresh"></i> Reset</button>
				</div>
			</form>
		</div>
		<div class="card-footer text-muted text-center">
			<b>POWERED BY <i class="fa fa-heart"></i> DWA'E PANEL <i class="fa fa-linux"></i></b>
		</div>
	</div>
</div>
