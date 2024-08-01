$con = mysqli.connect("localhost", "root", "", "desa_kandri");
if (isset($_POST['tambah_kabupaten'])){
    $id_kabupaten = $_POST['id_kabupaten'];
    $nama_kabupaten = $_POST['nama_kabupaten'];

    $query = "INSERT INTO desa(id_kabupaten, nama_kabupaten) VALUES ('$id_kabupaten', '$nama_kabupaten')";
    mysqli_quenry($conn,$query);
    header('Location: tampil_kabupaten.php');
}
