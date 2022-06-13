<?php
if( get_option('htpmpro_status') != 'active' ){
	return;
}

$htpmpro_request_uri = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
$htpmpro_is_admin = strpos( $htpmpro_request_uri, '/wp-admin/' );

/**
 * Deactivate plugins for non admin users
 */
if( !is_admin() && false === $htpmpro_is_admin ){

	// Deactivate plugins base on the condition meets
	add_filter( 'option_active_plugins', 'htpmpro_filter_plugins' );

}

function htpmpro_filter_plugins( $plugins ){
	global $htpmpro_request_uri;
	$htpmpro_options = get_option( 'htpm_options' );
	$htpmpro_options = $htpmpro_options['htpm_list_plugins'];

	// first plugin use, htpmpro_options has no data fix
	if( !$htpmpro_options ){
		return $plugins;
	}
	
	$condition_status = 'disable_on_selected';
	$device_name = 'all';
	$apply_rule = false;
	$remove_plugins = array();

	// main domain
	$main_domain = get_bloginfo('url');
	$main_domain = str_replace(array('http://','https://'), '', $main_domain);

	// current page url
	$current_page_url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$current_page_url = trim( $current_page_url, "/" );
	$current_page_slug = trim(str_replace($main_domain, '', $current_page_url), '/');

	// loop through each active plugin
	foreach($htpmpro_options as $plugin => $individual_options){
		if(isset($individual_options['enable_deactivation'])){
			$uri_type = $individual_options['uri_type'];
			$condition_status = $individual_options['condition_type'];
			$device_name = $individual_options['device_type'];

			if( $device_name === 'all' ){
				$apply_rule = true;
			}else{
				if( $device_name === htpmpro_detect_device() ){
					$apply_rule = true;
				}
			}
			if( $apply_rule == true ){

				if($uri_type == 'page'){
					$page_list = isset($individual_options['pages']) ? $individual_options['pages'] : array();
					foreach($page_list as $page_info){
						$page_info_arr = explode(',', $page_info);
						$page_id = $page_info_arr[0];
						$page_link = $page_info_arr[1];

						$page_link = str_replace(array('http://','https://'), '', $page_link);
						$page_link = trim( $page_link, '/' );
						$slug = '';
						$slug = get_post_field( 'post_name', $page_id );

						if( $condition_status == 'enable_on_selected' ){
							if( $slug && in_array($slug, explode('/', $current_page_url)) ||
							$page_link && $page_link == $current_page_url ){
								$plkey = array_search( $plugin, $remove_plugins );
								if( $plkey ){ unset( $remove_plugins[ $plkey ] ); }
								break;
							}else{
								if( !isset( $_REQUEST['elementor-preview'] ) ){
									$remove_plugins[$plugin] = $plugin;
								}
							}
						}
						elseif( $slug && in_array($slug, explode('/', $current_page_url)) || $page_link && $page_link == $current_page_url ){
							$remove_plugins[] = $plugin;
						}

					}
				}

				if($uri_type == 'post'){
					$post_list = isset($individual_options['posts']) ? $individual_options['posts'] : array();
					foreach($post_list as $post_info){
						$post_info_arr = explode(',', $post_info);
						$post_id = $post_info_arr[0];
						$post_link = $post_info_arr[1];

						$post_link = str_replace(array('http://','https://'), '', $post_link);
						$slug = '';
						$slug = get_post_field( 'post_name', $post_id );

						if( $condition_status == 'enable_on_selected' ){
							if( $slug && in_array($slug, explode('/', $current_page_url)) || $post_link && $post_link == $current_page_url ){
								$plkey = array_search( $plugin, $remove_plugins );
								if( $plkey ){ unset( $remove_plugins[ $plkey ] ); }
								break;
							}else{
								if( !isset( $_REQUEST['elementor-preview'] ) ){
									$remove_plugins[$plugin] = $plugin;
								}
							}
						}
						elseif( $slug && in_array($slug, explode('/', $current_page_url)) || $post_link && $post_link == $current_page_url ){
							$remove_plugins[] = $plugin;
						}
					}
				}

				if($uri_type == 'page_post'){
					$page_list = isset($individual_options['pages']) ? $individual_options['pages'] : array();
					$post_list = isset($individual_options['posts']) ? $individual_options['posts'] : array();
					$page_nd_post_list = array_merge($page_list, $post_list );

					foreach($page_nd_post_list as $post_info){
						$post_info_arr = explode(',', $post_info);
						$post_id = $post_info_arr[0];
						$post_link = $post_info_arr[1];

						$post_link = str_replace(array('http://','https://'), '', $post_link);
						$post_link = trim( $post_link, '/' );
						$slug = '';
						$slug = get_post_field( 'post_name', $post_id );

						if( $condition_status == 'enable_on_selected' ){
							if( $slug && in_array($slug, explode('/', $current_page_url)) || $post_link && $post_link == $current_page_url ){
								$plkey = array_search( $plugin, $remove_plugins );
								if( $plkey ){ unset( $remove_plugins[ $plkey ] ); }
								break;
							}else{
								if( !isset( $_REQUEST['elementor-preview'] ) ){
									$remove_plugins[$plugin] = $plugin;
								}
							}
						}
						elseif( $slug && in_array($slug, explode('/', $current_page_url)) || $post_link && $post_link == $current_page_url ){
							$remove_plugins[] = $plugin;
						}

					}
				}

				if( $uri_type == 'custom' ){
					$condition_list = array(
						'name' => array(),
						'value' => array()
					);
	            	$condition_list = $individual_options['condition_list'] ? $individual_options['condition_list'] : array(
						'name' => array(),
						'value' => array()
					);

					$individual_condition_list = array();
					for( $i = 0; $i < count($condition_list['name']); $i++ ){
						$individual_condition_list[] = $condition_list['name'][$i] . ',' . $condition_list['value'][$i];
					}

					foreach($individual_condition_list as $item){
						$item = explode(',', $item);
						$name = $item[0];
						$value = trim($item[1], '/');

						if($name == 'uri_equals'){
							if( $condition_status == 'enable_on_selected' ){
								if( $current_page_slug == $value ){
									$plkey = array_search( $plugin, $remove_plugins );
									if( $plkey ){ unset( $remove_plugins[ $plkey ] ); }
									break;
								}else{
									if( !isset( $_REQUEST['elementor-preview'] ) ){
										$remove_plugins[$plugin] = $plugin;
									}
								}
							}
							elseif( $current_page_slug == $value ){
								$remove_plugins[] = $plugin;
							}
						}

						if($name == 'uri_not_equals'){
							if( $condition_status == 'enable_on_selected' ){
								if( $value && $current_page_slug != $value ){
									$plkey = array_search( $plugin, $remove_plugins );
									if( $plkey ){ unset( $remove_plugins[ $plkey ] ); }
									break;
								}else{
									if( !isset( $_REQUEST['elementor-preview'] ) ){
										$remove_plugins[$plugin] = $plugin;
									}
								}
							}
							elseif($value && $current_page_slug != $value){
								$remove_plugins[] = $plugin;
							}
						}

						if($name == 'uri_contains'){
							if( $condition_status == 'enable_on_selected' ){
								if( $value && strpos( $current_page_url, $value ) ){
									$plkey = array_search( $plugin, $remove_plugins );
									if( $plkey ){ unset( $remove_plugins[ $plkey ] ); }
									break;
								}else{
									if( !isset( $_REQUEST['elementor-preview'] ) ){
										$remove_plugins[$plugin] = $plugin;
									}
								}
							}
							elseif($value && strpos( $current_page_url, $value )){
								$remove_plugins[] = $plugin;
							}
						}

						if($name == 'uri_not_contains'){
							if( $condition_status == 'enable_on_selected' ){
								if( $value && !strpos( $current_page_url, $value ) ){
									$plkey = array_search( $plugin, $remove_plugins );
									if( $plkey ){ unset( $remove_plugins[ $plkey ] ); }
									break;
								}else{
									if( !isset( $_REQUEST['elementor-preview'] ) ){
										$remove_plugins[$plugin] = $plugin;
									}
								}
							}
							elseif($value && !strpos( $current_page_url, $value )){
								$remove_plugins[] = $plugin;
							}
						}
					}
				}
			}

		}
	}

	$plugins = array_diff( $plugins, $remove_plugins );

	return $plugins;
}

