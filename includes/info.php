<?php
    include_once 'database.php';
    include_once 'headerInside.php';
    $qry = "select * from subject";
    $result = mysqli_query($conn,$qry);
?>
<html>
    <head>
        <title>Info of SM University</title>
        <link rel="stylesheet" href="../css/info.css">
    </head>
    <body>
        <?php while($subject = mysqli_fetch_assoc($result)){?>
            <div class="col-sm-6" id="info">
                <h3><?php echo $subject["sub_name"]?></h3>
                <p><?php echo "Subject ID: ".$subject["sub_id"]?></p>
                <p><?php echo "Subject Credit: ".$subject["sub_credit"]?></p>
                <p><?php echo "Depertment ID: ".$subject["dept_id"]?></p>
            </div>
        <?php }?>
    </body>
    <?php
        include_once 'footer.php';
    ?>
</html>
