<?php

    include_once('koneksi.php');

    if (!empty($_POST['mahasiswa_nama']) && !empty($_POST['mahasiswa_nohp']) && !empty($_POST['mahasiswa_alamat'])) {

        $nama = $_POST['mahasiswa_nama'];
        $nohp = $_POST['mahasiswa_nohp'];
        $alamat = $_POST['mahasiswa_alamat'];

        $query = "INSERT INTO mahasiswa(mahasiswa_nama, mahasiswa_nohp, mahasiswa_alamat) VALUES ('$nama', '$nohp', '$alamat')";

        $insert = "mysqli_query"($connect, $query);

        if ($insert) {
            set_response(true, "Sukses Insert Data");

        }

        else{
            set_response(false, "failed insert data");
        }

    } else {
        set_response(false, "Nama, Nomor Hp, dan alamat harus diisi");
    }

    function set_response($isSuccess, $message) {

        $result = array(
            'isSuccess' => $isSuccess,
            'message' => $message
        );

        echo json_encode($result);
    }

?>