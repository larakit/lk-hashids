<?php
/**
 * Created by Larakit.
 * Link: http://github.com/larakit
 * User: Alexey Berdnikov
 * Date: 27.07.16
 * Time: 11:04
 */
if(!function_exists('hashids')) {
    /**
     * @return \Hashids\Hashids
     */
    function hashids() {
        $salt            = env('hashids:salt', '');
        $min_hash_length = env('hashids:min_hash_length', 0);
        $alphabet        = env('hashids:alphabet', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');

        return new \Hashids\Hashids($salt, $min_hash_length, $alphabet);
    }
}

if(!function_exists('hashids_encode')) {
    function hashids_encode() {
        return hashids()->encode(func_get_args());
    }
}
if(!function_exists('hashids_decode')) {
    function hashids_decode($hash) {
        return hashids()->decode($hash);
    }
}
