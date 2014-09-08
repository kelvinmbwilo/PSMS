<?php
session_start();
/**
 PHP API for Login, Register, Changepassword, Resetpassword Requests and for Email Notifications.
 **/
if (isset($_POST['tag']) && $_POST['tag'] != '') {
    // Get tag
    $tag = $_POST['tag'];
    // Include Database handler
    require_once 'include/DB_Functions.php';
    $db = new DB_Functions();
    // response Array
    $response = array("tag" => $tag, "success" => 0, "error" => 0);
    $res=array(array()); 


 // check for tag type  
    if ($tag == 'login') {
        // Request type is check Login
        $username = $_POST['username'];
        $password = $_POST['password'];
    //the email will be used in querying
     //   session_regenerate_id();
	   // $_SESSION['email'] = $_POST['email'];
	    //session_write_close();			
        // check for user
		
        $user = $db->getUser($username, $password);
        if ($user != false) {
            // user found
            // echo json with success = 1
            $response["success"] = 1;
            $response["user"]["rankNo"] = $user["rankNo"];
       
            $response["user"]["fullName"] = $user["fullName"];
            $response["user"]["station"] = $user["station"];
          
            $response["user"]["created_at"] = $user["created_at"];
            echo json_encode($response);
        } else {
            // user not found
            // echo json with error = 1
            $response["error"] = 1;
            $response["error_msg"] = "Incorrect username or password!";
            echo json_encode($response);
        }
    }else if ($tag == 'verification') {
        // Request type is car and license verification
        $license = $_POST['license'];
        $plateNumber = $_POST['plateNumber'];
    //the email will be used in querying
     //   session_regenerate_id();
	   // $_SESSION['email'] = $_POST['email'];
	    //session_write_close();			
        // check for user
        $car = $db->getCar($plateNumber);
        $person =$db->getLicence($license);
        if ($car != false) {
            // user found
            // echo json with success = 1
            $response["success"] = 1;
            $response["detail"]["type"] = $car["type"];
            $response["detail"]["make"] = $car["make"];
            $response["detail"]["color"] = $car["color"];
            $response["detail"]["registered_on"] = $car["created_at"];
          //  echo json_encode($response);
        } 
		 if ($person != false) {
            // person found
            // echo json with success = 1
            $response["success"] = 1;
            $response["detail"]["name"] = $person["name"];
            $response["detail"]["address"] = $person["address"];
            $response["detail"]["class"] = $person["class"];
            $response["detail"]["expiryDate"] = $person["expiryDate"];
            $response["detail"]["status"] = $person["status"];
           
          
            $response["detail"]["created_at"] = $person["created_at"];
            echo json_encode($response);
        }else {
            // user not found
            // echo json with error = 1
            $response["error"] = 1;
            $response["error_msg"] = "Incorrect licence or plateNumber!";
            echo json_encode($response);
        }
    }
  else if ($tag == 'chgpass'){
  $email = $_POST['email'];
  $newpassword = $_POST['newpas'];
  $hash = $db->hashSSHA($newpassword);
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"];
  $subject = "Change Password Notification";
         $message = "Hello User,nnYour Password is sucessfully changed.nnRegards,nAdmin.";
          $from = "pnyairema@gmail.com";
          $headers = "From:" . $from;
  if ($db->isUserExisted($email)) {
 $user = $db->forgotPassword($email, $encrypted_password, $salt);
if ($user) {
         $response["success"] = 1;
          mail($email,$subject,$message,$headers);
         echo json_encode($response);
}
else {
$response["error"] = 1;
echo json_encode($response);
}
            // user is already existed - error response
        }
           else {
            $response["error"] = 2;
            $response["error_msg"] = "User not exist";
             echo json_encode($response);
}
}
else if ($tag == 'forpass'){
$forgotpassword = $_POST['forgotpassword'];
$subject = "Password Recovery";
         $message = "Hello User,nnYour Password resetting requesting has been sent.  . wait for an email from the System administrator or contact me via 0712763363.nnRegards,nAdmin.";
          $from = "pnyairema@gmail.com";
          $headers = "From:" . $from;
  if ($db->isUserExisted($forgotpassword)) {
 
         $response["success"] = 1;
          mail($forgotpassword,$subject,$message,$headers);
         echo json_encode($response);


            // user is already existed - error response
        }
           else {
            $response["error"] = 2;
            $response["error_msg"] = "User does not exist";
             echo json_encode($response);
}
}
else if ($tag == 'history') {
        // Request type is Register new user
        $license = $_POST['license'];
 
            // get reported offence of a particular driver
            $history = $db->getHistory($license);
            if ($history) {
                // offence stored successfully
				$i=0;
            $response["success"] = 1;
            $response["history".$i]["offence"] = $history["offence"];
            $response["history".$i]["date"] = $history["created_at"];
			
			
            $response["history1"]["offence"] = $history["offence"];
            $response["history1"]["date"] = $history["created_at"];
           //    mail($email,$subject,$message,$headers);
                echo json_encode($response);
            } else {
                // user failed to store
                $response["error"] = 1;
                $response["error_msg"] = "JSON Error occurred in getting data";
                echo json_encode($response);
            }
        
    }else if ($tag == 'register') {
        // Request type is Register new user
        $license = $_POST['license'];
    $plateNumber = $_POST['plateNumber'];
        $offence = $_POST['offence'];
        $commit = $_POST['commit'];
        $rankNo = $_POST['rankNo'];
  
     //     $subject = "Registration";
     //    $message = "Hello $fname,nnYou have sucessfully registered to our service.nnRegards,nAdmin.";
     //     $from = "pnyairema@gmail.com";
      //    $headers = "From:" . $from;
        // check if user is already existed
     /*   if ($db->isUserExisted($email)) {
            // user is already existed - error response
            $response["error"] = 2;
            $response["error_msg"] = "User already existed";
            echo json_encode($response);
        }
           else if(!$db->validEmail($email)){
            $response["error"] = 3;
            $response["error_msg"] = "Invalid Email Id";
            echo json_encode($response);
}
*/

            // store offence
            $offenceDetails = $db->storeOffence($license, $plateNumber, $offence, $rankNo, $commit);
            if ($offenceDetails) {
                // offence stored successfully
            $response["success"] = 1;
            $response["offenceDetails"]["license"] = $offenceDetails["license"];
            $response["offenceDetails"]["plateNumber"] = $offenceDetails["plateNumber"];
            $response["offenceDetails"]["offence"] = $offenceDetails["offence"];
            $response["offenceDetails"]["commit"] = $offenceDetails["commit"];
            $response["offenceDetails"]["rankNo"] = $offenceDetails["rankNo"];
            $response["offenceDetails"]["created_at"] = $offenceDetails["created_at"];
           //    mail($email,$subject,$message,$headers);
                echo json_encode($response);
            } else {
                // user failed to store
                $response["error"] = 1;
                $response["error_msg"] = "JSON Error occurred in sending data";
                echo json_encode($response);
            }
        
    } else {
         $response["error"] = 3;
         $response["error_msg"] = "JSON ERROR";
        echo json_encode($response);
    }
} else {
    echo "submitting offence API";
}
?>