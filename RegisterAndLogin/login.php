<?PHP
session_start();
$link = mysqli_connect("localhost", "root", "toor");
mysqli_select_db($link, "user");

$user = htmlspecialchars($_POST['username']);
$pwd = $_POST['password'];

$sql_select = "SELECT * FROM user WHERE user = '$user'";
$check_query = mysqli_query($link,$sql_select);
$result = mysqli_fetch_array($check_query);
if ($result) {
	$_SESSION['username'] = $user;
	echo "<script>alert('Login Successful!');location='welcome.html';</script>";
} else {
	echo "<script>alert('Login Failed!');location='login.html';</script>";
}

?>