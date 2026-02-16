<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login : Auth | PMB Online</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    
    <!-- STYLES -->
    <link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/uniform.default.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/components-md.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/plugins-md.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/layout.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/default.css'); ?>" rel="stylesheet" type="text/css" id="style_color">
    <link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/custom.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/profile.css'); ?>" rel="stylesheet" type="text/css">
    
    <style>
        .login-content { padding: 20px; }
        .page-content { min-height: 500px; }
    </style>
</head>
<body class="page-md page-header-menu-fixed">
   <div class="page-header">
      <div class="page-header-top">
         <div class="container-fluid">
            <div class="page-logo">
               <a href="<?= base_url(); ?>">
                  <img src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/logo-default.png'); ?>" alt="logo" class="logo-default">
                  <h5>PMB Online UAD</h5>
               </a>
            </div>
         </div>
      </div>
      <div class="page-header-menu">
         <div class="container-fluid">
            <div class="hor-menu ">
                <ul class="nav navbar-nav">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li><a href="#">Pendaftaran</a></li>
                    <li><a href="#">Jalur Masuk</a></li>
                    <li><a href="#" target="_blank">Info PMB</a></li>
                </ul>
            </div>
         </div>
      </div>
   </div>
   
   <div class="page-container">
      <div class="page-head">
         <div class="container-fluid">
            <div class="page-title">
                <h1>PMB Online <small>Login : Auth</small></h1>
            </div>
            <div class="page-toolbar">
               <div class="btn-group btn-theme-panel">
                  <a class="btn btn-xs red" href="<?= base_url(); ?>" aria-expanded="false">
                     Login / Register
                  </a>
               </div>
            </div>
         </div>
      </div>
      
      <div class="page-content">
         <div class="container-fluid">
            <ul class="page-breadcrumb breadcrumb">
                <li class="active">Login Form</li>
            </ul>
            
            <div class="row">
                <div class="col-md-6">
                   <div class="portlet light">
                      <div class="portlet-title">
                         <div class="note note-success">
                            <h4 class="block" style="font-weight: 800">Selamat datang, Dahlan Muda!</h4>
                            <p> Silahkan isi form login jika sudah memiliki akun. </p>
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
                            
                            <!-- FORM LOGIN -->
                            <?= form_open('login/process', array('class' => 'form-horizontal form-login', 'role' => 'form')); ?>
                               <div class="profile-userbuttons">
                                  <div class="col-md-12 form-group ">
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
                
                               <div class="row form-group">
                                    <div class="col-sm-12">
                                       <button type="submit" class="btn blue pull-right">
                                       Login <i class="m-icon-swapright m-icon-white"></i>
                                       </button>
                                    </div>
                               </div>
                            <?= form_close(); ?>
                            
                         </div>
                      </div>
                   </div>
                </div>
                
                <div class="col-md-6">
                   <div class="login-bg">
                      <span><img width="510" class="img-responsive" alt="" src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/web-baner-pmb-online-2026.png'); ?>" height="460"></span>   
                   </div>
                </div>
            </div>
		</div>
	  </div>
   </div>
   
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
	<div class="scroll-to-top" style="display: none;">
		<i class="icon-arrow-up"></i>
	</div>
	<!-- END FOOTER -->

   <!-- SCRIPTS -->
   <script src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/jquery.min.js.download'); ?>" type="text/javascript"></script>
   <script src="<?= base_url('halaman%20login/Login%20_%20Auth%20_%20PMB%20Online_files/bootstrap.min.js.download'); ?>" type="text/javascript"></script>
</body>
</html>
