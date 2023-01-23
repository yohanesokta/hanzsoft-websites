	$(document).ready(function(){
		loadData();
		$('form').on('submit',function(e){
			e.preventDefault();
			InputText();
		})
		function InputText(){
			let username = $("#user_name").val();
			let text = $("#txt").val();

			$.ajax({
				url: '../config/g_send.php',
				type: 'POST',
				data:"username="+username+"&txt="+text+"&nsi="+nsi,
			})
			.done(function(data) {
				$("#txt").val("");
				loadData();
			});
			
		}
	});

		function loadData(){
	$.post('../config/get_data_get.php?nsi='+nsi,function(data){
		$('.c-board').html(data);
	});
}