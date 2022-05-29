<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page </title>
</head>
 
<body>
    <center>
        <?php
 
        $conn = mysqli_connect("localhost", "root", "", "admitkard");
         
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $contact =  $_REQUEST['contact'];
        $course = $_REQUEST['course'];
        $country = $_REQUEST['country'];
        $dob = $_REQUEST['dob'];
        $insert_string = '';
         
        foreach ((array) $country as $value) {
            $insert_string .= $value .", ";
        }
        $sql = "INSERT INTO admitkard  VALUES ('$name',
            '$email','$contact','$course','$insert_string ,'$dob')";      
        if(mysqli_query($conn, $sql)){
 
            echo "Done";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 