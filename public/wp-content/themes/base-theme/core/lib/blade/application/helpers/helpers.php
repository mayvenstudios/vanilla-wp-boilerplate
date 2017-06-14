<?php

function view($view, $data = array()){
	return Laravel\View::make($view, $data);
}

function queryToArray($args = array()){
	$query = new WP_Query($args);
	return $query->get_posts();
}


function blade_set_storage_path($path){
	$GLOBALS[ 'blade_storage_path' ] = $path;
}