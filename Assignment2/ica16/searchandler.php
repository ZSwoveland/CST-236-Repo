


<?php 
include "Autoloader.php";
include "_displayAllUsers.php";
include "UserBusinessService.php";


$searchPattern = $_POST["firstName"];
$search = new UserBusinessService();

$search->searchByFirstName($searchPattern);

for($x=0;$x < count($users); $x++){
    echo "<tr>";
    echo "<td>" . $users[$x][0]. "</td>". "<td>". $users[$x][1] . "</td>" . "<td>" . $users[$x][2] . "</td>";
    echo "</tr>";
}
?>



