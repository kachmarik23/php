<?php
class Registry
{
    private  static $data=[];
    public static function set($key,$value){
        self::$data[$key]=$value;
    }
    public static function get($key){
        return array_key_exists($key,self::$data)?self::$data[$key]:null;
    }
}
