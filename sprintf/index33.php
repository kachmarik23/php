<?php
require 'function/function.php';
$content = getOtherContent();
$layou = getLayout();
echo sprintf($layou,$content);
