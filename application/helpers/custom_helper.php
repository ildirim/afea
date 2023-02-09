<?php

function isLogin()
{
    $CI =& get_instance();
	$auth = $CI->session->userdata('auth');

	if(isset($auth) && $auth)
		return;

	redirect('auth');
}

function isPost()
{
	return $_SERVER['REQUEST_METHOD'] == "POST";
}

function isGet()
{
	return $_SERVER['REQUEST_METHOD'] == "GET";
}

function postParam($name)
{
    $CI =& get_instance();
	return $CI->input->post($name);
}

function encrypt($password)
{
	return md5(md5($password.'20').md5($password.'20').'AFEA');
}