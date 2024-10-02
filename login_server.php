<?php
session_start();
$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "jobportal";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login_emp'])) {

$username = $_POST['un'];
$pas = $_POST['pas'];
$utype=$_POST['type'];
//echo 'these are form fetching details: '.$username." AND ".$pas." AND ".$utype;

if($utype=="Employer")
{
    //$query="select userName,password from emp_profile where ";
    $query = "SELECT * FROM emp_profile WHERE userName='$username' AND password='$pas'";
		$results = mysqli_query($conn, $query);
                $user = mysqli_fetch_assoc($results);
                $co=$user['userName'];
                $co1=$user['password'];
               // echo $co1.' --asdfghjkl-- '.$co;
		if ($user['userName']==$username && $user['password']==$pas) {
			$_SESSION['username'] = $username;
			header('location: home.php');
		} else {
                    $_SESSION["upmsg"]= "Wrong username/password combination";
                    header("location:sabout_us.php");
		}
}
// else {
//     $_SESSION['umsg']='No user found with this username and user type.';
//     header("location:sabout_us.php");
//}
elseif($utype=="admin")
{
    //$query="select userName,password from emp_profile where ";
    $query = "SELECT * FROM admin WHERE userName='$username' AND password='$pas'";
		$results = mysqli_query($conn, $query);
                $user = mysqli_fetch_assoc($results);
                $co=$user['userName'];
                $co1=$user['password'];
                echo $co1.' --asdfghjkl-- '.$co;
		if ($user['userName']==$username && $user['password']==$pas) {
			$_SESSION['username'] = $username;
			header('location: profile.php');
		}
                else {
                    $_SESSION["upmsg"]= "Wrong username/password combination";
                    header("location:sabout_us.php");
		}
}
 else {
     $_SESSION['umsg']='No user found with this username and user type.';
     header("location:sabout_us.php");
}

}

$conn->close();
?>
