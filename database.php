<?php
class database 
{
    var $host ="localhost";
    var $uname ="root";
    var $pass ="";
    var $db ="malasngoding";
    var $conn = "";

    function __construct()
    {

       $this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);

    }
    
    function tampil_data(){
        // $host ="localhost";
        // $uname ="root";
        // $pass ="";
        // $db ="malasngoding";
        $data = mysqli_query($this->conn,"SELECT * FROM user");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    
    }
    function input($nama,$alamat,$usia){ 
            $query = "INSERT INTO user (id,nama,alamat,usia) VALUE('','$nama','$alamat','$usia')";
            if (mysqli_query($this->conn,$query)) {
                header("location:tampil.php");
            }else {
                
                echo "<h1>GAGAL</h1>";
            }
    }
    function hapus($id){
        $query = "DELETE FROM user WHERE id='$id'";
        mysqli_query($this->conn,$query);
    }
    function edit($id){
        $query = "SELECT * FROM user WHERE id='$id'";
        $data = mysqli_query($this->conn,$query);
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($id,$nama,$alamat,$usia){
        $query = "UPDATE user SET nama='$nama' , alamat='$alamat' , usia='$usia' WHERE id='$id'";
        mysqli_query($this->conn,$query);
    }
}


