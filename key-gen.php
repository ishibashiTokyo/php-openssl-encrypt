<?php

$config = array(
    'digest_alg' => 'sha512',
    'private_key_bits' => 4096,
    'private_key_type' => OPENSSL_KEYTYPE_RSA,
);

// サーバーのキーペアを生成する
$server = openssl_pkey_new($config);
openssl_pkey_export($server, $_privKey);
$_pubKey = openssl_pkey_get_details($server);
$_pubKey = $_pubKey['key'];

file_put_contents('server.key', $_privKey);
file_put_contents('server.pub', $_pubKey);

// クライアントのキーペアを生成する
$client = openssl_pkey_new($config);
openssl_pkey_export($client, $_privKey);
$_pubKey = openssl_pkey_get_details($client);
$_pubKey = $_pubKey['key'];

file_put_contents('client.key', $_privKey);
file_put_contents('client.pub', $_pubKey);
