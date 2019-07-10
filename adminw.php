<html> 
<?php
include 'adminheader.php';
include_once 'includes/database.php';
session_start();
?>
<head>
    <script>
        function validateForm() {
            var x = document.getElementById('mail').value;
            var x = document.getElementById('pass').value;
            if (x=="") {
                alert("Enter all info");
                //return false;
            }else{
                //return true;
            }
        }
    </script>
</head>
<?php
    if(isset($_SESSION['adminMail'])===True){
        header("Location: index.php");
    }
?>
<body style="text-align:center;  ">
    <h2 style="margin-top:85px; margin-bottom:20px">Admin Login</h2>
    <form method="POST" style="font-size:14px; margin-bottom:100px ">
        <input type="text" name="mail" id='mail' placeholder="Enter admin email"><br><br>
        <input type="password" name="pass" id='pass' placeholder="Enter password"><br><br>
        <input class="btn btn-info center" style="background-color:rgba(0,0,0,0.8)" type="submit" id="save" name="save" onclick="validateForm()">
    </form>
    <?php
    if(isset($_POST['save'])){
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $qry = "select adminid,name from admin where email = '$mail'";
    $adminResult = mysqli_query($conn,$qry);
    $admin = mysqli_fetch_assoc($adminResult);
    if(count($admin) > 0){
        $_SESSION['adminid']=$admin['adminid'];
        $_SESSION['adminMail']=$mail;
        $_SESSION['adminPass']=$pass;
        $_SESSION['adminName']=$admin['name'];
        header("Location: includes/admin-page.php");
    }else{
        echo '<script>alert("Insert Proper Information")</script>';
    }
    }
    ?>
</body>
<?php
  include_once 'includes/footer.php';
?>
</html>
