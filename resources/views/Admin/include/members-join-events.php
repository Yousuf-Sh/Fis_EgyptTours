<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type:application/json");
ini_set('allow_url_fopen', 'On');
// include("config.php");
include("includes/config.php");

	$user_id = $_REQUEST["user_id"];
	$event_id = $_REQUEST["event_id"];
	$org_id = $_REQUEST["org_id"];
	$role= $_REQUEST['role'];
	$created_at = date('Y-m-d H:i:s');

	$arr = array("user_id"=>$user_id, "event_id"=>$event_id, "org_id"=>$org_id, "approved" => 'accept',"status" =>'accept', "role"=>$role, "created_at" => $created_at);
	$result = $db->insert($arr, PREFIX."members__join__events");

	if ($result) {
		$response['status'] = 'success';
		$response['success'] = 'Successfully Joined.';
	} else {
		$response['status'] = 'failed';
		$response['error'] = 'Joining failed.';
	}

     $json_response = json_encode($response,JSON_UNESCAPED_UNICODE);
	 echo $json_response;

?>