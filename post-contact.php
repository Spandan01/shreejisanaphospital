<!DOCTYPE html>
<html lang="zxx">
    <head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="assets/js/toastr.min.js"></script>
  <link href="assets/css/toastr.css" rel="stylesheet">

    </head>
    <body>
        
        <?php


error_reporting(1);
        if (isset($_POST)) {
          $subject =  "Customer Enquiry";
          
           
          //  $phone =   trim($_POST['phone']);
           $name =   trim($_POST['name']);
           $email = trim($_POST['email']);
           $mobile = trim($_POST['mobile']);
           $sub = trim($_POST['sub']);
           $msg = trim($_POST['msg']);
          
//  echo "helo".  $pickup_date   . "   " .   $drop_date   . "   " .   $name . "   " .   $mobile_no  . "   " .    $email  ;
// die();

// $date = date("Y-m-d");


 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// echo $sql;
// die();
 // die();
	
			
$errors= array();


			
		           //echo trim($_POST['message']);die();
            require_once 'class-phpmailer.php';
            require_once 'class-smtp.php';
            $phpmailer = new PHPMailer();

            $phpmailer->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $phpmailer->IsSMTP(); // telling the class to use SMTP
            $phpmailer->SMTPAuth = true;
            $phpmailer->SMTPSecure = "ssl";
          $phpmailer->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
            $phpmailer->Host = "smtp.gmail.com"; // SMTP server

            $phpmailer->Port = 465;
            $phpmailer->IsHTML(true);
            $phpmailer->Username = "thombarespandan2410@gmail.com";   //host email id 
          $phpmailer->Password = "jkgfvfzfwsaiwlnw";   

           $phpmailer->To = "thombarespandan2410@gmail.com";    //your email id
          
            $phpmailer->AddCC('2410spandan@gmail.com', 'self');
            $phpmailer->AddCC('sanaphospital2021@gmail.com', 'self');

            

            //$phpmailer->AddReplyTo = $email;
            $phpmailer->CharSet = "UTF-8";
           // $phpmailer->From = $email;
	
            //$phpmailer->FromName = $first_name;
			
           $phpmailer->Subject = "Hello sir You have new enquiry here";
            $phpmailer->Body .= "Hello Sir/Madam," . "<br><br>";
           
            $phpmailer->Body .= "<b>Name :</b>" . $name. "<br><br>";
            $phpmailer->Body .= "<b>Subject :</b>" . $sub. "<br><br>";
            $phpmailer->Body .= "<b>E-mail :</b>" . $email. "<br>";
			 $phpmailer->Body .= "<b>Contact  :</b>" . $mobile. "<br>";
			  $phpmailer->Body .= "<b>Message :</b>" . $msg. "<br>";
			  
			 
         
          
       
            $phpmailer->WordWrap = 50; // set word wrap
            $phpmailer->AddAddress($phpmailer->To);
			
			
			//echo "!sssss";
			
			
			//die();

  // echo    $pikup_location . "   " .   $drop_location . "   " .   $name . "   " .   $mobile_no  . "   " .   $car_name . "   " .   $trip_type;
			
	// 		die();

  
	  
	  
	//  	echo "sssss";
			
			
	// die();


            if (!$phpmailer->Send()) {
						echo "<script language='javascript'>
			alert('Sorry Something else Wrong.......!')
        window.location.replace('');
            </script>";
				
 echo "Mailer Error: " . $phpmailer->ErrorInfo;
                echo "error occured";
exit(); 
            } else {
				
				
				
				echo "<script language='javascript'>
			alert('Thankx For Your Favourable Reply.')
        window.location.replace('');
            </script>";
				
exit();

                $emailSent = true;
            }
        }
     
        ?>
    </body>

</html>