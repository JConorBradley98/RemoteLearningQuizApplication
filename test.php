<?php
echo "hello";
$host = 'localhost';
$user = 'user';
$password = 'pass1234';
$db ='test';

$conn = new mysqli($host, $user, $password, $db);

// if ($conn -> connect_errno) {​​​​​​​
//     echo "connection failed";
// }​​​​​​​
$sql = "SELECT id, name FROM quiz";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    echo $row["name"];
}
// if ($result->num_rows > 0) {​​​​​​​
//     while($row = $result->fetch_assoc()) {​​​​​​​
//         echo "id: " . $row["id"]. " - Name: " . $row["name"] . "<br>";
//     }​​​​​​​
// }​​​​​​​ else {​​​​​​​
//     echo "0 results";
// }​​​​​​​

?>