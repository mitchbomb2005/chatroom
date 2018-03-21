<html>
<head>
<meta http-equiv="refresh" content="2">
</head>
<body>
<?php
// this is where the messages from the server will go!

//connect to db
$link = mysqli_connect('localhost', 'IMuser', 'IMuser', 'im');
if (!$link)
{   die('Could not connect" ' . mysqli_error()); }
else
{ echo 'were good';}



$query = "SELECT * FROM messages";

if ($result = mysqli_query($link, $query)) {
    /* fetch associative array */
    while ($row = mysqli_fetch_row($result))
    {
        echo $row['3'].' says: '.$row['1'].'</br>';
    }
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);


?>
</body>
</html>