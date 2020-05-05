<?php namespace Listener;  
// Set this to true to use the sandbox endpoint during testing:
$enable_sandbox = false;

// Use this to specify all of the email addresses that you have attached to paypal:
$my_email_addresses = array("info@ironskyfitness.com");

// Set this to true to send a confirmation email:
$send_confirmation_email = true;
$confirmation_email_address = "Ironsky-fitness <info@ironskyfitness.com>";
$from_email_address = "Ironsky App <info@ironsky-app.com>";

// Set this to true to save a log file:
$save_log_file = true;
$log_file_dir = __DIR__ . "/logs";

// Here is some information on how to configure sendmail:
// http://php.net/manual/en/function.mail.php#118210



require('PaypalIPN.php');
use PaypalIPN;
$ipn = new PaypalIPN();
if ($enable_sandbox) {
    $ipn->useSandbox();
}
$verified = $ipn->verifyIPN();

$data_text = "";
foreach ($_POST as $key => $value) {
    $data_text .= $key . " = " . $value . "\r\n";
}

$test_text = "";
if ($_POST["test_ipn"] == 1) {
    $test_text = "Test ";
}

// Check the receiver email to see if it matches your list of paypal email addresses
$receiver_email_found = false;
foreach ($my_email_addresses as $a) {
    if (strtolower($_POST["receiver_email"]) == strtolower($a)) {
        $receiver_email_found = true;
        break;
    }
}

date_default_timezone_set("Europe/Athens");
list($year, $month, $day, $hour, $minute, $second, $timezone) = explode(":", date("Y:m:d:H:i:s:T"));
$date = $year . "-" . $month . "-" . $day;
$timestamp = $date . " " . $hour . ":" . $minute . ":" . $second . " " . $timezone;
$dated_log_file_dir = $log_file_dir . "/" . $year . "/" . $month;

