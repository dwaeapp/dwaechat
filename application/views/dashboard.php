	<link rel="stylesheet" href="<?=base_url()?>assets/css/after.css">
	<div class="container">
		<div class="row">
			<div class="mt-4 mb-2 col-md-9">
				<h1 style="font-size:20px; font-weight: bold;" class="pull-left text-primary"> DWAE CHAT ROOM</h1>
			</div>
			<div class="mb-4 mt-4 col-md-3">  
				<a href="#" class="btn btn-sm btn-block btn-danger" style="width: 150px;" type="button" data-toggle="modal" data-target="#logout"> <i class="fa fa-power-off"></i> Logout</a>  
			</div>
		</div>
		<div class="row">
			<!-- View Chat Box -->
			<div class="mb-2 col-md-9">
				<div id="boxpesan">
				</div>	
			</div> 
			<!-- View User Online -->
			<div class="col-md-3">
				<div class="boxonline">
				</div>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-md-9">
				<form id="form-pesan">
					<div class="form-group">
						<input class="form-control" id="pesan" type="text" placeholder="Type your message, Enter for send ...." required x-moz-errormessage="Please type your message !">
					</div>
					<input type="submit" value="Send" class="btn btn-info pull-right">
				</form>
			</div>
			<div class="col-md-3">
				<a href="#" style="width: 150px;" class="btn btn-md btn-info" data-toggle="popover" type="button" id="emot" data-placement="top" title="Emoticons (click)"><i class="fa fa-eye"></i> Emoticons</a>
			</div>
		</div>
		<!-- Logout Modal -->
		<div class="modal hide fade" id="logout" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title text-info">Logout</h3>
					 	<button class="close" type="button" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<b>Do you want to log out ?</b>
						<br/>
					</div>
					<div class="modal-footer">
						<button OnClick="document.location.href='login/logout';" class="btn btn-info"> Logout </button>
						<button data-dismiss="modal" class="btn btn-secondary"> Cancel </button>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /container -->
