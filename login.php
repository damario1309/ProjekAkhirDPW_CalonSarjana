<?php

  if($user_id){
    header("location: ".base_url);
  }

?> 
    <section class="ask">
      <div class="askme">
        <h2>Login</h2>
      </div>
      <div class="formNya">
        <form action="<?php echo base_url."akses_login.php"; ?>" method="post">
          <div class="form">
            <label for="email">Email:</label>
          </div>
          <div class="input">
            <input type="email" id="email" name="email" placeholder ="Enter Email">
          </div>
          <div class="form">
            <label for="email">Password:</label>
          </div>
          <div class="input">
            <input type="password" id="password" name="password" placeholder ="Enter Password">
          </div>
        <div class="form">
          <button type="submit" value="Login">Login!</button>
         </div>
        </form>
      </div>
  </section>