$session_email;
$membership;
$paypal_ipn_status = "VERIFICATION FAILED";
if ($verified) {
    $paypal_ipn_status = "RECEIVER EMAIL MISMATCH";
    if ($receiver_email_found) {
        $paypal_ipn_status = "Completed Successfully";


        // Process IPN
        // A list of variables are available here:
        // https://developer.paypal.com/webapps/developer/docs/classic/ipn/integration-guide/IPNandPDTVariables/

        // This is an example for sending an automated email to the customer when they purchases an item for a specific amount:
            $membership=$_POST["item_name"];
            $price;
            switch ($membership) {
                case "unlimited_test":
                    {
                        if ($_POST["mc_gross"] == 0.01 && $_POST["mc_currency"] == "EUR" && $_POST["payment_status"] == "Completed") {
                            $email_to = $_POST["first_name"] . " " . $_POST["last_name"] . " <" . $_POST["payer_email"] . ">";
                            $email_subject = $test_text . "Completed order for: " . $_POST["item_name"];
                            $email_body = "You have renewed your membership with the " . $_POST["item_name"] . " plan." . "\r\n" . "\r\n" . "Thank you.";
                            $session_email=$_POST["custom"];

                            mail($email_to, $email_subject, $email_body, "From: " . $from_email_address);
                        }
                    }
                    break;
                case "Unlimited":
                    {
                        if ($_POST["mc_gross"] == 85 && $_POST["mc_currency"] == "EUR" && $_POST["payment_status"] == "Completed") {
                            $email_to = $_POST["first_name"] . " " . $_POST["last_name"] . " <" . $_POST["payer_email"] . ">";
                            $email_subject = $test_text . "Completed order for: " . $_POST["item_name"];
                            $email_body = "You have renewed your membership with the " . $_POST["item_name"] . "plan." . "\r\n" . "\r\n" . "Thank you.";
                            $session_email=$_POST["custom"];

                            mail($email_to, $email_subject, $email_body, "From: " . $from_email_address);
                        }
                    }
                    break;
                case "3 Sessions / Week":
                    {
                        if ($_POST["mc_gross"] == 75 && $_POST["mc_currency"] == "EUR" && $_POST["payment_status"] == "Completed") {
                            $email_to = $_POST["first_name"] . " " . $_POST["last_name"] . " <" . $_POST["payer_email"] . ">";
                            $email_subject = $test_text . "Completed order for: " . $_POST["item_name"];
                            $email_body = "You have renewed your membership with the " . $_POST["item_name"] . " plan." . "\r\n" . "\r\n" . "Thank you.";
                            $session_email=$_POST["custom"];

                            mail($email_to, $email_subject, $email_body, "From: " . $from_email_address);
                        }
                    }
                    break;
                case "Open Gym":
                    {
                        if ($_POST["mc_gross"] == 70 && $_POST["mc_currency"] == "EUR" && $_POST["payment_status"] == "Completed") {
                            $email_to = $_POST["first_name"] . " " . $_POST["last_name"] . " <" . $_POST["payer_email"] . ">";
                            $email_subject = $test_text . "Completed order for: " . $_POST["item_name"];
                            $email_body = "You have renewed your membership with the " . $_POST["item_name"] . " plan." . "\r\n" . "\r\n" . "Thank you.";
                            $session_email=$_POST["custom"];

                            mail($email_to, $email_subject, $email_body, "From: " . $from_email_address);
                        }
                    }
                    break;
                case "Grow Strong":
                    {
                        if ($_POST["mc_gross"] == 55 && $_POST["mc_currency"] == "EUR" && $_POST["payment_status"] == "Completed") {
                            $email_to = $_POST["first_name"] . " " . $_POST["last_name"] . " <" . $_POST["payer_email"] . ">";
                            $email_subject = $test_text . "Completed order for: " . $_POST["item_name"];
                            $email_body = "You have renewed your membership with the " . $_POST["item_name"] . " plan." . "\r\n" . "\r\n" . "Thank you.";
                            $session_email=$_POST["custom"];

                            mail($email_to, $email_subject, $email_body, "From: " . $from_email_address);
                        }
                    }
                    break;
                case "We Move":
                    {
                        if ($_POST["mc_gross"] == 55 && $_POST["mc_currency"] == "EUR" && $_POST["payment_status"] == "Completed") {
                            $email_to = $_POST["first_name"] . " " . $_POST["last_name"] . " <" . $_POST["payer_email"] . ">";
                            $email_subject = $test_text . "Completed order for: " . $_POST["item_name"];
                            $email_body = "You have renewed your membership with the " . $_POST["item_name"] . " plan." . "\r\n" . "\r\n" . "Thank you.";
                            $session_email=$_POST["custom"];

                            mail($email_to, $email_subject, $email_body, "From: " . $from_email_address);
                        }
                    }
                    break;
                 case "Unlimited 3 Months":
                    {
                        if ($_POST["mc_gross"] == 220 && $_POST["mc_currency"] == "EUR" && $_POST["payment_status"] == "Completed") {
                            $email_to = $_POST["first_name"] . " " . $_POST["last_name"] . " <" . $_POST["payer_email"] . ">";
                            $email_subject = $test_text . "Completed order for: " . $_POST["item_name"];
                            $email_body = "You have renewed your membership with the " . $_POST["item_name"] . " plan." . "\r\n" . "\r\n" . "Thank you.";
                            $session_email=$_POST["custom"];

                            mail($email_to, $email_subject, $email_body, "From: " . $from_email_address);
                        }
                    }
                    break;
                case "3 Sessions / Week 3 Months":
                    {
                        if ($_POST["mc_gross"] == 200 && $_POST["mc_currency"] == "EUR" && $_POST["payment_status"] == "Completed") {
                            $email_to = $_POST["first_name"] . " " . $_POST["last_name"] . " <" . $_POST["payer_email"] . ">";
                            $email_subject = $test_text . "Completed order for: " . $_POST["item_name"];
                            $email_body = "You have renewed your membership with the " . $_POST["item_name"] . " plan." . "\r\n" . "\r\n" . "Thank you.";
                            $session_email=$_POST["custom"];

                            mail($email_to, $email_subject, $email_body, "From: " . $from_email_address);
                        }
                    }
                    break;
                case "Open Gym 3 Months":
                    {
                        if ($_POST["mc_gross"] == 190 && $_POST["mc_currency"] == "EUR" && $_POST["payment_status"] == "Completed") {
                            $email_to = $_POST["first_name"] . " " . $_POST["last_name"] . " <" . $_POST["payer_email"] . ">";
                            $email_subject = $test_text . "Completed order for: " . $_POST["item_name"];
                            $email_body = "You have renewed yout membership with the " . $_POST["item_name"] . " plan." . "\r\n" . "\r\n" . "Thank you.";
                            $session_email=$_POST["custom"];

                            mail($email_to, $email_subject, $email_body, "From: " . $from_email_address);
                        }
                    }
                    break;
                case "Grow Strong 3 Months":
                    {
                        if ($_POST["mc_gross"] == 150 && $_POST["mc_currency"] == "EUR" && $_POST["payment_status"] == "Completed") {
                            $email_to = $_POST["first_name"] . " " . $_POST["last_name"] . " <" . $_POST["payer_email"] . ">";
                            $email_subject = $test_text . "Completed order for: " . $_POST["item_name"];
                            $email_body = "You have renewed your membership with the " . $_POST["item_name"] . " plan." . "\r\n" . "\r\n" . "Thank you.";
                            $session_email=$_POST["custom"];

                            mail($email_to, $email_subject, $email_body, "From: " . $from_email_address);
                        }
                    }
                    break;
                case "We Move 3 Months":
                    {
                        if ($_POST["mc_gross"] == 150 && $_POST["mc_currency"] == "EUR" && $_POST["payment_status"] == "Completed") {
                            $email_to = $_POST["first_name"] . " " . $_POST["last_name"] . " <" . $_POST["payer_email"] . ">";
                            $email_subject = $test_text . "Completed order for: " . $_POST["item_name"];
                            $email_body = "You have renewed your membership with the" . $_POST["item_name"] . " plan." . "\r\n" . "\r\n" . "Thank you.";
                            $session_email=$_POST["custom"];

                            mail($email_to, $email_subject, $email_body, "From: " . $from_email_address);
                        }
                    }
                    break;

            }

    }
} elseif ($enable_sandbox) {
    if ($_POST["test_ipn"] != 1) {
        $paypal_ipn_status = "RECEIVED FROM LIVE WHILE SANDBOXED";
    }
} elseif ($_POST["test_ipn"] == 1) {
    $paypal_ipn_status = "RECEIVED FROM SANDBOX WHILE LIVE";
}

