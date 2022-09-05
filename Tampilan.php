<?php
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
    <h2>Biodata Mahasiswa</h2>
    <p>
    <?php
        echo "Nama: " .
        $_SESSION["nama"]. "<br>"; 
        echo "Nomor Induk Mahasiswa : " .
        $_SESSION["nim"]."<br>";
        echo "Perguruan Tinggi : " .
        $_SESSION["pt"]."<br>";
        echo "Fakultas : " .
        $_SESSION["fakultas"]."<br>";
        echo "Program Studi : " .
        $_SESSION["prodi"]."<br>";
        ?>
    </p>
    </body>
</html>
