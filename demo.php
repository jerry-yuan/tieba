<?php
include("/path/to/WordPress/wp-load.php");
require_once $base.'/Tieba.class.php';

$tieba = new CTieba($BDUSS);
//提供单个贴吧签到，参数$kw为贴吧名
$tieba->sign($kw);
//提供所有自己喜欢的贴吧签到
$tieba->multisign();