if ($save_log_file) {
    // Create log file directory
    if (!is_dir($dated_log_file_dir)) {
        if (!file_exists($dated_log_file_dir)) {
            mkdir($dated_log_file_dir, 0777, true);
            if (!is_dir($dated_log_file_dir)) {
                $save_log_file = false;
            }
        } else {
            $save_log_file = false;
        }
    }
    // Restrict web access to files in the log file directory
    $htaccess_body = "RewriteEngine On" . "\r\n" . "RewriteRule .* - [L,R=404]";
    if ($save_log_file && (!is_file($log_file_dir . "/.htaccess") || file_get_contents($log_file_dir . "/.htaccess") !== $htaccess_body)) {
        if (!is_dir($log_file_dir . "/.htaccess")) {
            file_put_contents($log_file_dir . "/.htaccess", $htaccess_body);
            if (!is_file($log_file_dir . "/.htaccess") || file_get_contents($log_file_dir . "/.htaccess") !== $htaccess_body) {
                $save_log_file = false;
            }
        } else {
            $save_log_file = false;
        }
    }
    if ($save_log_file) {
        // Save data to text file
        file_put_contents($dated_log_file_dir . "/" . $test_text . "paypal_ipn_" . $date . ".txt", "paypal_ipn_status = " . $paypal_ipn_status . "\r\n" . "paypal_ipn_date = " . $timestamp . "\r\n" . $data_text . "\r\n", FILE_APPEND);
    }
}

if ($send_confirmation_email) {
    // Send confirmation email
    mail($confirmation_email_address, $test_text . "PayPal IPN : " . $paypal_ipn_status, "paypal_ipn_status = " . $paypal_ipn_status . "\r\n" . "paypal_ipn_date = " . $timestamp . "\r\n" . $data_text, "From: " . $from_email_address);
}

// Reply with an empty 200 response to indicate to paypal the IPN was received correctly
header("HTTP/1.1 200 OK");

$pmstat=$_POST["payment_status"];
$tranId=$_POST["txn_id"];

require('connectDB.php');

if($paypal_ipn_status == "Completed Successfully"){
    if($pmstat=="Completed"){
        
        

            //check for duplicates
            $sql="SELECT * FROM Paypal WHERE TransactionID='$tranId'";
            $result=mysqli_query($conn,$sql);
            while($r = mysqli_fetch_assoc($result)) {
                if($r['Transaction_Status']=="Completed"){
                    exit();
                }
            }
            
            //get customer email
            $sql="SELECT Customer_ID FROM Customer WHERE Email='$session_email'";
            $result=mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            $userID=$row['Customer_ID'];

            
            //get duration of membership
            $sql="SELECT Duration FROM Membership_Types WHERE Type='$membership'";
            $result=mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            $duration=$row['Duration'];
            
            
            //get expiry date of current membership
            $sql="SELECT ExpirationDate FROM Memberships WHERE CustomerID=".$userID;
            $result=mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            $exp=$row['ExpirationDate'];

            $today=date("Y-m-d");
            
            //check for on hold paid memberships
            $sql="SELECT * FROM On_Hold_Memberships WHERE UserID=".$userID." ORDER BY PrevExp DESC";
            $result=mysqli_query($conn,$sql); 
            $row = mysqli_fetch_assoc($result);

            
            if($row['UserID']==$userID){
                //save the payed membership in the On_Hold_Memberships
                //we get the entry with the highest date because of order by
                //calculate the next expiry date based on this date
                

                $calcExp=$row['CalcExp'];
                $sql="INSERT INTO On_Hold_Memberships(UserID,MembershipType,PrevExp,CalcExp) VALUES ($userID,'$membership','$calcExp',DATE_ADD('$calcExp',INTERVAL ".$duration." MONTH))";
                mysqli_query($conn,$sql);

            }else{
                //if he doesn't have another paid membership then check the dates, to see if his current membership is expired
                //if it is not, add him to the table On_Hold_Memberships, else update his membership
                if($exp>$today){
                    $sql="INSERT INTO On_Hold_Memberships(UserID,MembershipType,PrevExp,CalcExp) VALUES ($userID,'$membership','$exp',DATE_ADD('$exp',INTERVAL ".$duration." MONTH))";
                    mysqli_query($conn,$sql);
                }else{
                    //update membership
                    $up="UPDATE Memberships SET Type='$membership',ExpirationDate=DATE_ADD('$exp',INTERVAL ".$duration." MONTH) WHERE CustomerID=".$userID;
                    mysqli_query($conn,$up);
                }
            }

            
    }
}

$sql="INSERT INTO Paypal(TransactionID,Transaction_Status) VALUES ('$tranId','$pmstat')";
mysqli_query($conn,$sql);
mysqli_close($conn);           
