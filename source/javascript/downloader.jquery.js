	$(document).ready(function() {
			loadData();
			$('form').on('submit',function(e){
			e.preventDefault();
			InputText();
		})
		});
	function loadData(){
		$.post('../config/get_data_index.php',function(data){
		$('.c-board').html(data);
	});
	}
	function InputText(){
			let username = $("#user_name").val();
			let text = $("#txt").val();

			$.ajax({
				url: '../config/send.php',
				type: 'POST',
				data:"username="+username+"&txt="+text,
			})
			.done(function(data) {
				$("#txt").val("");
				loadData();
			});	
		}