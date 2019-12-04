$(document).ready(function(){
	$("#admin-login").submit(function(){
		var username = $("#Username").val();
		var password = $("#Password").val();
		function dologin(){
			$.ajax({
				url: 'loginmanager',
				data: 'username='+username+'&password='+password,
				type: 'POST',
				success: function(say){
					if(say=="no"){
						$("#login-notif").html('<div class="alert alert-danger alert-dismissible"><button type="button" data-dismiss="alert" class="close">&times;</button><b>Login failed, try again !</b></div>');
						$("#btn-login").html('<i class="fa fa-sign-in"></i> Login</button>');
					}else{
						alert('Loged');
					}
				},
			});
		}
		$("#btn-login").html('<i class="fa fa-gear fa-spin"></i> Please Wait</button>');
		setTimeout(dologin, 4000);
		return false;
	});
});
