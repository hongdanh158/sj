<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="minimum-scale=1.0, maximum-scale=2.0, width=device-width, user-scalable=yes" name="viewport" />
	<title>Tạp chí Khoa học Trường Đại học An Giang</title>
	<link rel="stylesheet" href="css/materialize.css">
	<link rel="stylesheet" href="css/icon.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="js/slick/slick.css">
	<link rel="stylesheet" href="js/slick/slick-theme.css">
	<link rel="stylesheet" href="css/style.css?v=1">
	<link rel="stylesheet" href="css/responsive.css?v=1">
	<script src="js/fontawesome-5-9.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/slick/slick.js"></script>
	<script src="js/script.js"></script>
	<script src="js/init.js"></script>
</head>
<body>
	<div class="top-menu">
		<div class="container">
			<div class="row">
				<div class="col l5 language">
					<span class="text">Ngôn ngữ: </span>
					<ul>
						<li><a href="#"><img src="images/languages/vn.png" alt=""></a></li>
						<li><a href="#"><img src="images/languages/us.png" alt=""></a></li>
					</ul>
				</div>
				<div class="col l7 s12 action">
					<ul class="login">
						<li><a href="login.php#register-form"><i class="ti-lock"></i> Đăng ký</a></li>
						<li><a href="login.php#login-form"><i class="ti-unlock"></i> Đăng nhập</a></li>
						<li>
							<a class='dropdown-trigger alert-btn' href='#' data-target='alert'><i class="ti-bell"></i> <span class="badge red">3</span></a>
							<!-- Dropdown Structure -->
							<ul id='alert' class='dropdown-content'>
							    <li><a href="#!"><span class="badge red">1</span> <i class="ti-comment-alt"></i>Bài báo đang bình duyệt</a></li>
							    <li><a href="#!"><span class="badge red">1</span> <i class="ti-receipt"></i>Bài báo gửi đăng</a></li>
							    <li><a href="#!"><span class="badge red">1</span> <i class="ti-alert"></i>Thông báo từ tạp chí</a></li>
							</ul>
						</li>
						<li><a class='dropdown-trigger account-btn' href='#' data-target='account'><i class="ti-user"></i> Lê Trương Hồng Danh</a>
							<!-- Dropdown Structure -->
							<ul id='account' class='dropdown-content'>
							    <li><a href="#!"><i class="ti-user"></i>Thông tin cá nhân</a></li>
							    <li><a href="#!"><i class="ti-list-ol"></i>Danh sách bài báo</a></li>
							    <li><a href="send-article.php"><i class="ti-upload"></i>Gửi bài báo mới</a></li>
							    <li><a href="#!"><i class="ti-comment-alt"></i>Bình duyệt bài báo</a></li>
							    <li><a href="#!"><i class="ti-shift-right"></i>Đăng xuất</a></li>
							</ul>
						</li>
					</ul>					
				</div>
			</div>
		</div>
	</div>
	<header class="header">
		<div class="bottom container">
			<a href="index.php" class="logo">
				<img src="images/logo.svg" alt="">
			</a>
            <nav class="main-nav">
	        	<ul class="nav">
	        		<li><a href="#">Giới thiệu</a></li>
	        		<li><a href="#">Hội đồng biên tập</a></li>
	        		<li><a href="#">Quy định chung</a>
	        			<ul class="nav">
			        		<li><a href="#">Quy định tổ chức và hoạt động</a></li>
			        		<li><a href="#">Quy định thể lệ bài viết</a></li>
			        		<li><a href="#">Hội đồng Biên tập</a></li>
			        		<li><a href="#">Quy trình xuất bản</a></li>
			        	</ul>
	        		</li>
	        		<li><a href="#">Thư mời viết bài</a></li>
	        		<li><a href="#">Liên hệ</a></li>
	        	</ul>
	        </nav>
	        <div class="js-menu-mobile"><div class="trigger-menu"><span class="three-bars-icon"></span></div></div>
        </div>
	</header>
	<div class="slidebar">
		<div class="mobile-wrap-menu">
			<div class="head">
				<span class="icon closeSidebar"><i class="fas fa-times-circle"></i></span>
			</div>
			<div class="content"></div>
		</div>	
	</div>