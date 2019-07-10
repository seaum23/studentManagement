<?php
    include_once 'database.php';
    include_once 'headerInside.php';
    $qry = "select nid,topic,content,curtime from notice order by nid desc limit 3";
    $qry2 = "select nid,topic,content,curtime from notice order by nid desc";
    $result = mysqli_query($conn,$qry);
?>
<html>
    <head>
        <title>Notice of SM University</title>
        <link rel="stylesheet" href="../css/info.css">
    </head>
    <body >
    	<h2 style="text-align:center; margin-top:30px; color:black">NOTICE</h2>
          <div class="container">
      <div class="row">
          
          <div class="col-lg-8" style="margin-bottom: 3px;">
          <div class="accordion">
            <dl>
              <dt>
              </dt>
        <?php while($subject = mysqli_fetch_assoc($result)){?>
            <dd style="background: #f4f4f4; width: 100%">
            <br><br><div class="col-sm-12" id="info">
                <h3><?php echo $subject["topic"]?></h3>
                <p style="font-size:13px">
                    <?php echo "Published Date: ".$subject["curtime"]?>
                    <?php echo $subject["content"]?>
                </p>
            </dd>
         
        <?php }?>
            </dl>
</div>
            </div>
         
           <div class="col-lg-4">
               <div class="accordion">
           
            <dl style="background: #f4f4f4;padding: 2%;">
                <marquee style="max-height: 400px" direction = "up" onmouseover="this.stop();" onmouseout="this.start();">
                     <?php 
                   $topic = mysqli_query($conn,$qry2);
                     while($news = mysqli_fetch_assoc($topic)){
                        
                         ?>
              <dd style="padding: 2%; font-size: 15px">
                  <strong><a href="notice2.php?id=<?php echo $news['nid']?>"> <?php echo $news["topic"]?></a></strong>
           
              </dd>
            <?php }?>
               </marquee>
            </dl>
              
          </div>
          </div>
      </div>
          
           </div>
              
    </body>
    <?php

        include_once 'footer.php';
    ?>
</html>
