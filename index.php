<!DOCTYPE html>

<?php 
  session_start();
  include_once 'function/helper.php';
  include_once("function/koneksi.php");
  
  $page = isset($_GET['page']) ? $_GET['page'] : false;
  
  $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
  $nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
  $phone = isset($_SESSION['phone']) ? $_SESSION['phone'] : false;
  $alamat = isset($_SESSION['alamat']) ? $_SESSION['alamat'] : false;
  $level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
 
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edu Covid</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="penilaian.js"></script>


</head>
<body>
		<?php
            if($user_id){
              $module = isset($_GET['module']) ? $_GET['module'] : false;
              $action = isset($_GET['action']) ? $_GET['action'] : false;
              $mode = isset($_GET['mode']) ? $_GET['mode'] : false;
                 echo "<header>
							<div class='container'>
								<h1><a href='index.php'>EDU-COVID</a></h1>
								<ul>
									<li>Hi <b>$nama</b>, <a href='".base_url."?page=home'>Home</a></li>
									<li><a href='".base_url."?page=pencegahan'>Pencegahan COVID-19</a></li>
									<li><a href='".base_url."?page=datacovid'>Data dan Statistik</a></li>
									<li><a href='".base_url."?page=kuis'>Kuis</a></li>
									<li><a href='".base_url."?page=kontak'>Kontak</a></li>
									<li><a href='".base_url."?page=keluar'>Keluar</a></li>

						 		</ul>
						 	</div>
						 </header>";
          
                $file = "$page.php";
                  if(file_exists($file)){
                    include_once($file);
                  }else{
                    include_once("home.php");
                  }
            }else{
                echo "	 <header>
							<div class='container'>
								<h1><a href='index.php'>EDU-COVID</a></h1>
								<ul>
									<li><a href='".base_url."?page=home'>Home</a></li>
									<li><a href='".base_url."?page=pencegahan'>Pencegahan COVID-19</a></li>
									<li><a href='".base_url."?page=datacovid'>Data dan Statistik</a></li>
									<li><a href='".base_url."?page=kuis'>Kuis</a></li>
									<li><a href='".base_url."?page=kontak'>Kontak</a></li>
									<li><a href='".base_url."?page=login'>Login</a></li>
									<li><a href='".base_url."?page=register'>Register</a></li>
						 		</ul>
						 	</div>
						 </header>";

                $filename = "$page.php";
                if(file_exists($filename)){
                  include_once($filename);
                }else{
                  include_once("home.php");
                }
            } 
        ?>
     <div class="row-padding"></div>   
	 	<footer class="row-padding text-center">
	 		<div class="footer1">
	 			<b><small><center>Rumah Sakit YARSI - © Copyright 2021. All Rights Reserved</small></b></center>
	 		</div>
	 	</footer>
   </div> 
	 </body>
	</html>
