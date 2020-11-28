<?php

require("koneksi.php");

$query = $conn->query("SELECT * FROM user");

while($qry = $query->fetch(PDO::FETCH_ASSOC))
{
?>

<?php  
echo $qry['nama']."<br>";
echo $qry['asal']."<br>";

}
?>