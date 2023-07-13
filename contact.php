<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $con = new mysqli('localhost', 'root','root','contactme');
    if($con->connect_error){
        die('Connection Failed: '.$con->connect_error);
    }else{
    $stmt = $con->prepare("insert into contactme(name, email,message)
             values(?,?,?)");
             $stmt->bind_param("sss",$name,$email,$message);
             $stmt->execute();
             echo "Thanks for your message!";
             $stmt->close();
             $con->close();

}

?>