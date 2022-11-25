<!DOCTYPE html>
<html>
<head>
<title>How to Download File using PHP/MySQLi</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
</head>
<body>
	<h2>Sample Images</h2>
	<table border="1">
		<thead>
			<th>File Location</th>
			<th>Action</th>
		</thead>
		<tbody>
		<?php
			include('connect.php');
 
			$query=mysqli_query($conn,"select * from file");
			while($row=mysqli_fetch_array($query)){
				?>
					<tr>
						<td><?php echo $row['file_location']; ?></td>
						<td><a href="download.php?file=<?php echo urlencode($row['file_location']); ?>">Download</a></td>
					</tr>
				<?php
			}
		?>
		</tbody>
	</table>
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
</body>
</html>
