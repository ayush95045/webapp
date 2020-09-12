<?php
if (isset($_POST['data'])) {

$data = $_POST['data'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:81/curl2.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
if ($result === FALSE) {
  echo "error-". curl_error($ch);
}
curl_close($ch);

print_r($result);} ?>
<form  action="" method="post">
  <input type="text" name="data" >
  <input type="submit" value="send">
</form>
