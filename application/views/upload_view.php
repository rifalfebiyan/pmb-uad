<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Form Unggah / Upload Berkas Pendaftaran Online Mahasiswa Baru UAD | PMB Online</title>	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
   	<meta content="" name="author">
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/uniform.default.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/datepicker3.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/prettify.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/bootstrap-wysihtml5.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/summernote.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/toastr.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/tasks.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/bootstrap-fileinput.css'); ?>" type="text/css" rel="stylesheet">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/components-md.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/plugins-md.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/layout.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/default.css'); ?>" rel="stylesheet" type="text/css" id="style_color">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/custom.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/profile.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/portal.css'); ?>" rel="stylesheet" type="text/css">
</head>
<body class="page-md page-header-menu-fixed">
   <div class="page-header">
      <!-- BEGIN HEADER TOP -->
      <div class="page-header-top">
         <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
               <a href="<?= site_url('upload'); ?>">
                  <img src="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/logo-default.png'); ?>" alt="logo" class="logo-default">
                  <h5>PMB Online UAD</h5>
               </a>
            </div>
            <!-- END LOGO -->
            
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/avatar.png'); ?>">
                            <span class="username username-hide-mobile"><?= $this->session->userdata('email'); ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li class="divider"></li>
                            <li>
                                <a href="<?= site_url('logout'); ?>"><i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
         </div>
      </div>

      <!-- END HEADER TOP -->
      <!-- BEGIN HEADER MENU -->
      <div class="page-header-menu">
         <div class="container-fluid">
            <div class="hor-menu ">
                <ul class="nav navbar-nav">
					<li>
						<a href="<?= site_url('upload'); ?>">Home</a>
					</li>
                    <li class="">
                            <a href="#">
                                <i class=""></i>
                                Pendaftaran
                            </a>
                    </li>
                    <li class="active">
                            <a href="<?= site_url('upload'); ?>">
                                <i class=""></i>
                                Upload Berkas
                            </a>
                    </li>
                    <li class="">
                            <a href="#">
                                <i class=""></i>
                                Hasil Seleksi
                            </a>
                    </li>
                    <li class="">
                            <a href="#">
                                <i class=""></i>
                                Pendaftaran MBKM
                            </a>
                    </li>
                </ul>
            </div>
         </div>
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
                <h1>PMB Online <small>Form Unggah / Upload Berkas Pendaftaran Online Mahasiswa Baru UAD</small></h1>
            </div>
            <!-- END PAGE TITLE -->
         </div>
      </div>
      <!-- END PAGE HEAD -->
      <!-- BEGIN PAGE CONTENT -->
      <div class="page-content">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-10">
                   <div class="portlet light" id="form_wizard_1">
                      <div class="portlet-title">
                         <div class="caption">
                            <i class="fa fa-graduation-cap font-secondary"></i>
                            <span class="caption-subject font-secondary bold uppercase">Data Pendaftar</span>
                         </div>
                      </div>
                      <div class="note note-warning">
                         <p>Untuk mempercepat proses verifikasi, Pendaftar harap melengkapi berkas pendaftaran dengan mengunggah / mengupload berkas sesuai dengan jenis dokumen yang ditetapkan dibawah ini. Format dokumen yang diizinkan adalah <b>pdf</b> / <b>jpeg</b> / <b>jpg</b> atau <b>png</b> dan ukuran file maksimal <b>5 MB</b>. </p>
                      </div>

                      <?php if(isset($error) && $error): ?>
                      <div class="note note-danger">
                          <p><?= $error; ?></p>
                      </div>
                      <?php endif; ?>

                      <?php if(isset($success) && $success): ?>
                      <div class="note note-success">
                          <p><?= $success; ?></p>
                      </div>
                      <?php endif; ?>

                      <div class="table-scrollable table-scrollable-borderless">
                         <table class="table table-hover table-light">
                            <tbody>
                                <tr>
                                   <td width="250">Nomor Formulir Pendaftaran</td>
                                   <td>:</td>
                                   <td><?= $nomor_formulir; ?></td>
                                </tr>
                                <tr>
                                   <td>Nama</td>
                                   <td>:</td>
                                   <td><?= $nama; ?></td>
                                </tr>
                                <tr>
                                   <td>Jalur</td>
                                   <td>:</td>
                                   <td><?= $jalur; ?></td>
                                </tr>
                                <tr>
                                   <td>Asal SMA / PT</td>
                                   <td>:</td>
                                   <td><?= $asal_sma; ?></td>
                                </tr>
                                <tr>
                                   <td>Gelombang Daftar</td>
                                   <td>:</td>
                                   <td><?= $gelombang; ?></td>
                                </tr>
                                <tr>
                                   <td>Pilihan Prodi</td>
                                   <td>:</td>
                                   <td><?= $pilihan_prodi; ?></td>
                                </tr>
                            </tbody>
                         </table>
                      </div>
                      
                      <div class="portlet-title">
                         <div class="caption">
                            <i class="fa fa-file font-secondary"></i>
                               <span class="caption-subject font-secondary bold uppercase">Berkas Registrasi (Berkas Di upload setelah membayar biaya registrasi ulang)</span>
                         </div>
                      </div>
                
                      <div class="portlet-body form">
                          <form id="commentForm" method="post" action="<?= site_url('upload/do_upload'); ?>" class="form-horizontal form-bordered" enctype="multipart/form-data">
                            <div class="form-body">
                               <div class="form-group ">
                                  <label class="control-label col-md-3">
                                     Kartu Keluarga (KK File PDF)
                                     <?php if(isset($uploaded_file) && $uploaded_file): ?>
                                        <br><small>File terupload: <a target="_blank" href="<?= base_url('document/dokumen/' . $uploaded_file->file_name); ?>"><?= $uploaded_file->file_name; ?></a></small>
                                     <?php endif; ?>
                                  </label>
                                  <div class="col-md-9">
                                     <?php 
                                     $has_file = isset($uploaded_file) && !empty($uploaded_file);
                                     $file_path = $has_file ? base_url('document/dokumen/' . $uploaded_file->file_name) : '';
                                     $is_image = $has_file && preg_match('/\.(jpg|jpeg|png|gif)$/i', $uploaded_file->file_name);
                                     ?>
                                     <div class="fileinput <?= $has_file ? 'fileinput-exists' : 'fileinput-new'; ?>" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                            <?php if ($is_image): ?>
                                                <img src="<?= $file_path; ?>" alt="Preview">
                                            <?php elseif ($has_file): ?>
                                                <a href="<?= $file_path; ?>" target="_blank" class="btn btn-default btn-block" style="height:100%; display:flex; align-items:center; justify-content:center;">Download PDF</a>
                                            <?php endif; ?>
                                        </div>
                                        <div>
                                           <span class="btn green btn-outline btn-file">
                                                <span class="fileinput-new"> Select file </span>
                                                <span class="fileinput-exists"> Select file</span>
                                              <input type="file" name="berkas_kk">
                                           </span>

                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            

             
                            <div class="form-actions">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-6 note note-success">
                                   <p>          Semua berkas yang diunggah adalah benar dan dapat dipertanggungjawabkan. Apabila dikemudian hari ditemukan pelanggaran terhadap berkas yang diunggah, Universitas Ahmad Dahlan berhak memberikan sanksi terhadap calon mahasiswa yang bersangkutan.</p>
                                </div>
                             </div>

                            <div class="form-actions">
                            <div class="row">
                              <div class="col-md-offset-3 col-md-9">
                                  <button type="submit" class="btn red" id="DoSimpan" disabled>
                                     <i class="fa fa-upload"></i> Upload
                                  </button>
                                  <button type="reset" class="btn default" id="DoBatal">
                                     <i class="fa fa-times"></i> Batal
                                  </button>
                              </div>
                            </div>
                         </div>
                       </form>
                      </div>
                   </div>
                </div>
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
			2016 © Biskom UAD.
		</div>
	</div>
	<div class="scroll-to-top" style="display: none;">
		<i class="icon-arrow-up"></i>
	</div>
	<!-- END FOOTER -->
   
   <!-- SCRIPTS -->
   <script src="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/jquery.min.js.download'); ?>" type="text/javascript"></script>
   <script src="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/bootstrap.min.js.download'); ?>" type="text/javascript"></script>
   <script type="text/javascript" src="<?= base_url('halaman%20add%20file/Form%20Unggah%20_%20Upload%20Berkas%20Pendaftaran%20Online%20Mahasiswa%20Baru%20UAD%20_%20PMB%20Online_files/bootstrap-fileinput.js.download'); ?>"></script>
   
   <script type="text/javascript">
       $(document).ready(function() {
           // Initial check
           // If file exists (preview image or link shown), enable button if needed, 
           // BUT user requirements say "if no file selected, button doesn't work". 
           // However, if a file is ALREADY uploaded, maybe they want to upload a NEW one?
           // Let's stick to the behavior: Disable by default, enable when a file is SELECTED.
           
           // Listen for file changes
           $('input[type=file]').change(function() {
               if($(this).val()) {
                   $('#DoSimpan').removeAttr('disabled');
               } else {
                   $('#DoSimpan').attr('disabled', true);
               }
           });

           // Handle Remove button click (Bootstrap fileinput event)
           $('.fileinput').on('clear.bs.fileinput', function() {
               $('#DoSimpan').attr('disabled', true);
           });

           // Handle manual reset (Batal button)
           $('#DoBatal').click(function() {
               $('.fileinput').fileinput('clear');
               $('#DoSimpan').attr('disabled', true);
           });
       });
   </script>
   
</body>
</html>
