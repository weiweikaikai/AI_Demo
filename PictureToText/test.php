<?php

require_once './api-php-sdk/AipOcr.php';

// 你的 APPID AK SK (这里是我的)
const APP_ID = '10941729';
const API_KEY = 'fomvHKA08fOuIQ4BcqoLvEhF';
const SECRET_KEY = 'GjZIExVOoVrin0flB7spEy0hw9c39VkG';

$client = new AipOcr(APP_ID, API_KEY, SECRET_KEY);


$image = file_get_contents('example.jpeg');

// 调用通用文字识别, 图片参数为本地图片
$result = $client->basicGeneral($image);

print_r ($result);
// 如果有可选参数
//$options = array();
//$options["language_type"] = "CHN_ENG";
//$options["detect_direction"] = "true";
//$options["detect_language"] = "true";
//$options["probability"] = "true";
//
//// 带参数调用通用文字识别, 图片参数为本地图片
//$client->basicGeneral($image, $options);
//$url = "https//www.x.com/sample.jpg";

// 调用通用文字识别, 图片参数为远程url图片
//$client->basicGeneralUrl($url);
