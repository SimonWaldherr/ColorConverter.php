<?php

include_once('./colorconverter.php');

echo "\n#331faa in rgb: \n";
var_dump(colorconv('#331faa', 'hex2rgb'));
echo "\nrgb(23,55,190) in rgb: \n";
var_dump(colorconv('rgb(23,55,190)'));
echo "\narray(33,41,66) in hsl: \n";
var_dump(colorconv(array(33,41,66), 'RGB2HSL'));
echo "\narray(1,40,22) in rgb: \n";
var_dump(colorconv(array(1,40,22), 'hsl2rgb'));
echo "\n#33ffaa in rgb: \n";
var_dump(colorconv('#33ffaa'));
echo "\n#33faaa in hex: \n";
var_dump(colorconv(colorconv(colorconv('#33faaa'), 'rgb2hsl'), 'hsl2hex'));
echo "\nyuv(32,55,13) in rgb: \n";
var_dump(colorconv('yuv(32,55,13)'));

?>
