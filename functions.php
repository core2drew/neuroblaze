<?php

function neuroblaze_scripts() {
	wp_enqueue_script( 'jquery');
	wp_enqueue_script('neuroblaze-scripts', get_stylesheet_directory_uri().'/assets/js/main.js', false, filemtime( get_stylesheet_directory().'/assets/js/main.js' ), array( 'jquery' ), true);
    wp_localize_script('neuroblaze-scripts', 'ajaxObject', array('ajaxurl' => admin_url('admin-ajax.php')));
}

add_action( 'wp_enqueue_scripts', 'neuroblaze_scripts' );

function neuroblaze_sendmail(){
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$message = $_POST['message'];
	$to = 'andreacalupe.hanseopharma@gmail.com, alyssatan.hanseopharma@gmail.com';
	$subject = 'NeuroBlaze';
    $message = "
        From: $fullname <$email>
        FullName: $fullname
        Email: $email
        Phone Number: $mobile
        $message
        -- 
        This e-mail was sent from a contact form on NeuroBlaze (http://http://www.hanseopharma.com.ph)
	";
	$wp_mail = wp_mail( $to, $subject, $message );
    if($wp_mail) {
        $response = array('success' => true);
    }else{
        $response = array('success' => false);
    }
   	echo $wp_mail;
  	wp_die();
}

add_action('wp_ajax_nopriv_neuroblaze_sendmail', 'neuroblaze_sendmail');
add_action('wp_ajax_neuroblaze_sendmail', 'neuroblaze_sendmail');