<?php



include 'db-connect.php';

$id=$_GET['id'];




$result = $con->query("SELECT * FROM comments WHERE product_id= '$id'");
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
    echo "<div class='comment-article'>";
        echo "<b>" . $row['user_name'] . "</b>";
        echo "<p>" . $row['comments'] . "</p>";
    echo "</div>";
	}
}




?>
