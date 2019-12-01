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
});
