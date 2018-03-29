<?php include('header.php') ?>
	<main class="main">
		<div class="breadcrumb-container">
			<div class="container">
				<nav>
				    <div class="nav-wrapper">
				      <div class="col s12">
				        <a href="index.php" class="breadcrumb">Trang chủ</a>
				        <a href="login.php" class="breadcrumb">Đăng ký - Đăng nhập</a>
				      </div>
				    </div>
				  </nav>
			</div>
		</div>
		<div class="row body send-article-page">
			<div class="container">
				<div class="body-left col l9 s12">
					<div class="row block send-article-form" id="send-article-form">
						<h2 class="heading"><i class="material-icons">lock</i> GỬI BÀI ĐĂNG TẠP CHÍ KHOA HỌC</h2>
						<div class="content">
							<form action="" method="post">
								<div class="input-field">
						          <input id="tenbaibao" type="text" class="validate">
						          <label for="tenbaibao">Tên bài báo*</label>
						        </div>
						        <div class="input-field">
						          <input id="title" type="text" class="validate">
						          <label for="title">Title (Tên bài báo bằng Tiếng Anh)*</label>
						        </div>
						        <div class="input-field">
						        	<textarea id="tomtat" class="materialize-textarea"></textarea>
						        	<label for="tomtat">Tóm tắt*</label>
						        </div>
						        <div class="input-field">
						          <textarea id="abtract" class="materialize-textarea"></textarea>
						          <label for="abtract">Abtract (Tóm tắt bài báo bằng Tiếng Anh)*</label>
						        </div>
						        <div class="input-field">
						          <input id="tukhoa" type="text" class="validate">
						          <label for="tukhoa">Từ khóa*</label>
						        </div>
						        <div class="input-field">
						          <input id="keywword" type="text" class="validate">
						          <label for="keywword">Keywword (Từ khóa bằng Tiếng Anh)*</label>
						        </div>
						        <div class="file-field input-field">
					                <label class="head-text">Toàn văn bài báo</label>
					                <input value="" type="hidden" name="oldPublicFile">
					            	<div class="btn grey darken-2">
					              		<span>Chọn</span>
					              		<input type="file" name="publicFile" accept=".pdf">
					            	</div>
						            <div class="file-path-wrapper">
						              <input class="file-path validate" type="text">
						            </div>
						        </div>

						        <div class="center-align">
						        	<button class="waves-effect waves-light btn">Gửi bài báo</button> &nbsp;
						        	<button class="waves-effect waves-light btn grey darken-1" type="reset">Nhập lại</button> &nbsp;
						        </div>
							</form>
						</div>
					</div>
				</div>
				<div class="body-right col l3 s12">
					<div class="block">
						<h2 class="heading"><i class="fas fa-newspaper"></i> TẠP CHÍ ĐÃ XUẤT BẢN</h2>
						<div class="content list-volume">
							<div class="item">
								<div class="col number">
									<a class="box" href="volume-detail.php">
										<span>15</span>
									</a>
								</div>
								<div class="col">
									<a href="volume-detail.php" class="name">Quyển 15 (3)</a>
									<div class="date"><i class="far fa-calendar-alt"></i> 08 - 2018</div>
								</div>
							</div>
							<div class="item">
								<div class="col number">
									<a class="box" href="volume-detail.php">
										<span>15</span>
									</a>
								</div>
								<div class="col">
									<a href="volume-detail.php" class="name">Quyển 15 (3)</a>
									<div class="date"><i class="far fa-calendar-alt"></i> 08 - 2018</div>
								</div>
							</div>
							<div class="item">
								<div class="col number">
									<a class="box" href="volume-detail.php">
										<span>15</span>
									</a>
								</div>
								<div class="col">
									<a href="volume-detail.php" class="name">Quyển 15 (3)</a>
									<div class="date"><i class="far fa-calendar-alt"></i> 08 - 2018</div>
								</div>
							</div>
							<div class="item">
								<div class="col number">
									<a class="box" href="volume-detail.php">
										<span>15</span>
									</a>
								</div>
								<div class="col">
									<a href="volume-detail.php" class="name">Quyển 15 (3)</a>
									<div class="date"><i class="far fa-calendar-alt"></i> 08 - 2018</div>
								</div>
							</div>
							<div class="item">
								<div class="col number">
									<a class="box" href="volume-detail.php">
										<span>15</span>
									</a>
								</div>
								<div class="col">
									<a href="volume-detail.php" class="name">Quyển 15 (3)</a>
									<div class="date"><i class="far fa-calendar-alt"></i> 08 - 2018</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block">
						<h2 class="heading"><i class="fas fa-star"></i> TẠP CHÍ SỐ ĐẶC BIỆT</h2>
						<div class="content list-volume">
							<div class="item">
								<div class="col number">
									<a class="box" href="volume-detail.php">
										<span>15</span>
									</a>
								</div>
								<div class="col">
									<a href="volume-detail.php" class="name">Quyển 15 (3)</a>
									<div class="date"><i class="far fa-calendar-alt"></i> 08 - 2018</div>
								</div>
							</div>
							<div class="item">
								<div class="col number">
									<a class="box" href="volume-detail.php">
										<span>15</span>
									</a>
								</div>
								<div class="col">
									<a href="volume-detail.php" class="name">Quyển 15 (3)</a>
									<div class="date"><i class="far fa-calendar-alt"></i> 08 - 2018</div>
								</div>
							</div>
							<div class="item">
								<div class="col number">
									<a class="box" href="volume-detail.php">
										<span>15</span>
									</a>
								</div>
								<div class="col">
									<a href="volume-detail.php" class="name">Quyển 15 (3)</a>
									<div class="date"><i class="far fa-calendar-alt"></i> 08 - 2018</div>
								</div>
							</div>
							<div class="item">
								<div class="col number">
									<a class="box" href="volume-detail.php">
										<span>15</span>
									</a>
								</div>
								<div class="col">
									<a href="volume-detail.php" class="name">Quyển 15 (3)</a>
									<div class="date"><i class="far fa-calendar-alt"></i> 08 - 2018</div>
								</div>
							</div>
							<div class="item">
								<div class="col number">
									<a class="box" href="volume-detail.php">
										<span>15</span>
									</a>
								</div>
								<div class="col">
									<a href="volume-detail.php" class="name">Quyển 15 (3)</a>
									<div class="date"><i class="far fa-calendar-alt"></i> 08 - 2018</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php include('footer.php') ?>