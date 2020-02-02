<div class="register-box">
  <div class="register-logo">
    Register Mahasiswa
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Isi data di bawah ini</p>

      <form action="<?= base_url('Register/f_register');?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="npm" placeholder="NPM">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-id-card"></span>
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
          <input type="password" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
      <a href="<?= base_url('Login') ?>" class="text-center">Sudah punya akun ?</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>

<!-- <div class="login-form">
	<form action="<?= base_url('Register/f_register');?>" method="post">
		<h2 class="text-center">Register</h2>    		  		
		<div class="form-group">			
			<?= $this->session->flashdata('message'); ?>
		</div>		
		<div class="form-group">
			<input type="text" name="username" class="form-control" placeholder="Username" required="required">
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Password" required="required" id="txtPassword">
		</div>
		<div class="form-group">
			<input type="password" name="retype-password" class="form-control" placeholder="retype-password" required="required" id="txtConfirmPassword">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block" id="btnSubmit">Register</button>
		</div>
		<div class="clearfix">
			<label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
		</div>        
	</form>
	<p class="text-center"><a href="#">Login</a></p>
</div>

<script type="text/javascript">
    window.onload = function () {
        document.getElementById("txtPassword").onchange = validatePassword;
        document.getElementById("txtConfirmPassword").onchange = validatePassword;
    }

    function validatePassword(){
    var pass2=document.getElementById("txtPassword").value;
    var pass1=document.getElementById("txtConfirmPassword").value;
    if(pass1!=pass2)
        document.getElementById("txtPassword").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
    else
        document.getElementById("txtConfirmPassword").setCustomValidity('');
    }
</script> -->