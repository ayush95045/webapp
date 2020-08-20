<?php
/*link that we will get from the use*/
$link = $_POST['url'];
/*adding the html file to it*/
$rellink = $link."/loadverht005918.html";
/*$data = file_get_contents("javascript.html");
echo $data;*/
/*getting all data from the use url*/
$data = file_get_contents($rellink);
/*matching all possible pattern*/
/*echo $data;
var_dump($data);
preg_match_all("/<h1>(.*)<\/h1>/",$data,$tell2);
var_dump($tell2[1][0]);
preg_match_all("/<title>(.*)<\/title>/",$data,$tell);
var_dump($tell2[1][0]);
preg_match_all("/<h2>(.*)<\/h2>/",$data,$tell3);
var_dump($tell3[1][0]);*/
preg_match_all("/<title>(.*)<\/title>/",$data,$tell);
preg_match_all("/<h1>(.*)<\/h1>/",$data,$tell2);
preg_match_all("/<h2>(.*)<\/h2>/",$data,$tell3);
/*running verification process*/
if ($tell[1][0]=="loadverht005918.html"&& $tell2[1][0] == "veri908790fy76" && $tell3[1][0] == "codever67ghtyzx6677tu") {
  require 'valfile.php';
}else {
  require 'invalfile.php';
}

/*echo $thi;
preg_match_all("/<title>(.*)<\/title>/",$data,$tell);

print_r($tell[1][0]);
$tell2 = $tell[1][0];
echo $tell2;*/
 ?>
