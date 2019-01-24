<?php
add_action('wp_ajax_nopriv_wpestate_ajax_send_form', 'wpestate_ajax_send_form');
add_action('wp_ajax_wpestate_ajax_send_form', 'wpestate_ajax_send_form');

if (!function_exists('wpestate_ajax_send_form')) {
	function wpestate_ajax_send_form() {


		$your_name = $_POST['your_name'];
		$your_email = $_POST['your_email'];
		$your_message = $_POST['your_message'];
		$current_page_link = $_POST['current_page_link'];

		$admin_email = get_bloginfo('admin_email');

if($your_email){

		$headers_admin = 'From: ' . $your_email;
}
		$to_admin = $admin_email;
		$subject_admin = 'Сообщение с сайта';
		$message_admin = '
	Новое сообщение с сайта';
		$message_admin.='
	Имя: ' . $your_name.'
	Емейл: ' . $your_email;
		$message_admin.='
	Сообщение: ' . $your_message;
		$message_admin.='
	Сообщение по страницы: ' . $current_page_link;

		mail($to_admin, $subject_admin, $message_admin, $headers_admin);

	}
}

?>