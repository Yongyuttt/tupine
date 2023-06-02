<?php

class Encryption_library
{
    public static function encode($data = null)
    {
        if(empty($data)) return null;

        $codeigniter_instance =& get_instance();
        $key = $codeigniter_instance->config->item('JWT_KEY');
        $algo = $codeigniter_instance->config->item('JWT_ALGO');

        return JWT::encode($data, $key, $algo);
    }

    public static function decode($data = null, $verify = true)
    {
        if(empty($data)) return null;

        $codeigniter_instance =& get_instance();
        $key = $codeigniter_instance->config->item('JWT_KEY');
        
        return JWT::decode($data, $key, $verify);
    }

    public static function sign($msg = null)
    {
        if(empty($msg)) return null;

        $codeigniter_instance =& get_instance();
        $key = $codeigniter_instance->config->item('JWT_KEY');
        $algo = $codeigniter_instance->config->item('JWT_ALGO');

        return JWT::sign($msg, $key, $algo);
    }

    public static function encryptPassword($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }
    
    public static function verifyPassword($password, $hash)
    {
        return password_verify($password, $hash);
    }

    public static function encryptString($string, $secret_key = null)
    {
        $codeigniter_instance =& get_instance();
        $encrypt_method = $codeigniter_instance->config->item('ENCRYPTION_ALGO');
        
        if($secret_key == null)
        {
            $secret_key = $codeigniter_instance->config->item('ENCRYPTION_KEY');
        }

        $secret_key = hash('sha256', $secret_key);
        $secret_iv = substr(hash('sha256', $codeigniter_instance->config->item('ENCRYPTION_IV')), 0, 16);
        $output = openssl_encrypt($string, $encrypt_method, $secret_key, 0, $secret_iv);

        return $output;
    }

    public static function decryptString($string, $secret_key = null)
    {
        $codeigniter_instance =& get_instance();
        $encrypt_method = $codeigniter_instance->config->item('ENCRYPTION_ALGO');
        
        $string = str_replace(" ", "+", $string);

        if($secret_key == null)
        {
            $secret_key = $codeigniter_instance->config->item('ENCRYPTION_KEY');
        }

        $secret_key = hash('sha256', $secret_key);
        $secret_iv = substr(hash('sha256', $codeigniter_instance->config->item('ENCRYPTION_IV')), 0, 16);

        if(base64_encode(base64_decode($string)) === $string) {
            $output = openssl_decrypt($string, $encrypt_method, $secret_key, 0, $secret_iv);
        } else {
            $output = null;
        }

        return $output;
    }

    public static function generateRandomString($length = 15)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$';
        $randomString = '';
        for($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
}
