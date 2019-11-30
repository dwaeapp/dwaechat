	<link rel="stylesheet" href="<?=base_url()?>assets/css/after.css">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 style="font-size:20px;" class="pull-left text-primary"> DWAE CHAT ROOM</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<a href="#" class="btn btn-danger" type="button" data-toggle="modal" data-target="#logout"><i class="fa fa-power"></i> Logout</a>
			</div>
			<!-- View User Online -->
			<div class="col-md-3">
				<div class="boxonline">
				</div>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-md-12">
				<form class="form-inline">
					<input class="input-xlarge" name="message" type="text" placeholder="Type your message ...." required x-moz-errormessage="Please type your message !">
					<input class="btn btn-info pull-right" id="send" type="submit" value="Send">
				</form>
				<audio controls id="sendnotif">
					<source src="<?=base_url()?>assets/core/send.mp3">
					Your browser does not support the audio element.
				</audio>
			</div>
			<div class="col-md-6">
				<a href="#" class="btn btn-info" data-toggle="popover" type="button" id="emot" data-placement="top" title="Emoticons (click)"><i class="fa fa-eye"></i> Emoticons</a>
			</div>
		</div>
	</div> <!-- /container -->
