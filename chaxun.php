<?php
sleep(3);
$com = $_POST['com'];
$num = $_POST['num'];
$key= "87568a88923bfa3117195df06c0e69fd";

$url="http://v.juhe.cn/exp/index?key=$key&com=$com&no=$num";

echo file_get_contents($url);