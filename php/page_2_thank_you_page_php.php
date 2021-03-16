

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moranbong_album";
 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn -> connect_error) { 
die("Error: " . $conn->connect_error);
} 
$sql = "SELECT `album_name`,`album_year`,`album_cover` FROM `moranbong_db` WHERE 1";
$result = $conn->query($sql);

$rows_num = $result->num_rows;

$result_array = Array();
while($row = $result->fetch_assoc()){
    $result_array[] = array(
            $row['album_name'], 
            $row['album_year'],
            $row['album_cover'] 
        );
};
    //convert the PHP array into JSON format, so it works with javascript
$json_array = json_encode($result_array);


$name = '';
$year_album = '';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = $_POST["name"];
	$year_album = $_POST["year_album"];
	$pic_address = $_FILES["file"]["name"];
}

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ($_FILES["file"]["error"] > 0) {
		echo "Error: " . $_FILES["file"]["error"] . "<br>";
}
else{
		echo "Name: " . $_FILES["file"]["name"] . "<br>";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		
	move_uploaded_file($_FILES["file"]["tmp_name"], "C:\wamp64\www\moranbong\images\\" . $_FILES["file"]["name"]);
	
}



$sql = 'INSERT INTO `moranbong_db` (`album_name`,`album_year`,`album_cover`)
VALUES ("'.$name.'", '.$year_album.', "'.$pic_address.'");';

if ($conn->query($sql) === FALSE) {
	echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

