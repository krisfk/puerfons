<?php
defined( 'ABSPATH' ) || exit;

$rocket_cookie_hash = 'b4cd09eebb09eb69e779d61218dead17';
$rocket_logged_in_cookie = 'wordpress_logged_in_b4cd09eebb09eb69e779d61218dead17';
$rocket_cache_mobile_files_tablet = 'desktop';
$rocket_cache_mobile = 1;
$rocket_do_caching_mobile_files = 1;
$rocket_cache_reject_uri = '/cart|/checkout|/(.+/)?feed/?|/(?:.+/)?embed/|/%e7%b5%90%e5%b8%b3/(.*)|/checkout/(.*)|/%e8%b3%bc%e7%89%a9%e8%bb%8a/|/cart/|/%e6%88%91%e7%9a%84%e5%b8%b3%e6%88%b6/(.*)|/my-account/(.*)|/wc-api/v(.*)|/(index\.php/)?wp\-json(/.*|$)';
$rocket_cache_reject_cookies = 'wordpress_logged_in_.+|wp-postpass_|wptouch_switch_toggle|comment_author_|comment_author_email_';
$rocket_cache_reject_ua = 'facebookexternalhit';
$rocket_cache_query_strings = array(
  0 => 'amp',
);
$rocket_secret_cache_key = '5ed67f6a03c2a075474564';
$rocket_cache_ssl = 1;
$rocket_cache_ignored_parameters = array(
  'utm_source' => 1,
  'utm_medium' => 1,
  'utm_campaign' => 1,
  'utm_expid' => 1,
  'utm_term' => 1,
  'utm_content' => 1,
  'fb_action_ids' => 1,
  'fb_action_types' => 1,
  'fb_source' => 1,
  'fbclid' => 1,
  'gclid' => 1,
  'age-verified' => 1,
  'ao_noptimize' => 1,
  'usqp' => 1,
  'cn-reloaded' => 1,
  '_ga' => 1,
);
$rocket_cache_mandatory_cookies = '';
$rocket_cache_dynamic_cookies = array();
