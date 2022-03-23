<?php

function setComments($conn) {
	if(isset($_POST['commentSubmit'])) {
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		$sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')" ;
		$results = $conn->query($sql);
	}
}

function getComments($conn){
	$sql = "SELECT * FROM comments";
	$result = $conn->query($sql);
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<div class='comment-box'><fieldset><p>";
			echo $row['uid']."<br>";
			echo $row['date']."<br>";
			echo $row['message']."<br>";
		echo "</p><fieldset></div><hr>";
	}
	

}


?>