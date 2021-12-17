<?php

include 'connection.php';
include 'admin_header.php';


 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/add/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">ADD ADMIN</h2>
                        <form method="POST" class="register-form" id="register-form" action="add_server.php" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                              <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="phone" id="phone" placeholder="Your Phone"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                       
                      
                            <div class="form-group form-button">
                                <input type="submit" name="add" id="signup" class="form-submit" value="Submit"/>
                            </div>
                        
                    </div>
                    <div class="signup-image">
                        <figure><img src="../img/add_admin.png" alt="Admin"  id="OpenImgUpload"></figure>
                        <input type="file" id="profile_pic" name="pic" style="display:none"/>
                    </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
    

    </div>

    <!-- JS -->
    <script src="assets/add/vendor/jquery/jquery.min.js"></script>
    <script src="assets/add/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php include 'admin_footer.php'; ?>
<script >
	$('#OpenImgUpload').click(function(){ $('#profile_pic').trigger('click'); });	

	  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#OpenImgUpload').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile_pic").change(function(){
        readURL(this);
    });

</script>