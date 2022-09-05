<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <style>
        body{
    margin: 10px;
    padding: 0;
    font-family: sans-serif;
	background: linear-gradient(lightSteelBlue, linen);
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
    align : center;
}
h2{
    align: center;
    font-family: sans-serif;
}
input{
	padding: 3px 0;
	margin-bottom: 10px;
    box-sizing: border-box;

}
input[type=submit]{
    width:100px;
    font-family: lucida bright;
    

}
form{
        border: solid 1px #000;
        padding: 20px;
        width: 500px;
        border-radius: 10px;
    }
    </style>
<body>
    <h2>Form Biodata Mahasiswa</h2>
    <form action="IsiBiodata.php" method="POST" name="Biodata">
        Nama :<input type="text" name="nama"><br>
        Nomor Induk Mahasiswa :<input type="number" name="nim"><br>
        Perguruan Tinggi : <input type="text" name="pt"><br>
        Fakultas : <input type="text" name="fakultas"><br>
        Program Studi : <input type="text" name="prodi"><br>
        <input type="submit" name="submit" value="kirim"><br>
    </form>


</body>
</html>