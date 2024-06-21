
// Custom Login logo
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url('https://tlt-cs.com/wp-content/uploads/2023/08/logo-2.webp');
					height: 120px;
				    width: 202px;
				    background-size: 202px 120px;
				    background-repeat: no-repeat;
        }
		body {
			background:#fff !important;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'TATSUMI SHOKAI (THAILAND) CO.,LTD';
}
add_filter( 'login_headertext', 'my_login_logo_url_title' );

add_action('admin_head', 'wp_admin_custom_css');

function wp_admin_custom_css() {
  echo '<style>
    .wsal_notice {
		display:none;
    } 
  </style>';
}
