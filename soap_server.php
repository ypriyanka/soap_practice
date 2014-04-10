<?php
require_once "/var/www/html/nusoap/lib/nusoap.php";
 

 $ns="/var/www/html/soap_client.php";
$server=new soap_server();
$server->configurewsdl('getprod',$ns);
$server->wsdl->schemaTargetNamespace=$ns;
$server->register('getProd',array('x1'=>'xsd:int'),array('return'=>'xsd:srting'),$ns);
 
 
 function getProd($id) {
	
    if (is_numeric($id))
	{
    print_r($id);
    return " numeric sucess";
    }
    else {
            return "failed";
    }
}
 
$server->service($HTTP_RAW_POST_DATA);
/* with out using the wsdl
 *    
 *  $server = new soap_server();
$server->register("getProd");

$server->service($HTTP_RAW_POST_DATA);
 * */
?>
