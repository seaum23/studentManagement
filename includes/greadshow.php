<?php
include_once( 'database.php' );
include_once 'dashHead.php';
$sid=$_REQUEST["stdid"] ;
$id = $sid;
include_once 'sidebar.php';
function  getSubject($conn,$subid){
   $query= "SELECT sub FROM routine WHERE rt_id='$subid'";
   $zone= mysqli_query($conn,$query);
   $sub = mysqli_fetch_assoc($zone);
   return $sub['sub'] ;
   
}
?>
<head>
    <link rel="stylesheet" href="../css/header.css">
</head>
<div class="container" style="font-size:14px; font-weight:bold">
<table class="table table-hover">
    <thead>
    </thead>
    <tbody>
        
        <?php
        $query   = "SELECT name FROM a where id= $sid";
        $result  = mysqli_query( $conn, $query );
        $name= mysqli_fetch_assoc( $result )
        ?>
        <h3>    <?php echo $name['name']?>'s gradesheet</h3><br>
	<?php 
	$query   = "SELECT * FROM gradedetails where id= $sid";
        $query1   = "SELECT * FROM gradedetails where id= $sid";
        $result = mysqli_query( $conn, $query );
	$result1  = mysqli_query( $conn, $query1 );
        $std1 = mysqli_fetch_assoc( $result1 );
        if(count($std1)<=0){
            echo '<strong> No Course Has been completted</strong>';
            exit();
        }
        ?>
        <tr>
        <td>Id</td>
        <td>Subject Name</td>
        <td>GPA</td>
        <td>GRADE</td>
        </tr>
        <?php
	while( $student = mysqli_fetch_assoc( $result ) ) {
	?>
        <tr style="font-size:14px; font-weight:normal">
            <td><?php echo $student['id']; ?></td>
            <td><?php echo getSubject($conn,$student['rt_id']); ?></td>
            <td><?php echo $student['gpa']; ?></td>
            <td><?php echo $student['grade']; ?></td>
        </tr>
	<?php
	}
	?>

    </tbody>

</table>
</div>