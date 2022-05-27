<?php 

class App
{
    protected static $datas=[];

    public static function bind($key, $values)
    {
        static::$datas[$key] = $values ;
    }

    public static function get($key)
    {
        return static::$datas[$key];
    }
}