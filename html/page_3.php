
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Biography</title>
		<link href = "../css/general.css" rel = "stylesheet" type = "text/css">
</head>


<body>
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
			<h1> Our Showtime! </h1>
		</div>
		<div class="video">
			<video class="video-container" width="480" height="360">
				<source src="../video/Tansume.mp4" type="video/mp4">
				<source src="../video/Tansume.ogg" type="video/ogg">
				<source src="../video/Tansume.webm" type="video/webm">
			</video>
		</div>
		<div class= "buttons">
				<button id="play_button" onclick="video_opener()">Let Us Sing For You</button> 
		</div>
</div>

<script>
play_or_pause = 0;

function video_opener(){
	video = document.querySelector(".video-container");
	if(play_or_pause == 0){
		play_or_pause = 1;
		video.play();
		document.getElementById("play_button").innerHTML = "Want a break?";
	}
	else{
		video.pause();
		play_or_pause = 0;
		document.getElementById("play_button").innerHTML = "The Fun Continues";
	};
};



</script>



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
