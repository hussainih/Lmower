<?php
return array(
    'jwt' => array(
        'key'       => 'sdfsdfasdfsd',     // Key for signing the JWT's, I suggest generate it with base64_encode(openssl_random_pseudo_bytes(64))
        'algorithm' => 'HS512' // Algorithm used to sign the token, see https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40#section-3
        ),
    'database' => array(
        'user'     => 'lmower', // Database username
        'password' => 'lmowerpassword', // Database password
        'host'     => 'lmower.ck1dzexlod8f.us-west-2.rds.amazonaws.com:3306', // Database host
        'name'     => 'lmower', // Database schema name
    ),
    'serverName' => 'aws.amazon.com', //
);
