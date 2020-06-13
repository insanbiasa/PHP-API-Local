<?php

    include_once('koneksi.php');

    if (!empty($_POST['id_mahasiswa'])) {

        $id = $_POST['id_mahasiswa'];

        $query = "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id'";

        $delete = mysqli_query($connect, $query);

        if($delete) {

            set_response(true, "Sukses Hapus Data");
        }

        else{
            set_response(false, "Gagal Hapus Data");
        }

    } else {
        set_response(false, "Id harus diisi");
    }

    function set_response($isSuccess, $message) {

        $result = array(
            'isSuccess' => $isSuccess,
            'message' => $message
        );

        echo json_encode($result);
    }

?>