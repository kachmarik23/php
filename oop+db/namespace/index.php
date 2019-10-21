<?php
require_once 'classes/Fb/Authorize.php';
require_once 'classes/Google/Authorize.php';

use \classes\Fb\Authorize as FbAuth;
use \classes\Google\Authorize as GoogeAuth;

$a =new FbAuth();
$a =new GoogeAuth();

