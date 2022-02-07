<?php
require_once __DIR__."/config.php";
$id = $_GET['id'];
if(!$id){
header('location:/');
}
if(mysqli_num_rows(mysqli_query($ketnoi, "SELECT * FROM dulieu WHERE id_post = '$id'")) < 1 ){
header('location: /');
}

$post = mysqli_fetch_array(mysqli_query($ketnoi, "SELECT * FROM dulieu WHERE id_post = '$id' LIMIT 1"));
//mysqli_query($ketnoi,"UPDATE `dulieu` SET `luotxem` = `luotxem` + 1 WHERE `id_post` = '".$id."'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="views/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<title>Một Lời Yêu Thương 🤗</title>
</head>
<body>
	<div id="sun">
		<img src="views/sun.svg" width="150px" alt="">
	</div>
	<div id="bee">
		<img src="views/bee.svg" width="150px" alt="">
		<span class="text-ngyt fw-bolder">Bee bee...</span>
	</div>
	<div id="loading">
		<div class="text-center">
			<img src="views/hearts.svg" width="250px" alt="">
			<h2 style="color:#fba0a8; text-shadow: 2px 2px 2px white;">Đang tải....</h2>
		</div>
	</div>
	<main>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6 col-md-12 col-lg-6 col-sm-12" id="full-box">
					<div class="text-center w-100">

					</div>
					<div class="box animate__animated  animate__backInUp">
						<div class="hearts"></div>
						<div>
							<h4 class=""><span class="text-ngyt fw-bolder">Có một lời yêu thương gửi tới bạn</span> 💌</h4>
						</div>
						<div class="w-100 mt-2">
							<label class="text-secondary text-ngyt">Mật khẩu của trái tim 🧡</label>
							<input id="password" class="form-control" type="text" class="w-100" placeholder="Nhập vào đây">
							<small id="error-mess" style="color:#979797;">Mật khẩu phải ghi liền không dấu*</small>
						</div>
						<div class="mt-2 w-100">
							<button class="btn btn-outline-ngyt" id="btn-matkhau" data-id='68117'>Đồng ý</button>
						</div>
					</div>
					<!-- Thẻ nội dung -->
					<div class="letter">
						<img src="views/letter.png" width="100%" class="animate__infinite animate__animated animate__heartBeat animate__slow" alt="">
					</div>
					<div class="box2 animate__animated  ">
						<div class="img-left">
							<p class="text-center">
																<img src="random/1.png" width="100px" alt="" style="float: left; transform: rotate(338deg);">
								<?php echo $post['noidung']; ?>							</p>
							
						</div>
						<div id="img-img-left">
							<img src="views/6009247.png" width="50px" alt="">	
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<div class="flower-footer"></div>
</body>
<!-- script -->
<script src="views/script.js"></script>

</html>