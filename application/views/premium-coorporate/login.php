<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Single Sign On (SSO)</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
	
	<meta name="robots" content="index, follow">
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<meta name="author" content="BNPP">
	<meta name="robots" content="all,index,follow">
	<meta http-equiv="Content-Language" content="id-ID">
	<meta NAME="Distribution" CONTENT="Global">
	<meta NAME="Rating" CONTENT="General">
	<link rel="canonical" href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"/>
	<?php if ($this->uri->segment(1)=='berita' AND $this->uri->segment(2)=='detail'){ $rows = $this->model_utama->view_where('berita',array('judul_seo' => $this->uri->segment(3)))->row_array();
	   echo '<meta property="og:title" content="'.$title.'" />
			 <meta property="og:type" content="article" />
			 <meta property="og:url" content="'.base_url().''.$this->uri->segment(3).'" />
			 <meta property="og:image" content="'.base_url().'asset/foto_berita/'.$rows['gambar'].'" />
			 <meta property="og:description" content="'.$description.'"/>';
	} ?>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/<?php echo favicon(); ?>" />

	<!-- Disable tap highlight on IE -->
	<meta name="msapplication-tap-highlight" content="no">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/login/login.css">
	<style type="text/css">
		.font-h{
			font-size: 2.5rem;
			margin-bottom: .5rem;
		    font-family: inherit;
		    line-height: 1.1;
		    color: #2159a4;
		    font-weight: bold;
		}
		.font-p{
			font-size: 1.2rem;
			margin-bottom: .5rem;
		    font-family: inherit;
		    line-height: 1.1;
		    color: #2c2f33;
		    font-weight: bold;
		}
		.img-h{
			display: block;
		  	
		  	width: 150px;
		  	
		}
		@media screen and (max-width: 767px){
			.img-h{
				display: block;
			  	margin-left: auto;
			 	margin-right: auto;
			  	width: 35%;
			  	margin-bottom: 10px;

			}
			.font-h{
				font-size: 20px;
				margin-bottom: .5rem;
			    font-family: inherit;
			    line-height: 1.1;
			    color: #2159a4;
			    font-weight: bold;
			    text-align: center;
			}
			.font-p{
				font-size: 14px;
				margin-bottom: .5rem;
			    font-family: inherit;
			    line-height: 1.1;
			    color: #2c2f33;
			    font-weight: bold;
			    text-align: center;
			}
			.divider {
			    margin-top: 10px;
			    margin-bottom: 10px;
			    height: 1px;
			    overflow: hidden;
			    background: #e9ecef;
			}
			.input-w{
				width: 120px;
			}
			.h-100 {
			    height: 100%;
			}
			.align-items-center {
			    align-items: top;
			}
		}
	</style>

<body>
	<div class="app-container app-theme-white body-tabs-shadow">
		<div class="app-container">
			<div class="h-100">
				<div class="h-100 no-gutters row">
					<div class="d-none d-lg-block col-lg-4">
						<div class="slider-light">
							<div class="slick-slider">
								<div>
									<div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
										<div class="slide-img-bg"></div>
										<!-- <div class="slider-content">
											<h3>Selamat datang</h3>
											<p>Di Single Sign On (SSO).</p>
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
						<div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
							<!--<div class="app-logo"></div>-->
							<div class="form-row">
								<div class="col-md-3" style="margin : auto;">
								<img class="img-h"src="<?php echo base_url(); ?>/asset/logo/Badan_Nasional_Pengelola_Perbatasan2.png" >
								</div>
								<div class="col-md-9" style="margin : auto;">
									<p class="font-h">Selamat Datang <br> Di Single Sign On (SSO)</p>
									<p class="font-p">BADAN NASIONAL PENGELOLA PERBATASAN</p>
								</div>
							</div>
							

							<div class="divider row"></div>

							
							<div>
								<form novalidate="novalidate" class="" id="bb" name="bb" accept-charset="utf-8" method="post" action="">
									<div class="form-row">
										<div class="col-md-6">
											<div class="position-relative form-group"><label for="exampleEmail" class="">Username</label>

												<input name="username" id="exampleEmail" placeholder="Username here..." type="text" class="form-control"></div>
										</div>
										<div class="col-md-6">
											<div class="position-relative form-group"><label for="examplePassword" class="">Password</label><input name="user_password" placeholder="Password here..." type="password" class="form-control"></div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-12">
											<div class="form-group">
												<div for="exampleEmail" style="padding-bottom: 5px">Enter Code</div>
												<div style="float: left">
													<?php echo $captcha['image']; ?>			
												</div>
												<div style="float: left; padding-left: 10px">
													<input name="userCaptcha" placeholder="Enter Code" type="text" class="form-control input-w">
													<span class="required-server"><?php echo form_error('userCaptcha','<p style="color:#F83A18">','</p>'); ?></span> 
												</div>
												<div class="required-server"></div>
											</div>
										</div>
									</div>

									<div class="divider row"></div>
									<div class="d-flex align-items-center">
										<div class="ml-auto">
											<button class="btn btn-primary btn-lg">Login ke Aplikasi</button>
											<a class="btn btn-danger btn-lg" href="<?php echo base_url().'bnpp'; ?>">Kembali</a>
										</div>
									</div>
									<br>
									<?php if (isset($pesan)) { ?><div class="alert alert-danger alert-dismissable"><?php echo $pesan; ?></div><?php } ?>

		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>