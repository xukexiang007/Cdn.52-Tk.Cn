<?php
$result = file_get_contents("https://api.qqsuu.cn/api/bing");
header('Content-type: image/png');
print_r($result);
if ($arr['code']==1) {
}
?>