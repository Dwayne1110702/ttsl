<?php
    include("database.php");
    if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from users where email ='$email' and password = '$password' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count==1){
        header("Location: menu.php" );

    }else{
        echo '<script>
        window.location.href = "index.php";
        alert("Login Failed. Invalid Email or Password or not Registered")
        </script>';
    }


}

?>