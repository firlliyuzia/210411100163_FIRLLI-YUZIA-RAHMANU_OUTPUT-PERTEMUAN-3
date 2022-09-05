<?php
// Start the session
session_start();
?>
<?php
// Set session variables
$_SESSION["nama"] = $_POST["nama"];
$_SESSION["nim"] = $_POST["nim"];
$_SESSION["pt"] = $_POST["pt"];
$_SESSION["fakultas"] = $_POST["fakultas"];
$_SESSION["prodi"] = $_POST["prodi"];

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
        Nama: 
        <?php
        echo $_SESSION["nama"];
        ?> <br>
        Nomor Induk Mahasiswa :
        <?php
        echo $_SESSION["nim"];
        ?> <br>
        Perguruan Tinggi : 
        <?php
        echo $_SESSION["pt"];
        ?> <br>
        Fakultas : 
        <?php
        echo $_SESSION["fakultas"];
        ?> <br>
        Program Studi :
        <?php
        echo $_SESSION["prodi"];
        ?> <br>
    </p>
    </body>
</html>
