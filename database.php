<?php

return [
    'type'            => 'mysql',
    'hostname'        => 'localhost',
    'database'        => 'shizhan',
    'username'        => 'root',
    'password'        => 'ld80cn',
    'hostport'        => '3306',
    'dsn'             => '',
    'params'          => [],
    'charset'         => 'utf8',
    'prefix'          => 'ld_',
    'debug'           => false,
    'deploy'          => 0,
    'rw_separate'     => false,
    'master_num'      => 1,
    'slave_no'        => '',
    'fields_strict'   => true,
    'resultset_type'  => 'array',
    'auto_timestamp'  => false,
    'datetime_format' => 'Y-m-d H:i:s',
    'sql_explain'     => false,
    'builder'         => '',
    'query'           => '\think\db\Query',
];
