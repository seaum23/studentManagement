<?PHP
    session_start();
    include 'headerInside.php';
    include 'database.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <!-- start plugins -->
        <script type="text/javascript" src="./js/jquery.min.js"></script>
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        <script type="text/javascript" src="./js/bootstrap.min.js"></script>
        
        

        <script type="text/javascript" src="./js/modernizr.custom.28468.js"></script>
        <script type="text/javascript" src="./js/jquery.cslider.js"></script>
        
        
        <link rel="stylesheet" href="../css/admission.css">

        <title>Admission</title>
        
        <script>
            function show(id){
              document.getElementById(id).style.display = 'block';  
            }
            
        </script>
        
        
        <!-- Owl Carousel Assets -->
	<link href="../css/owl.carousel.css" rel="stylesheet">
	<script src="../js/owl.carousel.js"></script>
	<script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items : 4,
                lazyLoad : true,
                autoPlay : true,
                navigation : true,
                navigationText : ["", ""],
                rewindNav : false,
                scrollPerPage : false,
                pagination : false,
                paginationNumbers : false,
            });

        });
	</script>
	<!-- //Owl Carousel Assets -->
        
        
        
    </head>
    <body>
        
        <?php
            $qry = "select dept_name, dept_loc from department";
            $result = mysqli_query($conn,$qry);
        ?>
        
        <header >
            <h1 style="text-align: center;">Admission</h1>
        </header>
        <div class="containerTemp" style="max-width: 100%">
            <div class="description">
                <p>International Institute of Emerging Sciences is one of the top university of Bangladesh. We offer top quality educational facilities. We have qualified faculties and they are 
                at all time available for students for any of their qurey. </p>
            </div>
            <hr class="hr">
            <div><h3 style="text-align: center">Courses that we offer.</h3></div>
            <div id="owl-demo" class="owl-carousel text-center">
                <?php
                    while ($dept = mysqli_fetch_assoc($result)){
                ?>
                <div class="item" id="insideCourse" style="background-color: #f4f4f4">
                            <div class="cau_left">
                                <?php
                                    echo "<h4><a href='info.php'>".$dept["dept_name"]."</a></h4>";
                                    echo "<p>Department Location ".$dept["dept_loc"]."</p>";
                                ?>
                            </div>
                    </div>
                <?php
                    }
                ?>	
            </div>

            
            <div class="underGrad" style="height: 150%;">
                <hr class="hr">
                <header ><h1 style="text-align: center; margin-top: 15px;">Undergraduate Admission</h1></header>
                <div class="row">
                    <div class="col-sm-7" style="background: #f4f4f4; position: relative; margin-top: 5%; margin-left: 5%;">
                        <div class="inside" style="padding: 32px; font-size: 15px">
                            <h3>Admission</h3>
                            <p style="padding-right: 25%;">
                                <br>We offer on of the most recognized and reputed undergraduate degree in various subjects. A freshman class of about 1,700 students 
                                and a transfer class of about 30 students are admitted each year. Stanford reviews each applicant with an eye to academic excellence, 
                                intellectual vitality and personal context.
                            </p>
                        <div>
                            <span class="admisFake" onclick="show('admisU')" style="color: #694749">Undergraduate Admission <i class="fa fa-angle-double-right"></i></span>
                        </div>
                        <div class="list-group col-sm-4" id="admisU" style="display: none; margin-top: 3px">
                            <a href="info.php" class="list-group-item" style="color: #694749">Info</a>
                            <?php if(isset($_SESSION['uid']) === false){?>
                                <a onclick="goto()" class="list-group-item" style="color: #694749">Apply for exam</a>
                            <?php
                            
                            }else{}?>
                        </div>
                        </div>
                    </div>
                    <div style="position: absolute; margin-left: 50%;">
                        <img src="../css/images/xm_2.jpg" id="xm_img" style="float: right">
                    </div>
                </div>
            </div>
            <div class="postGrad" style="height: 150%;">
                <hr class="hr">
                <header ><h1 style="text-align: center; margin-top: 15px;">Postgraduate Admission</h1></header>
                <div class="row">
                    <div class="col-sm-6" style="position: absolute;margin-left: 2%;"  >
                        <img src="../css/images/xm.jpg" id="xm_img">
                    </div>
                    <div class="col-sm-6" style="background: #f4f4f4; position: relative; margin-top: 8%; margin-left: 30%; ">
                        <div class="inside" style="padding: 32px; font-size: 15px">
                                <h3>Admission</h3>
                                <p style="padding-right: 25%;">
                                    <br>More than 65 departments and programs offer graduate and professional degrees at Stanford. Admission requirements vary 
                                    greatly among them. We offer on of the most recognized and reputed postgraduate degree in various subjects. 
                                </p>
                                
                                <div> <span class="admisFake" onclick="show('admisP')" style="color: #694749">Postgraduate Admission <i class="fa fa-angle-double-right"></i></span> </div>
                                    <div class="list-group col-sm-4" id="admisP" style="display: none; margin-top: 3px">
                                      <a href="info.php" class="list-group-item" style="color: #694749">Info</a>
                                      <?php if(isset($_SESSION['uid']) === false){?>
                                      <a onclick="goto()" class="list-group-item" style="color: #694749">Apply for exam</a>
                                      <?php
                                      }else{
                                          
                                      }
                                      ?>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="finance_aid" style="height: 150%;">
                <hr class="hr">
                <h2 style="text-align: center;padding: 2%;">Financial aids</h2>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="card">
                        <div class="card-block" style="background-color: #f4f4f4;">
                          <h3 class="card-title" style="text-align: center">Upto 100%</h3>
                        <p class="card-text" style="text-align: center; font-size: 15px">We offer different scholarship program for those who are financially challenged. We offer scholarship for 
                            those whose parents earn less then &dollar;3000</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card">
                        <div class="card-block" style="background-color: #f4f4f4;">
                          <h3 class="card-title" style="text-align: center">Full Free</h3>
                        <p class="card-text" style="text-align: center; font-size: 15px">Those who have the potential and the passion to pursue higher education but can not afford the 
                        expenses of university fee wee offer full free scholarship.</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <script>
            function goto(){
                alert("You need to signup first!!!");
                window.location.href='login.php';
            }
        </script>
    </body>
    
    <?php
        include_once 'footer.php';
    ?>
</html>
