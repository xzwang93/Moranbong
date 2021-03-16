
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Biography</title>
		<link href = "../css/general.css" rel = "stylesheet" type = "text/css">
</head>


<body>
<!-- <?php include('../php/page_2_php.php') ?> 


<script>
    var arrayObjects = <?php echo $json_array; ?>
</script>
-->


<div class= "navibar">
	<div class="logo">
		<p> Moranbong Band </p>
	</div>

	<div class= "pages">
		<ul>
			<li><a href = "page_4.php"> Mini Game </a></li>
			<li><a href = "page_3.php"> Latest Video </a></li>
			<li><a href = "page_2.php"> Disgraphy </a></li>
			<li><a href = "page_1.php"> Biography </a></li>
			<li><a href = "../index.php"> Home </a></li>
		</ul>
	</div>
</div>


<div class= "section-1-0">
	<div class = "box1">
		<div class= "title">
			<h1> Songs for a better tomorrow! </h1>
			<div class= "buttons">
				<button type="button" onclick="button_year_sort()">By Year</button> 
				<button type="button" onclick="button_name_sort()">By Name</button> 
			</div>
		</div>
		<div class = "table">
			<table id = "album_table">
  				<tr>
			    <th>Name</th>
			    <th>Year</th>
    			<th>Cover Art</th>
 				</tr>
  				
				</table>
		</div>

<!--		<div class = "title">
		<h1>Add Album Here</h1>
		<form  action="page_2_thank_you.php" method="post" enctype="multipart/form-data"> 
 	 	 Name:<br/> <input type="text" name="name" value="<?php echo $name;?>">
		   <br/><br/>	
		   Year:<br/> <input type="text" name="year_album" value="<?php echo $year_album;?>">
 		  <br/><br/>
 		  Cover:<br/> <input type="file" id='file' name='file' />
 		  <br/><br/>
		 <input type="submit" name="submit" value="Submit"> 
		</form>
-->
		</div>
	</div>
</div>



<script src='../javascript/album_sorting.js' type="text/javascript"></script>



<div class= "footer">
	<div class="logo">
		<p> Wang </p>
		<p> Copyright 2021 </p>
	</div>

	<div class= "pages">
		<ul>
		<li><a href = "https://www.facebook.com/MoranbongBand/"> Facebook </a></li>
		<li><a href = "https://en.wikipedia.org/wiki/Moranbong_Band"> Wikipedia </a></li>
		<li><a href = "https://kprofiles.com/moranbong-band-members-profile/"> Kpop Fansite </a></li>
		</ul>
	</div>
	<div class="empty-for-now">
	</div>	
</div>

</body>

</html>
