<?php 

$server     = "shareddb-f.hosting.stackcp.net";
$username   = "money-manager-32369245";
$password   = "Danish@98";
$db         = "money-manager-32369245";

//Establish Connection


//Check Connection



    // set all variables to empty by default

    
    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function

    

    if( $_POST["name"]=="" ) {
        echo "Please enter your name";
    }

    else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  echo("Please enter a valid email address");
    }

    elseif( $_POST["message"]=="" ) {
        echo "Please enter your message";
    }
    
    // check to see if each variable has data
    else{
      $conn = mysqli_connect( $server, $username, $password, $db );
      
        $query = "INSERT INTO `feedback` (name, email, message)
        VALUES ('".mysqli_real_escape_string($conn,$_POST['name'])."','".mysqli_real_escape_string($conn,$_POST['email'])."','".mysqli_real_escape_string($conn,$_POST['message'])."')";

       if(mysqli_query($conn,$query)){    
      echo "Your Message was sent Succesfully!";
            
  } 
    
    else{
        echo"Your Message couldn't be send"; 
        }
                                    
    }

    

mysqli_close($conn);


?>