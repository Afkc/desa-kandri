$conn = mysqli_connect("localhost", "username", "password", "desa_kandri");

$query = "SELECT * FROM desa";
$result = mysqli_query($conn, $query);