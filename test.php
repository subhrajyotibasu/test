<?php
$reg_email ='abc@yahoo.com';

//$domain = substr(strrchr($reg_email, "@"),0);

$domianarr = explode("@",$reg_email);
print_r($domianarr);

echo $domianname = $domianarr[0];
$organization = $domianname.'_org';
?>