Use tunnel.php to make Wordpress work through Browserling tunnels.

1. Edit tunnel.php and set the tunnel port and Wordpress path.
2. Open wp-config.php and require_once('tunnel.php') at the bottom of the file.
3. Open active theme's functions.php file and require_once('../../tunnel.php') at the top of the file.