/*
* Detect Device
*/
function htpmpro_detect_device(){
  	$deviceName="";
  	$userAgent = $_SERVER["HTTP_USER_AGENT"];
  	$devicesTypes = array(
	    "desktop" => array(
	    	"msie 10", 
	    	"msie 9", 
	    	"msie 8", 
	    	"windows.*firefox", 
	    	"windows.*chrome", 
	    	"x11.*chrome", 
	    	"x11.*firefox", 
	    	"macintosh.*chrome", 
	    	"macintosh.*firefox", 
	    	"opera"
	    ),
	    "tablet" => array(
	    	"tablet", 
	    	"android", 
	    	"ipad", 
	    	"tablet.*firefox"
	    ),
	    "mobile" => array(
	    	"mobile ", 
	    	"android.*mobile", 
	    	"iphone", 
	    	"ipod", 
	    	"opera mobi", 
	    	"opera mini",
	    	"blackberry"
	    ),
	    "bot" => array(
	    	"googlebot", 
	    	"mediapartners-google", 
	    	"adsbot-google", 
	    	"duckduckbot", 
	    	"msnbot", 
	    	"bingbot", 
	    	"ask", 
	    	"facebook", 
	    	"yahoo", 
	    	"addthis"
	    )
    );
  	foreach($devicesTypes as $deviceType => $devices) {
        foreach($devices as $device) {
            if( preg_match( "/" . $device . "/i", $userAgent ) ) {
                $deviceName = $deviceType;
            }
        }
    }
    return $deviceName;
 }