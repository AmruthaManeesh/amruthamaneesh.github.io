<?php
/**
 * Created by PhpStorm.
 * User: 1715757
 * Date: 23/03/2018
 * Time: 18:08
 */
include("connectdb.php");
$sql="SELECT*FROM marvelmovies WHERE yearReleased='>2010'";

$result=$db->query($sql);
if($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
        echo "year:".$row["yearReleased"] . ";title:" . $row["title"] . "<br>";
    }
}else{
    echo"0 results";
}
$db->close();

?>