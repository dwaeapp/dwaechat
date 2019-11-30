	<link rel="stylesheet" href="<?=base_url()?>assets/css/after.css">
	<div class="container">
		<div class="row">
			<div class="mt-4 mb-2 col-md-9">
				<h1 style="font-size:20px; font-weight: bold;" class="pull-left text-primary"> DWAE CHAT ROOM</h1>
			</div>
			<div class="mb-4 col-md-3">  
				<a href="#" class="btn btn-sm btn-block btn-danger" style="width: 150px;" type="button" data-toggle="modal" data-target="#logout"> <i class="fa fa-power-off"></i> Logout</a>  
			</div>
		</div>
		<div class="row">
			<!-- View Chat Box -->
			<div class="mb-2 col-md-9">
				<div class="boxonline">Preview Message Here
				</div>	
			</div> 
			<!-- View User Online -->
			<div class="col-md-3">
				<div class="boxonline">Preview User Online Here
				</div>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-md-9">
				<form class="form-inline">
					<input class="form-control" size="40" name="message" type="text" placeholder="Type your message ...." required x-moz-errormessage="Please type your message !">
					&nbsp;&nbsp;&nbsp;&nbsp;
					<button class="btn btn-info" type="submit"> Send </button>
				</form>
			</div>
			<div class="col-md-3">
				<a href="#" style="width: 150px;" class="btn btn-md btn-info" data-toggle="popover" type="button" id="emot" data-placement="top" title="Emoticons (click)"><i class="fa fa-eye"></i> Emoticons</a>
			</div>
		</div>
	</div> <!-- /container -->
