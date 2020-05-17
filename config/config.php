<?php

return [
    'default' => [
        'uniqidKey'    => 'uid',
        'signerKey'    => '',
        'notBefore'    => 0,
        'expiresAt'    => 3600,
        'refreshTTL'   => 7200,
        'signer'       => 'Lcobucci\JWT\Signer\Hmac\Sha256',
        'type'         => 'Header',
        'refresh'      => 50001,
        'relogin'      => 50002,
        'iss'          => '',
        'aud'          => '',
        'automaticRenewal' => false,
    ],
    'user' => [
        'inject' => false,
        'model'  => '',
    ],
    'blacklist' => [
        'cacheName' => 'blacklist',
    ],
];
