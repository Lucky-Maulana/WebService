<?php
include 'koneksi.php';
$id         = $_GET['id'];
$mahasiswa  = mysqli_query($koneksi, "select * from mahasiswa where id_mahasiswa='$id'");
$row        = mysqli_fetch_array($mahasiswa);
// membuat data jurusan menjadi dinamis dalam bentuk array
$jurusan    = array('TEKNIK INFORMATIKA','TEKNIK ELEKTRO','REKAMEDIS');
// membuat function untuk set aktif radio button
function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ajax Jquery - Belajarphp.net</title>
    </head>
    <body>
        <form method="post" action="update.php">
            <input type="hidden" value="<?php echo $row['id_mahasiswa'];?>" name="id_mahasiswa">
            <table>
                <tr><td>PENYAKIT</td><td><input type="text" value="<?php echo $row['penyakit'];?>" name="penyakit"></td></tr>
                <tr><td>DESKRIPSI</td><td><input type="text" value="<?php echo $row['deskripsi'];?>" name="deskripsi"></td></tr>
                <tr><td>TIPS</td><td><input value="<?php echo $row['tips'];?>" type="text" name="tips"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="index1.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>