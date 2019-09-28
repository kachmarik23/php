<?php
class Iphon
{
    /*
public static $os ='iOS';
public static $name='Iphone';
    лучше это сделать константами
    */
    const OS = 'IOS';
    const NAME = 'IPhone';
}
/*
echo 'система у Айфона '.Iphon::$os;
*/
echo iphon::OS;
class Lang
{
    public static $lang = 'en';
}
class App
{
    public static function getWelcomePage()
    {

        return'Helo by lang - '.Lang::$lang;
    }
}
Lang::$lang = 'ru';
echo App::getWelcomePage();