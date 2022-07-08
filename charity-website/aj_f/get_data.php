<?php
//if(isset($_POST ['name'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    

    // Database connection
     $conx=mysqli_connect("localhost", "root", " ", "charity");

     if($conx->connect_error){
         die('Failed : ' .$conx->connect_error);
     } else{
         $stmt = $conx->prepare("insert into donation(name, email, gender) values(?, ?, ?)");
         $stmt->bind_param("sss",$name, $email, $gender);
         $stmt->execute();
         echo "<h3>Thank You...!</h3>";
         $stmt->close();
         $conx->close();
     }
     
     //$sql="INSERT INTO `donation`(`Name`, `Email`, `Amount`) VALUES ('$name','$email')";

     //$result=mysqli_query($conx,$sql);

     //if($result==true) {
      //   echo "<h3>Thank You...!</h3>";
     //}
//}
?>