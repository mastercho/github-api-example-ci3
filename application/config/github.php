<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['client_id'] = '7ecad0c20b9afa097f22';
$config['client_secret'] = '51872c295457636a52e8be01358b46709819dd46';
$config['redirect_uri'] =  'http://localhost/ci/authorize/github';
//user,user:email,user:follow,public_repo,repo,repo:status,delete_repo,notifications,gist
$config['scope'] = 'user,user:email,notifications,repo,gist';


/* End of file github.php */
/* Location: ./application/config/github.php */