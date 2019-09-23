<?php
//Test Connection

// create/update a new contact "7-25-2019"
require_once("isdk.php");	
$app = new iSDK;

if( $app->cfgCon("aa478")){ 

$contactId = $_REQUEST['contactId'];
echo $contactId;
$stringB=$_REQUEST['tagIDs'];

$arrayB = explode(',', $stringB);


foreach($arrayB as $arraybb){
	echo $arraybb."<br>";
	$result = $app->grpAssign($contactId, $arraybb);
	if(!$result){
		echo "Error";
	}else{
		echo "Success";
	}
} 

} 
?> 

	