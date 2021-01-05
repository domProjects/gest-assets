<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
*/
// Fill in the file of your project here when you develop locally.
$root = '';

// Possible hosts locally. You can add some if needed.
$host_local = ['localhost', '127.0.0.1', '::1'];

// WARNING: Do not modify the lines below
$url = (in_array($_SERVER['HTTP_HOST'], $host_local, TRUE)) ? $_SERVER['HTTP_HOST'].'/'.$root : '';

// URL to your CodeIgniter root. Typically this will be your base URL
$config['base_url'] = ( ! empty($_SERVER['HTTPS'])) ? 'https://'.$url.'/' : 'http://'.$url.'/';

/*
|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
|
|	0 = Disables logging, Error logging TURNED OFF
|	1 = Error Messages (including PHP errors)
|	2 = Debug Messages
|	3 = Informational Messages
|	4 = All Messages
|
*/
$config['log_threshold'] = [1, 3];

/*
|--------------------------------------------------------------------------
| Session Variables
|--------------------------------------------------------------------------
|
*/
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'gas_test';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = NULL;
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;

/*
|--------------------------------------------------------------------------
| Cross Site Request Forgery
|--------------------------------------------------------------------------
|
*/
$config['csrf_protection'] = TRUE;
$config['csrf_token_name'] = 'csrf_t_gas_test';
$config['csrf_cookie_name'] = 'csrf_c_gas_test';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = [];
