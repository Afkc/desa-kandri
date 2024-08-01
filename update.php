$conn = mysqli_connect("localhost", "root", "", "desa_kandri");

if (isset($_POST['edit_kabupaten'])) {
    $id_kabupaten = $_POST['id'];
    $nama_kabupaten = $_POST['nama_kabupaten'];

    $query = "UPDATE kabupaten SET nama_kabupaten ='$nama_kabupaten' WHERE id='$id'";
    mysqli_query($conn, $query);

}