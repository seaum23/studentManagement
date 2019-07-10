<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
    .th1{
        font-weight: bold;
        font-size: 20px;
    }
    td{
        text-align: center;
    }
    .btn-info {
    color: #fff;
    background-color: #000 !important;
    border-color: #000 !important;
    }
</style>
    
    <?php
include_once 'database.php';
include_once 'admin-header.php';
$count = 1;
if(isset($_POST['save'])){
    $id=$_POST['stdid'];
    $subname=$_POST['sub'];
    $gpa=$_POST['gpa'];
    $grade=$_POST['grade'];
    $q ="select rt_id from gradedetails where id=$id and rt_id='$subname'";
    $r = mysqli_query($conn,$q);
    $l = mysqli_fetch_assoc($r);
    if(count($l)<=0){
        $query="INSERT INTO gradedetails(rt_id,gpa,grade,id) VALUES ('$subname',$gpa,'$grade',$id)";
        $result=mysqli_query($conn,$query);
        if($result){
           echo "<script>window.location='gradeform.php'</script>";
        }
        
    }
    else{
            echo "<script>alert('Already Enrolled');</script>";
            echo "<script>window.location='gradeform.php'</script>";
        }

}

if(isset($_REQUEST['act']) && $_REQUEST['act']='del'){
    $id= $_REQUEST['rt_id'];
    $query= "DELETE FROM gradedetails WHERE rt_id = $id";
    $rec = mysqli_query($conn,$query);
    if($rec){       
     echo"<script>window.location='gradeform.php'</script>";
    }
    else{
        echo"problem";
    }
}


function  getSubject($conn,$subid){
   $query= "SELECT sub FROM routine WHERE rt_id='$subid'";
   $zone= mysqli_query($conn,$query);
   $sub = mysqli_fetch_assoc($zone);
   return $sub['sub'] ;
   
}
?>
<div class="container" style="font-size:14px">
    <form method="post">
        <div class="row">
            <div class='col-lg-6'>
                <br><label> Student Name :</label>
                <div>
                    <select id="stdid" name="stdid">
                        <?php
                        $query = "SELECT id, name FROM a";
                        $result = mysqli_query($conn,$query);
                        ?> <option value="">--Select Name--</option>
                                        <?php
                        while($student= mysqli_fetch_assoc($result)){?>
                        <option value="<?php echo $student['id']; ?>"><?php echo $student['name']; ?></option>;
                                <?php
                        }
                        ?>
                </select>
                </div>
            </div>
	    <br>

            <div class='col-lg-6'>
            <label> Subject Tittle : </label> 
              <select id="sub" name="sub">
                        <option value="">--subjects--</option>;
                </select>

            </div><br>
            <div class='col-lg-6'>
                <label> GPA  : </label> <input type="number" step="0.01" class="form-control" id="gpa" name="gpa">
            </div>
            <div class='col-lg-6'>
                <label> Grade :</label> <input type="text" class="form-control" id="grade" name="grade">
            </div>
            <div class='col-lg-6'>
                <input type="submit" id="save"  name="save"  class="btn btn-info center" onclick="validation()">
            </div>
        </div>
    </form>
</div>
<div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
            <td>Name</td>
            <td>Subject Name</td>
            <td>GPA</td>
            <td>GRADE</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
		<?php
		$query   = "SELECT a.name, gradedetails.id,gradedetails.rt_id,gradedetails.gpa,gradedetails.grade FROM gradedetails INNER JOIN a ON gradedetails.id=a.id";
		$result  = mysqli_query( $conn, $query );

		while( $student = mysqli_fetch_assoc( $result ) ) {
			?>
            <tr>
                <td><?php echo $student['name'] ?></td>
                <td><?php echo getSubject($conn,$student['rt_id']); ?></td>
                <td><?php echo $student['gpa']; ?></td>
                <td><?php echo $student['grade']; ?></td>
                <td><a style="color:DarkCyan" href="admin_gradeshow.php?rt_id=<?php echo $student['rt_id']?>">Edit</a></td>
                <td><a style="color:brown" href="gradeform.php?rt_id=<?php echo $student['rt_id']?>&act=del">DELETE</a></td>
            </tr>
			<?php
		}
		?>
        </tbody>
    </table>
</div>
<script>
    function validation(){
        var subname = document.getElementById('sname').value;
        var gpa = document.getElementById('gpa').value;
        var grade = document.getElementById('grade').value;
        if (subname==""){
            alert("subname is must");
            return false;
        }
        if (gpa==""){
            alert("gpa is must");
            return false;
        }
        if (grade==""){
            alert("grade is must");
            return false;
        }
    }
</script>
<script>
$(document).ready(function(){
	$("#stdid").change(function(){
		$cid= $(this).val();
		$.ajax({
			type: "POST",
			url: 'functions.php',
			data: 'cid='+$cid,
			success: function(data){
				//alert(data);
				$("#sub").html(data);
			}
		});
	});

});
</script>










