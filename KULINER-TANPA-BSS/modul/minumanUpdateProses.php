<?php
// Skrip Proses Update
require "includes/config.php";

// cek apakah tombol update sudah diklik atau belum?
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $input_nama_minuman = inputData($_POST['nama_minuman']);
    $input_daerah_minuman = inputData($_POST['daerah_minuman']);
    $nama_minuman = mysqli_real_escape_string($conn, $input_nama_minuman);
    $daerah_minuman = mysqli_real_escape_string($conn, $input_daerah_minuman);

    // validasi field nama minuman
    if (empty($nama_minuman) || strlen($nama_minuman) == 0) {
        echo "<script>window.alert('Field is required');window.location='?page=minuman'</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", inputData($nama_minuman))) {
        echo "<script>window.alert('Only letters and white space allowed');window.location='?page=minuman'</script>";
    } elseif (empty($daerah_minuman) || strlen($daerah_minuman) == 0) {
        echo "<script>window.alert('Field is required');window.location='?page=minuman'</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", inputData($daerah_minuman))) {
        echo "<script>window.alert('Only letters and white space allowed');window.location='?page=minuman'</script>";
    } else {
        // update data
        $query = "UPDATE tbl_minuman SET 
                  nama_minuman = '$nama_minuman', 
                  daerah_minuman = '$daerah_minuman' 
                  WHERE id_minuman = $id";

        $sql = mysqli_query($conn, $query);

        // apakah proses update berhasil?
        if ($sql) {
            echo "<script>window.alert('Data berhasil diupdate!');window.location='?page=minuman';</script>";
        } else {
            echo "<script>window.alert('Gagal mengupdate data!');window.location='?page=minuman';</script>";
        }
    }
}

// Fungsi untuk memproses input data
function inputData($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
