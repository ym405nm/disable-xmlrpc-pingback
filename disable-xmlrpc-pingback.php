<?php
/*
Plugin Name: Disable XMLRPC Pingback
Plugin URI: http://blog.ym405nm.info
Description: Disable XMLRPC Pingback
Author: yoshinori matsumoto
Version: 1.0
Author URI: http://blog.ym405nm.info
*/

/*
http://blog.sucuri.net/2014/03/more-than-162000-wordpress-sites-used-for-distributed-denial-of-service-attack.html
*/

add_filter( "xmlrpc_methods", function( $methods ) {
unset( $methods['pingback.ping'] );
return $methods;
} );
