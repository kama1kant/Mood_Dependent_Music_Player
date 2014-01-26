<html>
<head>
<title>
</title>
</head>
<body>


<?php
include("connection.php");


$query = "SELECT song_record.song_name, song_record.song_url, song_record.id_no, song_record.album FROM song_record,playlist_record WHERE song_record.id_no=playlist_record.song_id && playlist_record.playlist='a' && playlist_record.username='neetu'"; 
$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($result))
{   

$s_url = $row['song_url'];
$s_id = $row['id_no'];

echo '<a href="play_song.php?track='.$s_url.'">'.$row['song_name'].'</a>';

echo $row['album'];  
}



?>

</body>
</html>
