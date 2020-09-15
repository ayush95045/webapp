<?php 
require('UserInfo.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>user data</title>
<meta charset="utf-8" />
<style type="text/css">
* {
  font-family: sans-serif; /* Change your font family */
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

p { text-align: center;
    background-color: grey;}
.new { background-color: thistle;
       margin: 0px;
       padding: 2px;}
.red { color: red;}
.green { color: green;}
</style>
</head>
<body>
<table class="content-table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>your data</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Ip address</td>
      <td><?= UserInfo::get_ip();?></td>
      
    </tr>
    <tr class="active-row">
      <td>2</td>
      <td>Os_platform</td>
      <td><?= UserInfo::get_os();?></td>
     
    </tr>
    <tr>
      <td>3</td>
      <td>Browser</td>
      <td><?= UserInfo::get_browser();></td>
      
    </tr>
    <tr>
    <td>4</td>
    <td>Device</td>
    <td><?= UserInfo::get_device()?></td>
    
    </tr>
  </tbody>
</table>
<div class="new">
<div class="red">You provide all these data to the site when you visit it</div>
<div class="green">Don't visit any random website</div>
<div class="green">Or use Vpn for for safety</div>
</div>
<p>copyright &copy; reserved ayush</p>
</body>
</html>
