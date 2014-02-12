<?php
 
// port that was returned by browserling tunnel
$browserlingTunnelPort = 59374;

// path to your wordpress installation
// use "/" if there is no special path
$browserlingWordpressPath = "/wp/";

// that's it

$browserlingTunnelUrl = "http://tunnel.browserling.com:${browserlingTunnelPortl}${browserlingWordpressPath}";
 
define('WP_SITEURL', $browserlingTunnelUrl);
define('WP_HOME', $browserlingTunnelUrl);
  
update_option('siteurl', $browserlingTunnelUrl);
update_option('home', $browserlingTunnelUrl);

?>
