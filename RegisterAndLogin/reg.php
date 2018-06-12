<?PHP
session_start();
$link = mysqli_connect("localhost", "root", "toor");
mysqli_select_db($link, "user");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO user(user, password)VALUES('$username', '$password')";
if (mysqli_query($link, $sql)) {
	exit('Good, username'  . $_POST['username'] . '      <a href="login.html">login');
} else {
	echo 'Failed!' . mysqli_error($link);
}
?>