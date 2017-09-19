<?php
require_once '../../../IP2Location.php';
// ip2location
$loc = new IP2Location('../../../IP-COUNTRY.BIN', IP2Location::FILE_IO);
$ip=getRealIpAddr();
$country_code = $loc->lookup($ip, IP2Location::COUNTRY_CODE) ;
$country_name = urlencode($loc->lookup($ip, IP2Location::COUNTRY_NAME)) ;



function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}



?>