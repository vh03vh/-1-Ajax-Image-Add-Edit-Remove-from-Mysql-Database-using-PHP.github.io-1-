<?php
include("connect.php");
?>
<link rel="stylesheet" href="style.css" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<div id="content">
 <?php
 include('upload.php');
 $result=mysqli_query($conn,"SELECT*FROM videos");
 while($row=$result->fetch_array()){?>
<div id="video_player_box"> 
  <video id="video" width="300" height="200" controls>
  <source src="<?php echo 'videos/'.$row['name'];?>" type="video/<?php echo $row['type'];?>">
    Your browser does not support the video tag.
</video>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="right"> 
  <a href="index.php"><button type="button" name="image" id="image" class="btn btn-success">Image</button></a>
   
    <a href="index3.php"><button type="button" name="File" id="File" class="btn btn-success">File</button></a>
   
   <a href="index1.php"><button type="button" name="video" id="video" class="btn btn-success">Video</button></a>
 </div>
 
  <?php }?>
  </div>