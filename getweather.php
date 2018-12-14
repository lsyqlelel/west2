<?php
    date_default_timezone_set("PRC");
    header("content-type:text/html; charset=utf-8");
    $url = "http://www.weather.com.cn/weather1d/101230101.shtml";

    file_put_contents("weather.txt",$url);

    $page_content = file_get_contents($url);



    echo "今天福州的天气预报（".date('Y-m-j')."发布）";
    $line = '#type="hidden" id="hidden_title" value="(?<weather>.+?)"#';

    preg_match_all($line, $page_content, $res);
    $temp = $res[0];
    echo "<br/>";
    print_r($temp);
?>