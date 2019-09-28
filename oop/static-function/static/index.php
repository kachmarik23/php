<?php
/////
/// Позднее статическое связывание
////

class C
{
    public static function who()
    {
        echo __CLASS__;
    }
    public static function test()
    {
        static :: who();/* срабатывает позднее статическое связыванае, в отличии от self ::
        будет вычеслен текущий класс, а не класс в торомом она была определенна, как это будет
    при использовании self*/
    }
}
class D extends C
{
    public static function who()
    {
        echo __CLASS__;
    }
}
D::test();