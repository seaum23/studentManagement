<?php 
include_once('database.php');
include_once 'admin-header.php';

if(isset($_POST['save'])){
    $id =$_POST['id'];
    $name =$_POST['name'];
    $credit =$_POST['credit'];
    $deptid =$_POST['dept'];
    
  $query= "INSERT INTO subject(sub_id, sub_name, sub_credit, dept_id) VALUES($id,'$name', $credit,'$deptid')";
  // exit();
    $last= mysqli_query($conn,$query);
    if($last){
        echo "<script>window.location='subject-list.php'</script>";
    } else{
        echo "Something went wrong";
    }

}
    
?>
<style>
        .btn-info {
        color: #fff;
        background-color: #000 !important;
        border-color: #000 !important;
        }
</style>
<div class="container" style="height:500px;">

<!-- <a href="student-list.php" class="btn btn-info">Student List</a> -->
<a href="subject-list.php" class="btn btn-info" style="margin-top: 10px; margin-bottom: 10px">Subject List</a>

<form class="form-group" method="post" style="font-size: medium">
    <div class="row">
        <div class="col-lg-6">
            <label>Subject ID : </label>
            <input type="number" name="id" id='id' class="form-control" />
        </div>  
        <div class="col-lg-6">
            <label>Subject Name : </label>
            <input type="text" name="name" id='name' class="form-control" />
        </div>        
        <div class="col-lg-6">
            <label>Total Credit : </label>
            <input type="text" name="credit" id='age' class="form-control" />
        </div>
        <div class="col-lg-6">
            <label>Department ID : </label>
            <input type="text" name="dept" id='contact' class="form-control" />
        </div>
        
        <div class="col-lg-11"><br>
            <input type="submit" name="save" value="Save" class='btn btn-info' />
        </div>       
    </div>
</form>
</div>