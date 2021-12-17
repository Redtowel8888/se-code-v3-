<?php include 'header.php'; ?>
<style type="text/css">
  
.global-container{
  height:100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #f5f5f5;
}

form{
  padding-top: 10px;
  font-size: 14px;
  margin-top: 30px;
}

.card-title{ font-weight:300; }

.btn{
  font-size: 14px;
  margin-top:20px;
}


.login-form{ 
  width:330px;
  margin:20px;
}

.sign-up{
  text-align:center;
  padding:20px 0 0;
}

.alert{
  margin-bottom:-30px;
  font-size: 13px;
  margin-top:20px;
}
</style>
<div class="global-container">
  <div class="card login-form">
  <div class="card-body">
    <h3 class="card-title text-center">Log in to Parking</h3>
    <div class="card-text">
      <!--
      <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
      <form method="POST" action="login_server.php" enctype="multipart/form-data">
        <!-- to error: add class "has-danger" -->
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control form-control-sm" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
         
          <input type="password" class="form-control form-control-sm" name="password" id="exampleInputPassword1">
        </div>
       <input type="submit" name="login" value="Login" class="btn btn-danger btn-block">        
        <div class="sign-up">
          <?php if (isset($_GET['Invalid'])) { ?> <label style="color: red;"> <?php echo $_GET['Invalid']; ?></label> <br><?php } ?>
          Don't have an account? <a href="signup.php" class="text text-danger">Create One</a>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<?php include 'footer.php'; ?>