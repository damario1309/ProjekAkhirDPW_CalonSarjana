<?php

  if($user_id){
    header("location: ".base_url);
  }

?> 
    <section class="ask">
      <div class="askme">
        <h2>Register</h2>
      </div>
      <div class="formNya">
        <form action="<?php echo base_url."registers.php"; ?>" method="post">
           <?php
              $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
              $nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
              $email = isset($_GET['email']) ? $_GET['email'] : false;
              $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;
              $tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : false;
      
              if($notif == "require"){
                echo "<div class='notif'>Maaf, kamu harus melengkapi form dibawah ini</div>";
              }else if($notif == "password"){
                echo "<div class='notif'>Maaf, password yang kamu masukan tidak sama</div>";
              }else if($notif == "email"){
                echo "<div class='notif'>Maaf, email yang kamu masukan sudah terdaftar</div>";
              }
            ?>
          <div class="form">
            <label for="nama_lengkap">Nama:</label>
          </div>
          <div class="input">
            <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" placeholder ="Enter Nama">
          </div>
          <div class="form">
            <label for="umur">Umur:</label>
          </div>
          <div class="input">
            <input type="number" id="umur" name="umur" value="<?php echo $umur; ?>" placeholder ="Enter Umur">
          </div>
          <div class="form">
            <label for="kelamin">Kelamin:</label>
          </div>
          <div class="input">
            <span>
              <input type="radio" value="laki-laki" name="kelamin" <?php if($level == "laki-laki"){ echo "checked"; } ?> /> laki-laki
              <input type="radio" value="perempuan" name="kelamin" <?php if($level == "perempuan"){ echo "checked"; } ?> /> perempuan      
            </span>          
          </div>
          <div class="form">
            <label for="date">Tanggal Lahir :</label>
          </div>
          <div class="input">
            <input type="date" id="tanggal" name="tanggal" value="<?php echo $tanggal; ?>" placeholder ="Enter Tanggal Lahir">
          </div>
          <div class="form">
            <label for="email">Email:</label>
          </div>
          <div class="input">
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder ="Enter Email">
          </div>
          <div class="form">
            <label>Alamat:</label>
          </div>
          <div class="input">
            <textarea name="alamat"></textarea>
          </div>
          <div class="form">
            <label for="password">Password:</label>
          </div>
          <div class="input">
            <input type="password" id="password" name="password" value="<?php echo $password; ?>" placeholder ="Enter Password">
          </div>
          <div class="form">
            <label for="password">Re-Password:</label>
          </div>
          <div class="input">
            <input type="password" id="re_password" name="re_password" value="<?php echo $re_password; ?>" placeholder ="Enter Password">
          </div>

        <div class="form">
          <button type="submit" value="Login">Register!</button>
         </div>
        </form>
      </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br><br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
