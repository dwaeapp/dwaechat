$(document).ready(function(){ 
	//Ajax Login
	$("#form-login").submit(function(){
		var username=$.trim($("#Username").val());
		var password=$.trim($("#Password").val());
		if($("#Remember").is(':checked')){
			var remember=$("#Remember").val();
		}
		$.ajax({
			url : 'login',
			data : 'user='+username+'&pass='+password+'&remember='+remember,
			type : 'POST',
			success : function(result){
				if(result=="ok"){
					document.location.href="dashboard";
				}else{
					$("#notif").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Username atau Password Salah ! </div>');
					return false;
				}
			},
		});
		return false;
	});

	//Ajax Register
	$("#form-register").submit(function(){
		var Ruser = $.trim($("#Ruser").val());
		var Rpass = $.trim($("#Rpass").val());
		var Rnick = $.trim($("#Rnick").val());
		var Rmail = $.trim($("#Rmail").val());
		$.ajax({
			url: 'register',
			data: 'Ruser='+Ruser+'&Rpass='+Rpass+'&Rnick='+Rnick+'&Rmail='+Rmail,
			type: 'POST',
			success: function(alex){
				if(alex=="ada"){
					$("#reg-notif").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button> Anda Telah Terdaftar ! </div>');
					return false;
				}else if(alex=="yes"){
					$("#reg-notif").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Pendaftaran Berhasil, Please Wait ! <img src="assets/core/alihkan.gif"></div>');
					function redirect(){
						document.location.href="dashboard";
					}
					setTimeout(redirect, 6000);
				}else{
					$("#reg-notif").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button> Gagal Mendaftar ! </div>');
					return false;
				}
			},
		});
		return false;
	});

	//Send Message
	$("#form-pesan").submit(function(){
		var msg = $("#pesan").val();

		$.ajax({
			url: 'send',
			data: 'messages='+msg,
			type: 'POST',
			success: function(nisa){
				if(nisa=="terkirim"){
					$("#pesan").val("");
				}else{
					return false;
				}
			},
		});
		return false;
	});

	//Load Messages
	function loadmessages(){
		$("#boxpesan").load("messages");
		var msg = $("#boxpesan");
		msg.scrollTop = msg.scrollHeight;
	}

	setInterval(loadmessages,1000);

	//Load User Online
	function loadonline(){
		$(".boxonline").load("online");
	}

	setInterval(loadonline,1000);
});
