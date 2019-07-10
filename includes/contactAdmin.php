<?php
include_once('database.php');
include_once 'admin-header.php';


/* ----- RECORD/DELETE ----------------*/
if (isset($_REQUEST['act']) && $_REQUEST['act'] == 'del') {
    $nid = $_REQUEST['nid'];
   echo  $query = "DELETE FROM contact WHERE coId = $nid";
    $rec = mysqli_query($conn, $query);
    if ($rec) {
        echo "<script>window.location='contactAdmin.php'</script>";
    } else {
        echo "Something went Wrong";
    }
}



?>
<head>
    <style>
        .btn-info {
        color: #fff;
        background-color: #000 !important;
        border-color: #000 !important;
        }
    </style>
</head>
<div class="container" style="font-size: 14px; margin-top: 20px;margin-bottom: 20px">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered" style width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        
                        <th colspan="2" style = "text-align:center;"
                        </th>Action</th>
                    </tr>
                </thead>
                <?php
                //echo "<pre/>";
                $query = "SELECT * FROM contact" ;
                
                //$res=mysqli_query($conn,$q);

                $result = mysqli_query($conn, $query);
                //$student = mysqli_fetch_assoc($result);
                //$sn=1;
                while ($subject = mysqli_fetch_assoc($result)){// $department = mysqli_fetch_assoc($res)) {
                    //print_r($student);
                    ?>
                    <tr>
                        
                        <td><?php echo $subject['name']; ?></td>
                        <td><?php echo $subject['emai']; ?></td>
                        <td><?php echo $subject['subject']; ?></td>
                        
                        <td>
                            <a
                                style="color:DarkCyan" href="mailAdmin.php?coId=<?php echo $subject['coId']?>">Reply
                            </a>
                        </td>
                        <td>
                            <a style="color:brown" title="Delete"  href="contactAdmin.php?act=del&nid=<?php echo $subject['coId'] ?>">Delete
                            </a>
                        </td>
                    </tr>
                <?php
                //$sn++;
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php 
include_once('footer.php');
?>
