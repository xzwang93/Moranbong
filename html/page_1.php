
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
			<h1> Let us tell you our stories </h1>
		</div>
		<div class= "article-1">
			<p> The Moranbong Band is an all-female music group in North Korea whose original members were selected by the country's supreme leader Kim Jong-un. Performing interpretive styles of pop, rock, and fusion, they are the first all-female band from the DPRK, and made their world debut on July 6, 2012. </p>
			<div class= "graph">
				<img src="../images/biography_1.jpg" alt="The Band" width="400" height="220">
			</div>
			<p> In December 2015, Kim Jong-un sent the band to perform in a series of shows in Beijing to improve relations between China and North Korea; these would have been the band's first performances outside of North Korea.However, the band left Beijing on a scheduled flight to Pyongyang only a few hours before their performance was scheduled. China's Xinhua news agency stated that all of the band's performances had been cancelled due to "communication issues at the working level." The Korea Herald reported that North Korea had cancelled the tour because China had requested that North Korea's missiles should not be shown during performances. </p>
			<p>Unlike any other North Korean orchestra, the Moranbong Band consists of only females. In contrast to South Korean girl bands, the members of the Moranbong Band play their own instruments. Due to North Korean musical education aspiring for precision and accuracy, their playing abilities are described as "very accomplished and tight". The large number of members has enabled them to play a variety of different styles of music as well as some technically challenging arrangements. Changes in the lineup have not changed the musical style of the band, suggesting that members are swapped because of their technical ability rather than artistic input. Members of the band hold high ranks in the military and, with the exception of the debut, have appeared in public in uniforms and with insignia.</p>
		</div>
	</div>
	<div class = "empty_area">
	</div>
	<div class = "box2">
		<div class= "title-2">
			<h2> Find us :D </h2>
		</div>



		<div class= "map-div">
			<div id="map"></div>
		</div>
		

 		   <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
		    <script
 		     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIwzALxUPNbatRBj3Xi1Uhp0fFzwWNBkE&callback=initMap&libraries=&v=weekly"
		      async
 		   ></script>
		    <script>
 		   let map;

		function initMap() {
		  map = new google.maps.Map(document.getElementById("map"), {
		    center: { lat: 39.21629120679908, lng: 125.92035004358061 },
		    zoom: 8,
		  });
		}
	    </script>

		<div class= "title-2">
			<h2> Help us defeat evil Amerikkka kkkapitalism! </h2>
		</div>
		<div class= "survey">
			<form>
			  <label for="name">Name:</label><br>
			  <input type="text" id="name" name="name"><br>
			  <label for="email">Email:</label><br>
			  <input type="text" id="email" name="email"><br><br>
			  <input type="submit" value="Subscribe!">
			</form>
		</div>


	</div>
</div>





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
