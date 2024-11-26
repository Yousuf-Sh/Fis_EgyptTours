<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
ini_set('allow_url_fopen', 'On');
include("../includes/config.php");

// is api ma hum na phaly add_skills ky table ma sa phalay data uthya means service_name then hum na user table ma sa data uthya on the basis of provider_id then hum na managebussinesses ky table ma sa data uthya then hum na 3no ko merge kar diya 

$provider_id = $_REQUEST["provider_id"];
$response = array();
$getAddSkills = $db->selectSRow(array("*"), PREFIX . "add_skills","provider_id='$provider_id'");
if ($getAddSkills) {
$idd= $getAddSkills['provider_id'];
        $getUserData = $db->selectSRow(array("*"), PREFIX . "users", "id ='$idd'");
        if ($getUserData) {
          $data= $getUserData['id'];

         // Get data from the "bookings" table
         $getBookingData = $db->select(array("COUNT(provider_id) as total_providerIDs, ROUND(AVG(rating), 1) as rating"), PREFIX . "bookings", "provider_Id ='$data' AND status='complete'");
         if ($getBookingData) {
                foreach ($getBookingData as $value) {
                
                $getBusinessData = $db->selectSRow(array("working_experience"), PREFIX . "managebussinesses", "provider_id='$data'");
                if ($getBusinessData) {
                        $merged_data = array(
                            'service_name' => $getAddSkills['service_name'],
                            'address' => $getUserData['address'],
                            'phone_number' => $getUserData['phone_number'],
                            'working_experience' => $getBusinessData['working_experience'],
                            'rating' => $value->rating,
                            'total_jobs' => $value->total_providerIDs
                        );
                        $response[] = $merged_data;
                }
            }
        }
     }
}else {
        $response['error']='Record Not Found!';
}

$json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
echo $json_response;
?>