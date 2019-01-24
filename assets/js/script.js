(function($) {
$(document).ready(function() {


if($('.portfolio_list').length){

	$('.portfolio_list .one_portfolio_item').each(function() {
		var portfolio_item_number = $( this ).data('number');
		portfolio_item_number_in_nine = portfolio_item_number % 9;
		if(portfolio_item_number_in_nine == 0){
			portfolio_item_number_in_nine = 9;
		}
		$(this).addClass('number_' + portfolio_item_number_in_nine);
	});

}


$('.paсkages_list .one_paсkage_title').click(function(){
	
	$(this).parent().find('.one_paсkage_title').removeClass('active');
	$(this).addClass('active');

	var package_number = $(this).data('package_number');
	$(this).parents('.paсkages_box').children('.paсkages_content').children('.one_package_content').fadeOut(0);
	$(this).parents('.paсkages_box').children('.paсkages_content').find('.package_content_' + package_number).fadeIn(500);

})
	

$('.call_form').click(function(){
	$('#form_popup').find('.popup_bg').fadeIn(300);
	$('#form_popup').find('.popup').fadeIn(500);
});


$('.popup_bg').mousedown(function(e) {
	var clicked = $(e.target);
	if (clicked.is('.popup') || clicked.parents().is('.popup')) {
		if(clicked.is('.popup .close')){
			$('.popup_bg').hide();
		}
		return;
	} else {
		$('.popup_bg').hide();
	}   
});  


$(".ajax_send_form").on("submit", function(event) {
	event.preventDefault();

var formdata = [];
var formdata = $(this).serialize();
var ajaxurl = '/wp-admin/admin-ajax.php';

formdata += '&action=wpestate_ajax_send_form';

	$.ajax({
				url: ajaxurl,
		method: "POST",
				data: formdata,

				beforeSend: function() {
						load_ajax();
				},
				success: function() {
						clearForm();
						show_ok();
				},
				 error: function(jqXHR, exception) {
						var msg = '';
						if (jqXHR.status === 0) {
								msg = 'Not connect.\n Verify Network.';
								alert(msg);
						} else if (jqXHR.status == 404) {
								msg = 'Requested page not found. [404]';
								alert(msg);
						} else if (jqXHR.status == 500) {
								msg = 'Internal Server Error [500].';
								alert(msg);
						} else if (exception === 'parsererror') {
								msg = 'Requested JSON parse failed.';
								alert(msg);
						} else if (exception === 'timeout') {
								msg = 'Time out error.';
								alert(msg);
						} else if (exception === 'abort') {
								msg = 'Ajax request aborted.';
								alert(msg);
						} else {
								msg = 'Uncaught Error.\n' + jqXHR.responseText;
								alert(msg);
						}
				},
		});
});


function clearForm(container) {
		$(".ajax_send_form").find("input[type=text], input[type=file], input[type=email], textarea").each(function(){
				$(this).val("");
		});
}

function load_ajax(){
	$('#loading_popup').find('.popup_bg').fadeIn(100);
	$('#loading_popup').find('.popup').fadeIn(100);
}

function show_ok(){
	$('#form_popup').find('.popup_bg').fadeOut(100);
	$('#form_popup').find('.popup').fadeOut(100);

	$('#loading_popup').find('.popup_bg').fadeOut(100);

	$('#success_popup').find('.popup_bg').fadeIn(100);
	$('#success_popup').find('.popup').fadeIn(100);
}



}); //document.ready

})( jQuery );