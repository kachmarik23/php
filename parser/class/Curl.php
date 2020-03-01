<?php


class Curl
{
    public function index()
    {
        $data = [];
        $html = file_get_contents('http://rst.ua/oldcars/audi/80/');// парсим сайт
        header('Content-Type: text/html; charset=utf-8');
        // выбрать по шаблону из $html, выбранное сохранить в $matches
        preg_match_all('@class="rst-ocb-i rst-ocb-i-premium rst-uix-radius(.*?)<span class="rst-ocb-i-s-s">@s', $html, $matches);

        //оно выберет два массива один полный, другой точное вхождение (.*?) по этому $matches[1], @s - singl, одна линия
        // print_r($matches[1]);
        foreach ($matches[1] as $match) {
            //preg_match в $matches[1] по шаблону выберем картинки, год, цену
            preg_match('@src="(.*?)"><h3 class="rst-ocb-i-h">@s', $match, $image);
            $image = $image[1];
            preg_match('@<span class="rst-uix-grey">(.*?)</span></li><li class="rst-ocb-i-d-l-j">@', $match, $price);
            $price = $price[1];
            preg_match('@<span class="rst-ocb-i-d-l-i-s">(?=.*\d)[0-9]{4}</span>@', $match, $yar);
            $yar = strip_tags($yar[0]);
            $data[] = [
                'image' => $image,
                'yar' => $yar,
                'price' => $price
            ];
        }
        $html = '';
        foreach ($data as $coche) {
            $html.='<div>';
            $html.='<img src="'.$coche['image'].'">';
            $html.='<p>Год: '.$coche['yar'].'<br>';
            $html.='Цена: '.$coche['price'].'</p>';
            $html.='</div>';


        }
        die($html);
    }

}