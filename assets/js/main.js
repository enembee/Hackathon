$(document).ready(function(){

});

$(function(){

	$('#regFormSubmit').click(function(){

		if ( $('#regFormPass1') != $('#regFormPass2') ||
			 $('#regFormEmail1') != $('#regFormEmail2')) {
			alert('stop, hammertime.');
			return false
		} else {
			$('#regForm').submit();
		}

	});

});