<?php
function getCatalogEntry($catalogId,$catalogId2) {
		
	echo "bye bye";
	 
if($catalogId=='catalog1')
 
return "<HTML>
<HEAD>
<TITLE>Catalog</TITLE>
</HEAD
<BODY>
<p> </p>
<table border>
<tr><th>CatalogId</th>
<th>Journal</th><th>Section
</th><th>Edition</th><th>
Title</th><th>Author</th>
</tr><tr><td>catalog1</td>
<td>IBM developerWorks</td><td>
XML</td><td>October 2005</td>
<td>JAXP validation</td>
<td>Brett McLaughlin</td></tr>
<tr><td>$catalogId2</td>
<td>IBM developerWorks</td><td>
XML</td><td>October 2005</td>
<td>JAXP validation</td>
<td>Brett McLaughlin</td></tr>
</table>
</BODY>
</HTML>";
 
elseif ($catalogId='catalog2')
 
return "<HTML>
<HEAD>
<TITLE>Catalog</TITLE>
</HEAD
<BODY>
<p> </p>
<table border>
 
<tr><th>CatalogId</th><th>
Journal</th><th>Section</th>
<th>Edition</th><th>Title
</th><th>Author
</th></tr><tr><td>catalog1
</td><td>IBM developerWorks</td>
<td>XML</td><td>July 2006</td>
<td>The Java XPath API
</td><td>Elliotte Harold</td>
</tr><tr><td>$catalogId2
</td><td>IBM developerWorks</td>
<td>XML</td><td>July 2006</td>
<td>The Java XPath API
</td><td>Elliotte Harold</td>
</tr>
</table>
</BODY>
</HTML>";
} 
 
ini_set("soap.wsdl_cache_enabled", "0"); 
$server = new SoapServer("catalog.wsdl"); 
$server->addFunction("getCatalogEntry"); 
 
$server->handle(); 
 
?>







    ini_set("soap.wsdl_cache_enabled", "0");

    $wsdl = "https://controlpanel.msoutlookonline.net/WebServices/Account/AccountService.asmx?WSDL";
    $ns = 'https://ws.intermedia.net/Account/Management';

    $client = new SoapClient($wsdl, array(
        "trace" => 1,
        "exceptions" => 0
    ));

    $login = 'xxxx';
    $password = 'xxxx';
    $partnerID = 1234;
    $accountID = 12345678;

    $headerBody = array('AuthentificationInfo'=>array(
        'login' => $login,
        'password' => $password,
        'accountID' => $partnerID
    ));
    $header = new SoapHeader($ns, 'AuthentificationInfo', $headerBody);
    $client->__setSoapHeaders($header);
    $client->__soapCall("echoVoid", array(null));







<?php
    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, 'https://owa.sals.edu/EWS/Services.wsdl');
    curl_setopt($c, CURLOPT_FAILONERROR, true); 
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_USERPWD, "user@example.com:password");
    curl_setopt($c, CURLOPT_HTTPAUTH, CURLAUTH_NTLM);
    $page = curl_exec($c);
    curl_close($c);
    echo '<pre>'.htmlspecialchars($page).'</pre>';

    
    
    
    <?php 
ini_set("soap.wsdl_cache_enabled", "0"); 
$client = new SoapClient("catalog.wsdl",array('trace' => 1 ));
$catalogId='catalog1';
$functions=$client->__getFunctions();
echo '<pre>';
print_r($functions);
 
 
//	$soapHeader=new SoapHeader('http://soapinterop.org/echoheader/','username','hello world');
// $response = $client->getCatalogEntry('catalog1','catalogTest111', $soapHeader);
/*$bodyArr	= array('catalog1', 'catalogTest111');
$response = $client->__soapCall('getCatalogEntry', $bodyArr,NULL,$soapHeader,NULL);	 */
//	 echo '--'.$client->__getLastRequest().'--';
$ns = 'http://namespace.example.com/';
//Body of the Soap Header.
$header = new SOAPHeader($ns, 'username', 'dipu'); 
$testArr	= array('catalogId'=>'catalog1','catalogId2'=>'catalogTest111');	
$response=$client->__soapCall("getCatalogEntry",$testArr,NULL, $header);
//Create Soap Header. 
echo $client->__getLastRequest();
//echo $client->__getLastRequestHeaders();
 
echo $response;
?>