 header('Location: index.php');
    $conn = mysqli_connect("localhost", "root", "", "desa_kandri");

if (isset($_GET['hapus_kabupaten'])) {
    $id_kabupaten = $_GET['id'];

    $query = "DELETE FROM kabupaten WHERE id='$id'";
    mysqli_query($conn, $query);

    header('Location: index.php');
}