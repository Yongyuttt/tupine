<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['ENCRYPTION_KEY']   = 'TUPINE_PROJECT!';
$config['ENCRYPTION_IV']    = 'SMARTclick2022!';
$config['ENCRYPTION_ALGO']  = 'AES-256-CBC';

$config['JWT_KEY']          = 'TUPINE_PROJECT!';
$config['JWT_ALGO']         = 'HS256';              // HS256, HS384, HS512

$config['TOKEN_EXPIRED']    = '+ 1 month';          // + 1 month, + 365 days
