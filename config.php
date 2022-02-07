<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
//Kết nối
$ketnoi = mysqli_connect('localhost','nhan_gui_yeu_thuong','123456','nhan_gui_yeu_thuong') or die('Vui lòng kết nối database');
mysqli_query($ketnoi,"SET NAMES 'UTF8'");
//thời gian
$tenmien = 'https://quochungstore.online/';
$thoigian = date('d/m/Y - H:i:s');
$time = time();
$ip = $_SERVER['REMOTE_ADDR'];



function id_post($length){
        $id_post = openssl_random_pseudo_bytes($length);
        $id_post = bin2hex($id_post);
        return $id_post;

    }
?>