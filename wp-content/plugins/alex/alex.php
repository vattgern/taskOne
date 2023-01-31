<?php
/*
Plugin Name: Alex
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: Done by Alex
Author: Alexander
Version: 1.7.2
*/
function formAdd(){
    var_dump($_POST);
}

add_action('admin_post_form_hook', 'formAdd');