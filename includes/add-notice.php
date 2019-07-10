<head>
<style>
        .btn-info {
        color: #fff;
        background-color: #000 !important;
        border-color: #000 !important;
        }
        textarea {
            width: 100%;
  height: 150px;
    resize: vertical;
}

    </style>
</head>
<?php 
include_once('database.php');
include_once 'admin-header.php';

if(isset($_POST['save'])){
    $id =$_POST['id'];
    $name =$_POST['name'];
    
    
  $query= "INSERT INTO notice(topic, content) VALUES('$id','$name')";
  // exit();
    $last= mysqli_query($conn,$query);
    if($last){
        echo "<script>window.location='notice-list.php'</script>";
    } else{
        echo "Something went wrong";
    }

}
    
?>
<div class="container" style="height:500px;">
<br></br>
<a href="notice-list.php" class="btn btn-info">Previous Notice</a>
<form class="form-group" method="post" >
    <div class="row"  style="font-size:16px; margin-top:30px">
        <div class="col-lg-6">
            <label>Notice Title : </label>
            <input type="text" name="id" id='id' class="form-control" />
        </div>  
        <div class="col-lg-12" style="margin-top:20px">
            <label>Description : </label><br>
            <!-- <input type="text" name="name" id='name' class="form-control" /> -->
            <textarea name="name" ></textarea>
        </div>        

        
        
             
    </div>
    <div class=".btn-info"><br>
            <input type="submit" name="save" value="Save" class='btn btn-info' />
        </div>  
</form>
</div>