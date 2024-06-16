<?php
require_once "config.ctrl.php";


$dbh = Config::dbh();


class Main {

    

    public static function getUserCount()
    {
     
       
        $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $stmtz = $db_connection->prepare("SELECT * FROM users");
        $stmtz->execute();
        $resultz  = $stmtz->get_result();
        $num_rows = $resultz->num_rows;
            return  $num_rows;
       

        
    }
    public static function getYesterdayAUsercount()
    {
     
       
        $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $yesterday = new DateTime("yesterday", new DateTimeZone('Asia/Colombo'));
$yesterday = $yesterday->format('Y-m-d');

$stmtz = $db_connection->prepare("SELECT * 
    FROM users 
    WHERE DATEDIFF(onlinedate, ?) = 0 
    AND DATEDIFF(registered_date, ?) <> 0 
    AND user_name <> 'mansh'
    AND user_name <> 'Hassaan'
    AND user_name <> 'wicky'");
$stmtz->bind_param("ss", $yesterday, $yesterday);
        $stmtz->execute();
        $resultz  = $stmtz->get_result();
        $num_rows = $resultz->num_rows;
            return  $num_rows;
       

        
    }
    public static function TodayUserCount() {
      // Create database connection
      $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
      
      // Create a DateTime object for the current time in 'Asia/Colombo' timezone
      $dt12 = new DateTime("now", new DateTimeZone('Asia/Colombo'));
      
      // Format the DateTime object as a string suitable for SQL comparison
      $now = $dt12->format('Y-m-d');  // Assuming onlinedate is a DATE type in SQL
  
      // Prepare and execute the SQL statement
      $stmtz = $db_connection->prepare("SELECT * FROM `online_log` WHERE onlinedate = ?");
      $stmtz->bind_param("s", $now);
      $stmtz->execute();
      $resultz = $stmtz->get_result();
      $num_rows = $resultz->num_rows;
  
      // Return the count of rows
      return $num_rows;
  }


  public static function get7DaysUserCount() {
    // Create database connection
    $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    $query = "
    SELECT DATE(onlinedate) as date, COUNT(DISTINCT uid) as user_count
    FROM online_log
    WHERE onlinedate > DATE_SUB(NOW(), INTERVAL 7 DAY)
    GROUP BY DATE(onlinedate)
    ORDER BY DATE(onlinedate) ASC;
";

// Execute the query
$result = $db_connection->query($query);

// Initialize an array to hold the data
$data = [];

// Fetch the data
while($row = $result->fetch_assoc()) {
    $data[] = [$row["date"], (int)$row["user_count"]];
}
return $data;

$db_connection->close();
}

  
   
    
    public static function checkRole($uid, $role)
    {
     
       
        $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $stmtz = $db_connection->prepare("SELECT * FROM users WHERE user_id = ? AND role = ?");
        $stmtz->bind_param("ss", $uid, $role);
        $stmtz->execute();
        $resultz  = $stmtz->get_result();
        $num_rows = $resultz->num_rows;
        
        if ($num_rows > 0) {
            return true;
        } else {
            return false;
        }

        
    }

    public static function checkTrial($uid)
    {
     
       
        $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $stmtz = $db_connection->prepare("SELECT * FROM users WHERE user_id = ?");
        $stmtz->bind_param("s", $uid);
        $stmtz->execute();
        $resultz  = $stmtz->get_result();
        $num_rows = $resultz->num_rows;
      
        
        if ($num_rows > 0) {

            $result_row = $resultz->fetch_object();
            $registered_date = $result_row->registered_date;
            $registeredDate = new DateTime($registered_date); // Normally, you'll fetch this value from the database.
            $currentDate = new DateTime(); // Gets the current date and time

            // Calculate the difference between the two dates
            $interval = $registeredDate->diff($currentDate);
            // if($uid<=640)
            // {
                if ($interval->days > 3) {
                    return  "no";
                } else {
                    return "yes";
                }
            // }
            // else{

            
           
            // if ($interval->days < 30) {
            //     return  "yes";
            // } else {
            //     return "no";
            // }

        // }


        } else {

            return "Error";

        }

        
    }

    public static function UPcheckTrial($uid)
{
    $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check for connection error
    if ($db_connection->connect_error) {
        return json_encode(array("error" => "Database connection failed: " . $db_connection->connect_error));
    }

    $stmtz = $db_connection->prepare("SELECT * FROM users WHERE user_id = ?");
    $stmtz->bind_param("s", $uid);
    $stmtz->execute();
    $resultz = $stmtz->get_result();
    $num_rows = $resultz->num_rows;

    if ($num_rows > 0) {
        $result_row = $resultz->fetch_object();
        $registered_date = $result_row->registered_date;
        $trialdate_date = $result_row->trialdate;

        if($trialdate_date==null)
        {
          
          $dd = User::updateTrialTime($uid);
          return User::UPcheckTrial($uid);
         
        }
        else
        {
          $registeredDate = new DateTime($trialdate_date);
          $currentDate = new DateTime();
  
          // Calculate the difference between the two dates
          $interval = $registeredDate->diff($currentDate);
          $dayss = 3;
          if($interval->days==0)
          {
            $dayss = 3;
          }
          if($interval->days==1)
          {
            $dayss = 2;
          }
          if($interval->days>=2)
          {
            $dayss = 1;
          }
          if($interval->days>=3)
          {
            $dayss = 0;
          }
  
          $response = array(
              "result" => $interval->days >= 3 ? "no" : "yes",
              "data" => $dayss
          );
  
          return json_encode($response);
        }

       

    } else {
        // Consistently return JSON format for "user not found" or similar errors
        return json_encode(array("error" => "User not found"));
    }
}


    public static function createAccount($name, $email, $password)
    {
        $user_status = "unverified";
        $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $password= md5($password);
        $dt12 = new DateTime("now", new DateTimeZone('Asia/Colombo'));
        $registered_date = $dt12->format('Y-m-d H:i:s');
        $last_login_date = $dt12->format('Y-m-d H:i:s');
       
        $watchlist = '[{"id":"01010101","name":"Watchlist","coins":[]}]';
        $stmt = $db_connection->prepare("INSERT INTO `users`(`user_name` ,`user_email`, `user_password`, `user_status`, `registered_date`, `last_login_date`, `watchlists`) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss", $name, $email, $password, $user_status, $registered_date, $last_login_date, $watchlist);
        
        $success = $stmt->execute();


        if ($success == true) {

            
            return true;
        }
        else
        {
            return false;
        }
    }

    
    public static function addRef($ref, $email)
    {
        $uid = User::getUserID($email);
        $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
       
        $dt12 = new DateTime("now", new DateTimeZone('Asia/Colombo'));
        $registered_date = $dt12->format('Y-m-d H:i:s');
       
        $stmt = $db_connection->prepare("INSERT INTO `referrals`(`ref`, `userid`, `date`) VALUES (?,?,?)");
        $stmt->bind_param("sss", $ref, $uid, $registered_date);
        $success = $stmt->execute();


        if ($success == true) {

            return true;
        }
        else
        {
            return false;
        }
    }
    
    public static function checkBKR($data) {
        $data = str_replace("%", "$", $data);
        $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        $query = "SELECT * FROM BACKUP_COOKIES WHERE id = ?";
 
        $query1 = mysqli_real_escape_string($db_connection, htmlspecialchars($query));
        
        $stmt = $db_connection->prepare($query1);
        $stmt->bind_param("s", $data);
        $stmt->execute();
        $resultz  = $stmt->get_result();
        $result_row = $resultz->fetch_object();
     
          $num_rows = $resultz->num_rows;
         
        $p_id = $result_row->status;
       
        return $p_id;
     }
    public static function getUserID($email) {
     
       $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
       
       $query = "SELECT * FROM users WHERE user_email = ?";

       $query1 = mysqli_real_escape_string($db_connection, htmlspecialchars($query));
       
       $stmt = $db_connection->prepare($query1);
       $stmt->bind_param("s", $email);
       $stmt->execute();
       $resultz  = $stmt->get_result();
       $result_row = $resultz->fetch_object();
    
         $num_rows = $resultz->num_rows;
        
       $p_id = $result_row->user_id;
      
       return $p_id;
    }


    public static function getUserEmail($id) {
     
        $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        $query = "SELECT * FROM users WHERE user_id = ?";
 
        $query1 = mysqli_real_escape_string($db_connection, htmlspecialchars($query));
        
        $stmt = $db_connection->prepare($query1);
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $resultz  = $stmt->get_result();
        $result_row = $resultz->fetch_object();
     
          $num_rows = $resultz->num_rows;
         
        $user_email = $result_row->user_email;
       
        return $user_email;
     }

     public static function getUserName($id) {
     
        $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        $query = "SELECT * FROM users WHERE user_id = ?";
 
        $query1 = mysqli_real_escape_string($db_connection, htmlspecialchars($query));
        
        $stmt = $db_connection->prepare($query1);
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $resultz  = $stmt->get_result();
        $result_row = $resultz->fetch_object();
     
          $num_rows = $resultz->num_rows;
         
        $user_name = $result_row->user_name;
       
        return $user_name;
     }

    public static function EXM81($data)
    {
        $simple_string = $data;
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = '1234567891011111';
        $encryption_key = "icryptifymanish";
  
        $encryption = openssl_encrypt($simple_string, $ciphering, $encryption_key, $options, $encryption_iv);
        return str_replace("=","_",$encryption);
    }

    public static function DXM81($data)
    {
        $encryption = $data;
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = '1234567891011111';
        $decryption_key = "icryptifymanish";
      
        $decryption=openssl_decrypt (str_replace("_","=",$encryption), $ciphering, $decryption_key, $options, $encryption_iv);
        return $decryption;
    }

    public static function checkEmail($email)
    {
  
    
      $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
      $stmtz = $db_connection->prepare("SELECT * FROM users WHERE user_email = ?");
      $stmtz->bind_param("s", $email);
      $stmtz->execute();
      $resultz  = $stmtz->get_result();
      $num_rows = $resultz->num_rows;
        
        if ($num_rows == 0) {
           return false;
        } else {
           return true;
        }  
    }

    public static function getRefC($uid)
    {
  
    
      $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
      $stmtz = $db_connection->prepare("SELECT * FROM `referrals` WHERE `ref` = ?");
      $stmtz->bind_param("s", $uid);
      $stmtz->execute();
      $resultz  = $stmtz->get_result();
      $num_rows = $resultz->num_rows;
      return $num_rows;

    }
    

    public static function ddUser($id)
    {
        $data = "delete";
        $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $stmt2 = $db_connection->prepare("UPDATE `users` SET `user_status`=? WHERE `user_id`= ?");
        $stmt2->bind_param("ss", $data, $id);
        $success = $stmt2->execute();
        if ($success == true) {
         return "ok";
        }
        else
        {
         return "0";
        }
    
    }

    public static function updateTrialTime($id)
    {
        $date = new DateTime("now", new DateTimeZone('Asia/Colombo'));
        $formattedDate = $date->format('Y-m-d H:i:s');
        $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $stmt2 = $db_connection->prepare("UPDATE `users` SET `trialdate`=? WHERE `user_id`= ?");
        $stmt2->bind_param("ss", $formattedDate, $id);
        $success = $stmt2->execute();
        if ($success == true) {
         return "ok";
        }
        else
        {
         return "0";
        }
    
    }

    public static function updatePass($email,$pass)
    {
        $password= md5($pass);

        $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $stmt2 = $db_connection->prepare("UPDATE `users` SET `user_password`=? WHERE `user_email`= ?");
        $stmt2->bind_param("ss", $password, $email);
        $success = $stmt2->execute();
        if ($success == true) {
         return true;
        }
        else
        {
         return false;
        }
    
    }

    public static function verifyUser($email)
    {
        $data = "verified";
        $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $stmt2 = $db_connection->prepare("UPDATE `users` SET `user_status`=? WHERE `user_email`= ?");
        $stmt2->bind_param("ss", $data, $email);
        $success = $stmt2->execute();
        // if ($success == true) {
        //  return "ok";
        // }
        // else
        // {
        //  return "0";
        // }
    
    }
    public static function checkdeleted($email)
    {
  
   
      $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
      $stmtz = $db_connection->prepare("SELECT * FROM users WHERE user_email = ?");
      $stmtz->bind_param("s", $email);
      $stmtz->execute();
      $resultz  = $stmtz->get_result();
      $result_row = $resultz->fetch_object();
        $num_rows = $resultz->num_rows;
        
        if ($num_rows == 0) {
           return "no";
        } else {
            
    
        $sss = $result_row->user_status;
      
        if($sss=="delete")
        {
        
        return "deleted";
        }
        else
        {
          return "ok";
        }
        }
      
    }

    public static function validateAccount($email, $password)
    {
  
      $password = md5($password);
      $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
      $stmtz = $db_connection->prepare("SELECT * FROM users WHERE user_email = ? AND user_password = ?");
      $stmtz->bind_param("ss", $email, $password);
      $stmtz->execute();
      $resultz  = $stmtz->get_result();
      $result_row = $resultz->fetch_object();

        $num_rows = $resultz->num_rows;
        
        if ($num_rows == 0) {
           return false;
        } else {
            
      $dpass = $result_row->user_password;
      $user_id = $result_row->user_id;
      $user_email = $result_row->user_email;
      $sss = $result_row->user_status;
      
        if($password==$dpass)
        {
        

// Check if there are any cookies
if (isset($_SERVER['HTTP_COOKIE'])) {
    // Split multiple cookies
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    
    // Loop through each cookie and delete it
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000); // set it to expire in the past
        setcookie($name, '', time()-1000, '/'); // make sure path is specified
    }
}


        $rtest =  Sessions::createRecord($user_id, $user_email);
       
        return  true;
        }
        else
        {
          return false;
        }
        }

        
      
    }



    public static function checkVerification($id)
    {
  
      $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
      $stmtz = $db_connection->prepare("SELECT * FROM users WHERE user_id = ?");
      $stmtz->bind_param("s", $id);
      $stmtz->execute();
      $resultz  = $stmtz->get_result();
      $result_row = $resultz->fetch_object();

        $num_rows = $resultz->num_rows;
        
        if ($num_rows == 0) {
           return "no";
        } else {
            
 
      $sss = $result_row->user_status;
      if($sss == "unverified")
      {
        return "not";
      }
      else
      {
        return "verified";
      }
      

        
      
    }
}

           public static function sendforget($email) {
            return "ok";
           }

    
}

?>