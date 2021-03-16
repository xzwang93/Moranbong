
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
?>

