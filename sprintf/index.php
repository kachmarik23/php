<?php
require 'function/function.php';
$content = getMainContent();
$layou = getLayout();
echo sprintf($layou,$content);


