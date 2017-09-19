<?php
 if(isset($_GET["id"]))
 {
	$id= htmlspecialchars($_GET["id"]); 
 }
 else
 {
	 $id=0 ;
 }
 if(isset($_GET["keyword"]))
 {
	$keywords= urlencode($_GET["keyword"]); 
 }
 else
 {
	 $keywords="" ;
 }
   if(isset($_GET["pls"]))
 {
	$pls= htmlspecialchars($_GET["pls"]); 
 }
 else
 {
	 $pls="no_placement" ;
 }
    if(isset($_GET["crt"]))
 {
	$crt= htmlspecialchars($_GET["crt"]); 
 }
 else
 {
	 $crt="no_creative" ;
 }
   if(isset($_GET["dvc"]))
 {
	$dvc= htmlspecialchars($_GET["dvc"]); 
 }
 else
 {
	 $dvc="no_device" ;
	 
 }
   if(isset($_GET["kws"]))
 {
	$kws= urlencode($_GET["kws"]); 
 }
 else
 {
	 $kws="no_keywords" ;
 }
  if(isset($_GET["cmp"]))
 {
	$cmp= htmlspecialchars($_GET["cmp"]); 
 }
 else
 {
	 $cmp=0 ;
 }
     if(isset($_GET["p"]))
 {
	$phone= htmlspecialchars($_GET["p"]); 
 }
 if(isset($_GET["inf"]))
 {
	$inf= urlencode($_GET["inf"]); 
 }
 else
 {
	 $inf="no_more_info" ;
 }
 if(isset($_GET["tid"]))
 {
	$tid= htmlspecialchars($_GET["tid"]); 
 }
 else
 {
	 $tid=0 ;
	 
 }
 if(isset($_GET["subCampaign"]))
 {
	$subCampaign= htmlspecialchars($_GET["subCampaign"]); 
 }
 else
 {
	 $subCampaign=0 ;
 }
 
 if(isset($_GET["utm_campaign"]))
 {
	$utm_campaign=htmlspecialchars($_GET["utm_campaign"]);
 }
 else
 {
	 $utm_campaign=0 ;
 }
 if(isset($_GET["placement"])&& $_GET["placement"]!="")
 {
	$placement=htmlspecialchars($_GET["placement"]);
 }
 else
 {
	 $placement="no placement" ;
 }
  if(isset($_GET["afp"]))
 {
	$afp=htmlspecialchars($_GET["afp"]);
 }
 else
 {
	 $afp=0 ;
 }
 
 if(isset($_GET["utm_subcampaign"]))
 {
	$utm_subcampaign=htmlspecialchars($_GET["utm_subcampaign"]); 
 }
 else
 {
	 $utm_subcampaign=0 ;
 }
 if(isset($_GET["utm_creative"]))
 {
	$utm_creative=htmlspecialchars($_GET["utm_creative"]); 
 }
 else
 {
	 $utm_creative=0 ;
 }

 if(isset($_SERVER['HTTP_REFERER'])){
 $referer= $_SERVER['HTTP_REFERER'];
}
else{
	$referer="/";
}

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";



 

?>