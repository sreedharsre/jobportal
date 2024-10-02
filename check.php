<?php

include 'db_connect.php';
$query = "SELECT * FROM emp_profile WHERE userName='sree.s'";
		$results = mysqli_query($conn, $query);
                $user = mysqli_fetch_assoc($results);
                $co=$user['userName'];
                $co1=$user['password'];
                echo $co1.' --asdfghjkl-- '.$co;
                ?>