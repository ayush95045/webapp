<?php
$link = $_POST['url'];
$rellink = $link."/downverify.html";
/*$data = file_get_contents("javascript.html");
echo $data;*/
/*$link = "https://ayush95045.github.io/webapp";*/
/*echo $rellink;*/
$data = file_get_contents($rellink);
preg_match_all("/<title>(.*)<\/title>/",$data,$tell);
preg_match_all("/<h1>(.*)<\/h1>/",$data,$tell2);
preg_match_all("/<h2>(.*)<\/h2>/",$data,$tell3);
if ($tell[1][0]=="verify"&& $tell2[1][0] == "verifycodedata654763" && $tell3[1][0] == "codealphaverify") {
  echo "this site belongs to you";
}else {
  echo "may be u entered wrong details or this site does not belongs to you";
}

/*echo $data;
var_dump($data);
preg_match_all("/<h1>(.*)<\/h1>/",$data,$tell2);
var_dump($tell2[1][0]);
preg_match_all("/<title>(.*)<\/title>/",$data,$tell);
var_dump($tell2[1][0]);
preg_match_all("/<h2>(.*)<\/h2>/",$data,$tell3);
var_dump($tell3[1][0]);*/

/*echo $thi;
preg_match_all("/<title>(.*)<\/title>/",$data,$tell);

print_r($tell[1][0]);
$tell2 = $tell[1][0];
echo $tell2;*/
 ?>
