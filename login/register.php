<?php 
session_start();
include("connect.php");

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $passwordd=$_POST['passwordd'];
    $password=md5($password);
    $passwordd=md5($passwordd);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $password=$_POST["password"];
        $passwordd=$_POST["passwordd"];

        if($password == $passwordd){
            $checkEmail="SELECT * From users where email='$email'";
            $result=$conn->query($checkEmail);
            if($result->num_rows>0){
               header("location: indexhatalı1.php");
            }
            else{
            $checkfirstName="SELECT * From users where firstName='$firstName'";
            $result=$conn->query($checkfirstName);
            if($result->num_rows>0){
                header("location: indexhatalıad.php");
             }
             else{
                $insertQuery="INSERT INTO users(firstName,email,password) VALUES ('$firstName','$email','$password')";
                    if($conn->query($insertQuery)==TRUE){
                        header("location: index.php");
                    }
                    else{
                        echo "Error:".$conn->error;
                    }
                 }
            }
        }
        else{
            header("location: indexhatalısifre.php");
        }
    }
}

if(isset($_POST['signIn'])){
    $firstName=$_POST['fName'];
    $password=$_POST['password'];
    $query = "SELECT * FROM users WHERE firstName='$firstName' AND password='$password'";
    $result = $conn->query($query);

    if($result->num_rows == 1){
        header("location: hhomepage.php");
        exit();
    }
    else{
        header("location: indexhatalı.php");
    }
    $conn->close();
}

?>