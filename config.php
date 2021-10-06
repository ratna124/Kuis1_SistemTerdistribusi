
<?php
	$host='localhost';
    $user='root';
    $pass='';
    $database='sisdis';
    
    $konek=mysqli_connect($host, $username, $password);
    
    mysqli_select_db($konek, $database);
    if ($konek){
    echo "success";
    } else {
    echo "failure";
    }
?>