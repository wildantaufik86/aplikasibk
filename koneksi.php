<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "interestbk";

	$dtb = mysqli_connect($host, $user, $pass, $database);

	function registrasi($datanya)
    {
        global $dtb;
        $username=strtolower(stripslashes(htmlspecialchars($datanya['username'])));
		$password=stripslashes(stripslashes(htmlspecialchars($datanya['password'])));
        $nis=stripslashes(stripslashes(htmlspecialchars($datanya['nis'])));
        $kelas=stripslashes(stripslashes(htmlspecialchars($datanya['kelas'])));
        $namasiswa=stripslashes(stripslashes(htmlspecialchars($datanya['namasiswa'])));
        $kelamin=stripslashes(stripslashes(htmlspecialchars($datanya['kelamin'])));
        $tempatlahir=stripslashes(stripslashes(htmlspecialchars($datanya['tempatlahir'])));
        $tanggallahir=stripslashes(stripslashes(htmlspecialchars($datanya['tanggallahir'])));
        $alamat=stripslashes(stripslashes(htmlspecialchars($datanya['alamat'])));
        $agama=stripslashes(stripslashes(htmlspecialchars($datanya['agama'])));
        $namaortu=stripcslashes(stripslashes(htmlspecialchars($datanya['namaortu'])));
        $nohp=stripslashes(stripslashes(htmlspecialchars($datanya['nohp'])));
        
        // $password=stripslashes(stripslashes(htmlspecialchars($datanya['password']));

        // $nama = stripslashes(htmlspecialchars($datanya['nama']));
        // $namauser = strtolower(stripslashes(htmlspecialchars($datanya['namauser'])));
        // $email = stripslashes(htmlspecialchars($datanya['email']));
        // $sekolah = stripslashes(htmlspecialchars($datanya['sekolah']));
        // $
        // $passuser= mysqli_real_escape_string($dtb, $datanya['pass']);
    
        // Masukkan data ke dalam database
        $query = "INSERT INTO tb_pengguna VALUES ('', '$username', '$password', 'siswa')";
        $query2 = "INSERT INTO tb_siswa VALUES ('', '$nis', '$namasiswa', '$kelamin', '$tempatlahir', '$tanggallahir', '$alamat', '$agama', '$namaortu', '$nohp', '$kelas')";
        mysqli_query($dtb, $query);
        mysqli_query($dtb, $query2);
        return mysqli_affected_rows($dtb);
    }

?>