<?php
require_once __DIR__."/config.php";
$pass = $_POST['password'];
$concu = mysqli_fetch_array(mysqli_query($ketnoi, "SELECT * FROM dulieu WHERE matkhau = '$pass' LIMIT 1"));
if($concu >= 1){
die(json_encode(array('status' => 99, 'messages' => 'Thành công')));
}else{
die(json_encode(array('status' => 1, 'messages' => 'Mật khẩu hông đúng rùi nè :< Thử lại đi nè.')));   
}
?>