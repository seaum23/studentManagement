<?php 
include_once('database.php');
include_once 'admin-header.php';

$qry = "select * from about";
$result = mysqli_query($conn,$qry);
$about = mysqli_fetch_assoc($result);

if(isset($_POST['save'])){
    $name =$_POST['content'];
    $query= "UPDATE `about` SET `content` = '$name' where aboutid = 1";
    // exit();
    $last= mysqli_query($conn,$query);
    if($last){
        echo '<script> alert("Updated"); </script>';
        echo '<script> window.location="adminAbout.php" </script>';
    }else{
        echo "<script>Something went wrong</script>";
    }
}
    
?>
<script>
    function validateForm() {
        var x = document.getElementById('content').value;
        if (x=="") {
            alert("Enter all info");
            return false;
        }else{
            return true;
        }
    }
</script>
<style>
        .btn-info {
        color: #fff;
        background-color: #000 !important;
        border-color: #000 !important;
        }
</style>
<div class="container" style="margin-top:25px;">
<form class="form-group" method="post" style="font-size: medium">
    <div class="row">
        <div class="col-lg-6">
            <label>Update About us: </label>
            <textarea  rows="10" cols="80" name="content" class="form-control" /><?php echo $about['content']?></textarea>
        </div>
        <div class="col-lg-11"><br>
            <input type="submit" name="save" value="Update" class='btn btn-info' onclick="return validateForm()"/>
        </div>       
    </div>
</form>
</div>

