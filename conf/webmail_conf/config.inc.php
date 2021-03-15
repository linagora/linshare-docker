<?php

$config = array();

$config['db_dsnw'] = 'sqlite:////var/www/db/sqlite.db';

$config['imap_conn_options'] =
$config['managesieve_conn_options'] = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false,
    ],
];


$config['plugins'] = array('carddav', 'managesieve');
if(getenv('ROUNDCUBE_USER_FILE')) $config['plugins'][] = 'password';
