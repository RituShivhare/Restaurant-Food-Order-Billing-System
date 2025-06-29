<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from login where username = '$username' and password = '$password'";
         header("Location:welcome.php");
        }
        else{
            echo '<script>
                window.location.href = "index.php";
                
            </script>';
        }
    
?>
