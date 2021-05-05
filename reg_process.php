<!DOCTYPE html>
<html lang="en-us">

<head>
  
	<title>MWE | Register</title>
    
</head>

<body>
    <?php
        // echo $_POST['input_name'];
        // echo '<br>';
        // echo $_POST['input_nric'];
        
        if (file_exists($_POST['input_nric'] . '.txt')){     //Check for filename with given nric
            echo '<h3>You are already registered!</h3>';
        }
        else{   //filename not found, write to file
            
           $content_to_write = "Name: " . $_POST['input_name'] . "\n";
           $content_to_write .= "NRIC: " . $_POST['input_nric'] . "\n";
           file_put_contents($_POST['input_nric'] . '.txt', $content_to_write);
           echo '<h3>Registration is successful!</h3>';
           echo '<a href ="home.html">Back T0 Home here</a>';
        }

    ?>
   
</body>
</html>