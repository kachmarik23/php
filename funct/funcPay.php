<?php
require 'function/funcPay.php';
if ($_GET['pay']==='ok'){
    pay();
   }
if (!function_exists(watchVideo)){
die('Вы не оплатили эту функцию');
}
watchVideo();