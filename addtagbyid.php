<?php
//Test Connection

// create/update a new contact "7-25-2019"
require_once("isdk.php");	
$app = new iSDK;

if( $app->cfgCon("aa478")){ 

	//Get the data
$contactId = $_REQUEST['contactId'];
$stringB=$_REQUEST['tagIDs'];

	//Get all the data from the array of tags
$arrayB = explode(',', $stringB);

	//Loop and insert the data using the contacId
foreach($arrayB as $arraybb){
	echo $arraybb."<br>";
	$result = $app->grpAssign($contactId, $arraybb);
	if(!$result){
		//Show if error
		echo "Error";
	}else{
		//Show if success
		echo "Success";
	}
} 

} 
?> 

	
