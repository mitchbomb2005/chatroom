<?php
session_start();

//if (ISSET($_POST['message']))
{
$link = mysqli_connect('localhost', 'IMuser', 'IMuser', 'im');
if (!$link)
{   die('Could not connect: ' . mysqli_error()); }
else
{
    //echo 'were good';
}


$message = mysqli_real_escape_string($link, $_POST['message']);
$username = mysqli_real_escape_string($link, $_SESSION['username']);

$sql = "INSERT INTO messages (message, username)
VALUES ('$message', '$username')";

$result = mysqli_query($link, $sql);

/* close connection */
mysqli_close($link);
}

echo '<html>';
echo '<head></head><body>';
echo '<form action="newmessage.php" method="POST">';
echo '<input type="text" name="message" />';
echo '<input type="submit" name="Send"/>';
echo '</form>';
echo '</body></html>';

?>