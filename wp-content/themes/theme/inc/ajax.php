<?php
function sendform()
{  
    $message = implode(",", [$_POST["name"], $_POST["email"], $_POST["tel"], $_POST["comment"]]);
    $res = wp_mail(get_theme_mod('email'), "Зарегистрирована заявка на услуги", $message);
	echo json_encode($res);
    wp_die();
}
add_action('wp_ajax_sendform', 'sendform');
add_action('wp_ajax_nopriv_sendform', 'sendform');
