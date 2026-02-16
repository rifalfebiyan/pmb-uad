<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Login : Auth | PMB Online</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<script src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/jquery.min.js.download'); ?>" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/uniform.default.css'); ?>" rel="stylesheet" type="text/css">
<style>
    /* Custom icon styling to match screenshot */
    .input-icon > i.fa-user { color: #d84a38; } /* Red user icon */
    .input-icon > i.fa-lock { color: #ccc; }    /* Gray lock icon */
    .form-control { border-left: 2px solid #dae1e7; }
    .form-control:focus { border-left: 2px solid #d84a38; }
</style>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/tasks.css'); ?>" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/components-md.css'); ?>" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/plugins-md.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/layout.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/default.css'); ?>" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/custom.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/profile.css'); ?>" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
 <style>
    /* Fix for scroll glitch on Mac/Chrome if sticky header isn't needed or causing issues */
    /* If user wants sticky, we keep it. If glitchy, we might remove 'page-header-menu-fixed' from body class via JS or CSS override */
    /* Override for specific colors if not loading correctly */
    .page-header-menu {
        background: #fff;
        border-bottom: 1px solid #eee;
    }
    .page-header-top {
        background: #fff;
        border-bottom: 1px solid #eee;
    }
 </style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-md">
   <div class="page-header">
      <!-- BEGIN HEADER TOP -->
      <div class="page-header-top">
         <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
               <a href="<?= base_url(); ?>">
                  <img src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/logo-default.png'); ?>" alt="logo" class="logo-default">
                  <h5>PMB Online UAD</h5>
               </a>
            </div>
            <!-- END LOGO -->
            
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler"></a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
							</div>
            <!-- END TOP NAVIGATION MENU -->
         </div>
      </div>

      <!-- END HEADER TOP -->
      <!-- BEGIN HEADER MENU -->
      <div class="page-header-menu">
         <div class="container-fluid">
            <!-- BEGIN HEADER SEARCH BOX -->            
			
            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN MEGA MENU -->
            <div class="hor-menu ">
   <ul class="nav navbar-nav">
					<li>
						<a href="<?= base_url(); ?>">Home</a>
					</li>
					
               
						<li class="">
								<a href="#">
									<i class=""></i>
									Pendaftaran
								</a>
							</li><li class="">
								<a href="#">
									<i class=""></i>
									Jalur Masuk
								</a>
							</li><li class="">
								<a href="#" target="_blank">
									<i class=""></i>
									Info PMB
								</a>
							</li>

            <!-- END MEGA MENU -->
         </ul></div>
      </div>
      <!-- END HEADER MENU -->
   </div>
   <!-- END PAGE HEADER -->
   
   <!-- BEGIN PAGE CONTAINER -->
   <div class="page-container">
      <!-- BEGIN PAGE HEAD -->
      <div class="page-head">
         <div class="container-fluid">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
										<h1>PMB Online <small>Login : Auth</small></h1>
				               
            </div>
            
            <div class="page-toolbar">
               <div class="btn-group btn-theme-panel">
                                       <a class="btn btn-xs red" href="<?= site_url('login'); ?>" aria-expanded="false">
                     Login / Register
                     </a>
                    
               </div>
            </div>
            <!-- END PAGE TITLE -->
         </div>
      </div>
      <!-- END PAGE HEAD -->
      <!-- BEGIN PAGE CONTENT -->
      <div class="page-content">
         <div class="container-fluid">
            <!-- BEGIN PAGE BREADCRUMB -->
			
            <ul class="page-breadcrumb breadcrumb">
				<li class="active">Login Form</li>            </ul>
            <!-- END PAGE BREADCRUMB -->
            <div class="row">
               
               
<div class="col-md-6">
   <div class="portlet light" id="form_wizard_1">
      <div class="portlet-title">
         <div class="caption">
            <!-- <i class="fa fa-graduation-cap font-green-sharp"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Silahkan Login untuk mendaftar PMB atau Register jika belum mempunyai Akun</span> -->
         </div>
         <div class="note" style="background-color: #d9edf7; border-left: 5px solid #4db3a4; padding: 15px; margin-bottom: 20px;">
            <h4 class="block" style="font-weight: 800; margin-top: 0; color: #000;">Selamat datang, Dahlan Muda!</h4>
            <p style="color: #000;"> Silahkan isi form login jika sudah memiliki akun, atau klik tab <label class="badge badge-danger" style="background-color: #f36a5a;">DAFTAR</label> lalu isi formnya jika belum memiliki akun. </p>
        </div>
      </div>

      <div class="login-content">
         
         <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
                <?= $this->session->flashdata('error'); ?>
            </div>
         <?php endif; ?>

         <div class="form-login">
            <div class="profile-usertitle">
               <div class="profile-usertitle-name"> <h3>Login</h3> </div>
            </div>
            <br>
            <?= form_open('login/process', array('class' => 'form-horizontal form-login', 'id' => 'form', 'role' => 'form')); ?>
               <div class="profile-userbuttons">
                  <div class="col-md-12 form-group ">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                     <label class="control-label visible-ie8 visible-ie9">Email</label>
                     <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autofocus="" autocomplete="off" placeholder="Email" name="login" value="">
                                                                     </div>
                  </div>
                  <div class="col-md-12 form-group ">
                     <label class="control-label visible-ie8 visible-ie9">Password</label>
                     <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password">
                                                                     </div>
                  </div>
               </div>
               <div class="profile-userbuttons">
                  <div class="col-md-12">
                                    </div>
               </div>
               <div class="row form-group">
                    <div class="col-sm-4">
                        <label class="rememberme mt-checkbox mt-checkbox-outline">
                            <div class="checker"><span><input type="checkbox" name="remember" value="1"></span></div>Ingatkan Saya!
                            <span></span>
                        </label>
                    </div>
                    <div class="col-sm-8 text-right">
                        <div class="forgot-password">
                           <!-- <a href="">Lupa kata sandi kamu?</a> -->
                        </div>
                    </div>
               </div>
               <div class="row form-group">
                  <div class="col-sm-12">
                     <button type="submit" class="btn blue pull-right">
                     Login <i class="fa fa-arrow-circle-right"></i>
                     </button>
                  </div>
               </div>
            <?= form_close(); ?>
            <hr>
            <p class="text-center text-muted fs-13 mt-20">Belum memiliki Akun? <button type="button" id="btn-daftar" class="btn btn-primary"><i class="fa fa-user"></i> DAFTAR</button></p>
         </div>

         <div class="form-daftar" style="display: none;">
            <div class="profile-usertitle">
               <div class="profile-usertitle-name"> <h3>Daftar Akun</h3> </div>
            </div>
            <br>
            <form id="formRegister" method="post" action="#" class="form-horizontal">
               <div class="form-group ">
                  <label class="col-md-3 control-label">Nama Lengkap</label>
                  <div class="col-md-6">
                     <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Nama Lengkap" name="nama" id="nama" value="" autofocus="">
                  </div>
               </div>
               <div class="form-group ">
                  <label class="col-md-3 control-label">Email untuk Username</label>
                  <div class="col-md-6">
                     <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" id="email" value="" autofocus="">
                     <label id="email-notif" class="text-warning" for="email" style="display: none;"></label>
                  </div>
               </div>
               <div class="form-group ">
                  <label class="col-md-3 control-label">Password</label>
                  <div class="col-md-6">
                     <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" id="password">
                  </div>
               </div>
               <div class="form-group ">
                  <label class="col-md-3 control-label">Ulangi Password</label>
                  <div class="col-md-6">
                     <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Ulangi Password" name="repassword" id="repassword">
                                                            </div>
               </div>
               
               <div class="form-actions">
                  <div class="row">
                     <div class="col-md-12">
                        <a id="btn-back" class="btn grey pull-left"><i class="fa fa-arrow-left m-icon-white"></i> Kembali</a>
                        <button type="button" class="btn red pull-right">Register <i class="fa fa-check m-icon-white"></i></button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="col-md-6">
   <div class="login-bg">
      <span><span><span><img width="510" class="img-responsive" alt="" src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/web-baner-pmb-online-2026.png'); ?>" height="460"></span></span></span>   
   </div>
</div>
<script>
$(document).ready(function() {
   $('.form-daftar').hide();
   
   $('#btn-daftar').click(function() {
      $('.form-login').hide();
      $('.form-daftar').show();
   });

   $('#btn-back').click(function() {
      $('.form-login').show();
      $('.form-daftar').hide();
   });
});
</script>

         
            </div>
		</div>
	</div>
      <!-- END PAGE CONTENT -->
   </div>
   <!-- END PAGE CONTAINER -->
   
   <!-- BEGIN PRE-FOOTER -->
   <div class="page-prefooter">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-5 col-sm-6 col-xs-12 footer-block">
               <h2>Alamat Kampus</h2>
               <p>
                     Kampus 1<br>
                     Jl. Kapas 9, Semaki, Umbulharjo, Yogyakarta 55166 <br><br>
                     Kampus 2<br>
                     Jl. Pramuka 42, Sidikan, Umbulharjo, Yogyakarta 55161 <br><br>
                     Kampus 3<br>
                     Jl. Prof. Dr. Soepomo, S.H., Janturan, Warungboto, Umbulharjo, Yogyakarta 55164 <br><br>
                     Kampus 4<br>
                     Jl.Ringroad Selatan, Yogyakarta <br><br>
                     Kampus 5<br>
                     Jl. Ki Ageng Pemanahan 19, Yogyakarta <br><br>
               </p>
            </div>
         
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
               <h2>Follow Us On</h2>
               <ul class="social-icons">
                  <li>
                     <a target="_blank" href="http://pmb.uad.ac.id/" data-original-title="rss" class="rss"></a>
                  </li>
                  <li>
                     <a target="_blank" href="http://www.facebook.com/admisi.pmbuad" data-original-title="facebook" class="facebook"></a>
                  </li>
                  <li>
                     <a target="_blank" href="http://www.twitter.com/pmb_uad" data-original-title="twitter" class="twitter"></a>
                  </li>
                  <li>
                     <a target="_blank" href="http://plus.google.com/admisi.uad" data-original-title="googleplus" class="googleplus"></a>
                  </li>
               </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
               <h2>Kontak</h2>
               <address class="margin-bottom-40">
                Telp. : (0274) 563515, 511830, 379418, 371120<br>
                Fax.  : (0274) 564604
               </address>
            </div>
         </div>
      </div>
   </div>
	<!-- END PRE-FOOTER -->
	<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="container-fluid">
			2026 © PMB UAD.
		</div>
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
   <script src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/jquery-migrate.min.js.download'); ?>" type="text/javascript"></script>
   <script src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/bootstrap.min.js.download'); ?>" type="text/javascript"></script>
   <script src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/bootstrap-hover-dropdown.min.js.download'); ?>" type="text/javascript"></script>
   <script src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/jquery.slimscroll.min.js.download'); ?>" type="text/javascript"></script>
   <script src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/jquery.blockui.min.js.download'); ?>" type="text/javascript"></script>
   <script src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/jquery.cokie.min.js.download'); ?>" type="text/javascript"></script>
   <script src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/jquery.uniform.min.js.download'); ?>" type="text/javascript"></script>
   <script src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/metronic.js.download'); ?>" type="text/javascript"></script>
   <script src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/layout.js.download'); ?>" type="text/javascript"></script>
   <script src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/demo.js.download'); ?>" type="text/javascript"></script>
   
   <script>
      jQuery(document).ready(function() {    
         Metronic.init(); // init metronic core componets
         Layout.init(); // init layout
         Demo.init(); // init demo(theme settings page)
      });
   </script>
</body>
<!-- END BODY -->
</html>
