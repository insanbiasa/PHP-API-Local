<?php

	include_once('koneksi.php');

	if (!empty($_POST['id_mahasiswa']) && !empty($_POST['mahasiswa_nama']) && !empty($_POST['mahasiswa_nohp']) && !empty($_POST['mahasiswa_alamat'])) {


		$id = $_POST['id_mahasiswa'];
		$nama = $_POST['mahasiswa_nama'];
		$nohp = $_POST['mahasiswa_nohp'];
		$alamat = $_POST['mahasiswa_alamat'];

		$query = "UPDATE mahasiswa set mahasiswa_nama = '$nama', mahasiswa_nohp = '$nohp', mahasiswa_alamat = '$alamat' WHERE id_mahasiswa = '$id'";

		$update = mysqli_query($connect, $query);

		if ($update) {

			set_response(true, "Sukses update data");
			# code...
		}
		else {
			set_response(true, "Gagal update data");
		}
		# code...
	} else {
		set_response(false, "Id, Nama, Nomor Hp dan Alamat harus diisi");
	}

	function set_response($isSuccess, $message) {

        $result = array(
            'isSuccess' => $isSuccess,
            'message' => $message
        );

        echo json_encode($result);
    }

?>