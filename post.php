<?php
error_reporting(0);

 $patient_names = $_POST['patient_name'];
 $genders = $_POST['gender'];
 $mobile_numbers = $_POST['mobile_number'];
 $days = $_POST['day'];
 $months = $_POST['month'];
 $years = $_POST['year'];
 $street_addresss = $_POST['street_address'];
 $street_address2s = $_POST['street_address2'];
 $citys = $_POST['city'];
 $states = $_POST['state'];
 $zipcodes = $_POST['zipcode'];
 $countrys = $_POST['country'];
 $emails = $_POST['email'];
 $textareas = $_POST['textarea'];
 $tests1 = $_POST['test1'];
  $tests2 = $_POST['test2'];
   $tests3 = $_POST['test3'];
    $tests4 = $_POST['test4'];
	 $tests5 = $_POST['test5'];
	  $tests6 = $_POST['test6'];
  if(strpos($tests1, 'on') !== false) {
                            $message="Heart Checkup";
                       
                        }elseif(strpos($tests2, 'on') !== false) {
                           $message="Eye Checkup";
                        }elseif(strpos($tests3, 'on') !== false) {
                           $message="Hearing Test";
                        }elseif(strpos($tests4, 'on') !== false) {
                           $message="Blood Test";
                        }elseif(strpos($tests5, 'on') !== false) {
                           $message="Normal Consulting";
                        }else{
                            $message="Skin Care";
                        }


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doct";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO form(patient_name,gender,mobile_number,day,month,year,street_address,street_address2,city,state,zipcode,country,email,textarea,app_type)
    VALUES ('$patient_names','$genders','$mobile_numbers','$days','$months','$years','$street_addresss','$street_address2s','$citys','$states','$zipcodes','$countrys','$emails','$textareas','$message')";
    // use exec() because no results are returned
    $conn->exec($sql);
header("Location:./");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

 


?>