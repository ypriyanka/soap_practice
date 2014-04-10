<?php
require_once "/var/www/html/nusoap/lib/nusoap.php";
 
$client = new nusoap_client("https://store-uzahrx.mybigcommerce.com/api/v2");

 $ns="https://store-uzahrx.mybigcommerce.com/api/v2";

$header = new SOAPHeader($ns, 'jyotsna', '97210ce4456e7f67df1dc75278813b04a1263c49');
echo "<pre>" . htmlspecialchars($client->request, ENT_QUOTES) . "</pre>";

?>