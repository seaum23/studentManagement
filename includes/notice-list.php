<?php
include_once('database.php');
include_once 'admin-header.php';


/* ----- RECORD/DELETE ----------------*/
if (isset($_REQUEST['act']) && $_REQUEST['act'] == 'del') {
    $nid = $_REQUEST['nid'];
   echo  $query = "DELETE FROM notice WHERE nid = $nid";
    $rec = mysqli_query($conn, $query);
    if ($rec) {
        echo "<script>window.location='notice-list.php'</script>";
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
<div class="container" style="font-size: 14px">
    <div class="row">
        <div class="col-lg-12">
            <br><a href="add-notice.php" class="btn btn-info">Add New </a><br/><br>
            <table class="table table-bordered" style width="100%">
                <thead>
                    <tr>
                       
                        <th>Notice Title</th>
                        <th>Content</th>
                        
                        <th colspan="2" style = "text-align:center;"
                        </th>Action</th>
                    </tr>
                </thead>
                <?php
                //echo "<pre/>";
                $query = "SELECT nid,topic,content FROM notice order by nid desc" ;
                
                //$res=mysqli_query($conn,$q);

                $result = mysqli_query($conn, $query);
                //$student = mysqli_fetch_assoc($result);
                //$sn=1;
                while ($subject = mysqli_fetch_assoc($result)){// $department = mysqli_fetch_assoc($res)) {
                    //print_r($student);
                    ?>
                    <tr>
                        
                       <!--  <td><?php //echo $subject['nid']; ?></td> --> 
                        <td><?php echo $subject['topic']; ?></td>
                        <td><?php echo $subject['content']; ?></td>
                        
                        <td>
                            <a
                                 style="color:DarkCyan" href="edit-notice.php?nid=<?php echo $subject['nid']?>">Edit
                            </a>
                        </td>
                        <td>
                            <a style="color:brown" title="Delete"  href="notice-list.php?act=del&nid= <?php echo $subject['nid'] ?>">Delete
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