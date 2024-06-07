<?php
    function connect(){
        try {
            $luom= new PDO("mysql:host=localhost;dbname=huonghtph44799","root","");
            $thongdiep="SELECT * FROM taikhoan";
            // Nhận thông điệp rồi thực thi
            $stmt= $luom->prepare($thongdiep);
            $stmt->execute();
            $a =$stmt->fetchALL();
        }catch(PDOException $e)
        {
            echo $e->getMessage();
        };
        return $a;
    }