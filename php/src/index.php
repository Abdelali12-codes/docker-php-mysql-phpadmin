<?php

echo "Hello ther , this is a php apache container";

$host = 'db';
$user = 'abdelali';
$pass = '123456789';

$mydatabase = 'MY_DATABASE';



$conn = new mysqli ($host , $user , $pass , $mydatabase);

if($conn -> connect_error){
    die("Connection failed :" .$conn->connect_error);


}else{
    echo "<br>";
    echo "Connected to Mysql server successfully!";
    echo "</br>";
}

$sql = 'SELECT * FROM users';
$users = array();
if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->username . " " . $user->password;
    echo "<br>";
}



?>