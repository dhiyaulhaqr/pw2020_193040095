<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITU FT Unpas</title>
</head>
<body>
    <form action="proses.php"  method="post">
    <table  width="745" border="1" align="center"  cellpadding="5" cellspacing="0"  bgcolor="#000" style="padding: 2px">
        <tr>
            <td  height="40" colspan="4" align="center"  bgcolor="#000"><font  color="#FFFFFF">
            <b>INPUT DATA MAHASISWA</b></font></td>
            <tr>
            <td class="rowspan="6" align="center"><img src="foto.jpg" width="200px"></td>
            </tr>
        </tr>
        <tr>
            <td  bgcolor="#FFFFFF"><table width="452"  border="0" align="center" cellpadding="5"  cellspacing="0">

        <tr>
            <td  width="113">Nama</td><td width="11">:</td>
            <td  width="237"><input name="nama" type="text" size="30" maxlength="30"></td>
        </tr>
        <tr>
            <td>NPM</td>
            <td>:</td>
            <td><input  name="npm" type="text" size="" maxlength="30"></td>
        </tr>
        <tr>
            <td  width="113">Prodi</td><td width="11">:</td>
            <td  width="237"><input name="Prodi" type="text" size="30" maxlength="30"></td>
        </tr>
        
        <tr>
            <td>No. HP</td>
            <td>:</td>
            <td><input  name="hp" type="text" size="30" maxlength="30"></td>
        </tr>
        <tr>
            <td>Mata Kuliah</td>
            <td>:</td>
            <td>
                <input type="radio" name="matkul" value="Matematika logika dan Dasar Pemrograman">Matlog dan Daspro<br>
                <input type="radio" name="matkul" value="Praktikum Daspro Objek">Praktikum Daspro<br>
                <input type="radio" name="matkul" value="Probabilitas Statistik">ProbStat<br>
                <input type="radio" name="matkul" value="Pemrograman Web ">Pemrograman Web<br>
                <input type="radio" name="matkul" value="Pengaksesan Basis data ">Pengaksesan Basis data<br>
                <input type="radio" name="matkul" value="PKN">PKN<br>
                
            </td>
            <tr>
            <td>Jam</td>
            <td>:</td>
            <td>
            <select name="jam">
                <option>--  Jam Kuliah --</option>
                <option>Senin, 08.40 WIB</option>
                <option>Senin, 13.00 WIB</option>
                <option>Selasa, 08.40 WIB</option>
                <option>Rabu,  07.00 WIB</option>
                <option>Kamis, 07.00 WIB</option>
                <option>Kamis, 09.40 WIB</option>
                <option>Kamis, 13.00 WIB</option>
                <option>Jumat, 13.00 WIB</option>
                <option>Sabtu, 07.00 WIB</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="Masuk"> </td>
        </tr>
    
</body>
</html>