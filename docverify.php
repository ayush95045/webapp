<?php 
$test = "/downverify.html";
$string = file_get_contents($_POST['url'].$test);
preg_match_all("/<title>(.*)<\/title>/i",$string,$title);
preg_match_all("/<h1>(.*)<\/h1>/i",$string,$h1);
preg_match_all("/<h2>(.*)<\/h2>/i",$string,$h2);
echo "$title";
     "$h1";
     "$h2";
     
 ?>
