<?php
$reg = "/\d{2,4}/";
$str = "2017/8/12";

//单词匹配
preg_match($reg, $str, $out);

//全局匹配
preg_match_all($reg, $str, $out);

//连续4个字母左边必须出现3个数字
$str = "123milk";     //结果：array(1) { [0]=> string(4) "milk" }
$str = "789bred";     //结果：array(1) { [0]=> string(4) "bred" }
$str = "&&&word";     //结果：array(0) { }
$reg = "/(?<=\d{3})[a-z]{4}/";
preg_match($reg, $str, $out);


//连续4个字母左边不能出现数字
$reg = "/(?<!\d)[a-z]{4}/";
$str = "&&&word";     //结果：array(1) { [0]=> string(4) "word" }
$str = "789bred";     //结果：array(0) { }
$str = "123milk";     //结果：array(0) { }

preg_match($reg, $str, $out);
var_dump($out);

