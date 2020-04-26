<?php
// functions untuk melakukan koneksi ke database
    function koneksi() {
        $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
        mysqli_select_db($conn, "tubes_193040095") or die("Database salah!");

        return $conn;
    }
    // function untuk melakukan query ke database
    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");

        $row = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        $conn = koneksi();

        $Foto = htmlspecialchars($data['Foto']);
        $Nama = htmlspecialchars($data['Nama']);
        $Ukuran = htmlspecialchars($data['Ukuran']);
        $Warna = htmlspecialchars($data['Warna']);
        $Stok = htmlspecialchars($data['Stok']);
        $Harga = htmlspecialchars($data['Harga']);

        $query = "INSERT INTO pakaian VALUES
            ( null,'$Foto', '$Nama', '$Ukuran', '$Warna', '$Stok', '$Harga')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus ($id){
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM pakaian WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
?>