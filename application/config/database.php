<?php
defined('BASEPATH') or exit('No direct script access allowed');

$active_group = 'local';
$query_builder = TRUE;

$db['local'] = array(
    'dsn'    => '',
    'hostname' => 'localhost',
    'username' => 'root',
    // 'port' => '3309',
    'password' => '',
    'database' => 'pkm_sliat',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'development'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
