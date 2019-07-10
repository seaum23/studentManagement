<?php
include_once('database.php');
include_once('headerInside.php');


if (isset($_REQUEST['subjectid'])) {
    $subjectid = $_REQUEST['subjectid'];
    $query = "SELECT * FROM subject WHERE sub_id =$subjectid";
    $result = mysqli_query($conn, $query);
    $subject = mysqli_fetch_assoc($result);
    //print_r($student);
    $id = $subject['sub_id'];
    $name = $subject['sub_name'];
    $credit = $subject['sub_credit'];
    $deptid = $subject['dept_id'];
} else {
    $id = "";
    $name = "";
    $credit = "";
    $deptid = "";
}

if (isset($_REQUEST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $credit = $_POST['credit'];
    $deptid = $_POST['deptid'];

    echo $query = "UPDATE subject SET sub_id='$id', sub_name='$name', sub_credit='$credit' WHERE sub_id= $id";
    $last = mysqli_query($conn, $query);
    if ($last) {
        echo "<script>window.location='subject-list.php'</script>";
    } else {
        echo "Something went Wrong";
    }
}
?>


<div class="container" style="height:500px;">

    <a href="subject-list.php" class="btn btn-info">Subject List</a>
    <form class="form-group" method="post" >
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="row">
                 
            <div class="col-lg-6">
                <label>Subject Name : </label>
                <input type="text" name="name" id='name' value="<?php echo $name ?>" class="form-control" />
            </div>
            <div class="col-lg-6">
                <label>Total Credit : </label>
                <input type="number" name="credit" id='credit' value="<?php echo $credit ?>" class="form-control" />
            </div>
            <div class="col-lg-6">
                <label>Department ID: </label>
                <input type="text" name="deptid" id='deptid' value="<?php echo $deptid ?>" class="form-control" />
            </div>
            <div class="col-lg-11">
                <input type="submit" name="update" value="Update" class='btn btn-info' />
            </div>       
        </div>
    </form>
</div>
<?php
include_once('./includes/footer.php');
?>