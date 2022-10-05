<?php

/*
Not a Plugin Name: Not really a plugin
Random URI: http://127.0.0.1/plugins/not-really-a-plugin/
Random text: Not really a plugin.
Test author: Random author
RandomVersion: 1.2
Random URI: http://127.0.0.1
*/

function hello_dolly_get_lyric() {
}

function hello_dolly() {
  hello_dolly_get_lyric();
}

add_action( 'admin_notices', 'hello_dolly' );
