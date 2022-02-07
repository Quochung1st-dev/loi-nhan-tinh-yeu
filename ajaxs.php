<?php
require_once __DIR__."/config.php";
$noidung = $_POST['noidung'];
$pass = $_POST['pass'];
$id_post = id_post(4);
if(isset($_POST['noidung']) && isset($_POST['pass'])){
mysqli_query($ketnoi ,"INSERT INTO `dulieu`(`id`, `id_post`, `matkhau`, `noidung`, `luotxem`, `ip_tao`, `time`) VALUES (NULL,'$id_post','$pass','$noidung','0','$ip','$thoigian')");
die(json_encode(array('status' => 99, 'messages' => '<input id="link-dd" class="swal2-input" value="'.$tenmien.'content.php?id='.$id_post.'" readonly><br><a class="btn btn-sm btn-warning" onclick="copy()">Copy Link</a><br>Hãy nhấp vào nút "copy link" ở trên và gửi cho người bạn thương ngay nhé 💖💖💖<br><br>Nếu không biết dùng có thể xem hướng dẫn.<br><a href="/">Hướng dẫn sử dụng</a>')));
}else{
die(json_encode(array('status' => 1, 'messages' => 'Có Lỗi Xảy Ra Vui Lòng Thử Lại')));   
}
?>