<?php
include_once 'admin-header.php';

$conn = mysqli_connect('localhost','root','','std_mng');
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}
if(isset($_REQUEST['act']) && $_REQUEST['act']='del')
{
    $id = $_REQUEST['id'];
    $query = "DELETE FROM a WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if ($result)
    {
        echo "<script>window.location='account-list.php'</script>";
    }
 else {
        echo 'Something went wrong!';
    }
}
?>

<style>
    #th1{
        font-weight: bold;
        font-size: 20px;
    }
</style>
<link href="bootstrap.min.css" rel="stylesheet">
    <body">
        <div class="container">
            <h4 style="text-align: center; padding-bottom: 20px; text-decoration: underline; ">
                            Account </h4>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <thead id="th1">
                    <tr>
                <td>Name</td>
                <td>Email Address</td>
                <td>Phone Number</td>
                <td colspan="2" style="text-align: center">Action</td>
                    </tr>
                </thead>
                <?php
                $query = "SELECT id,name,email,phno FROM a ORDER BY name";
                $result = mysqli_query($conn,$query);
                while($student= mysqli_fetch_assoc($result)){?>
                <tr style="font-size:14px">
                    <td><?php echo $student['name']; ?></td>
                    <td><?php echo $student['email']; ?></td>
                    <td><?php echo $student['phno']; ?></td>
                    <td><a style="color:DarkCyan" href="account-edit.php?id=<?php echo $student['id']?>">Edit</a></td>
                    <td><a style="color:brown" href="account-list.php?id=<?php echo $student['id']?>&act=del">Delete</a></td>
                </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
    </body>

