<?php 
  include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    
    <title>Login Page</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <style type="text/css" media="screen">
      .divcenter {
        margin-top: 20px;
        position: relative !important;
        float: none !important;
        margin-left: auto !important;
        margin-right: auto !important;
      }
      .nobottommargin {
        margin-bottom: 0 !important;
      }
      .acctitle {
          padding-top: 5px;
          padding-bottom: 5px;
          font-size: 20px;
          line-height: 35px;
          font-weight: 400;
      }
      .button {
          display: inline-block;
          position: relative;
          cursor: pointer;
          outline: none;
          white-space: nowrap;
          margin: 5px;
          padding: 0 22px;
          font-size: 14px;
          height: 40px;
          line-height: 40px;
          background-color: #00c5bb;
          color: #FFF;
          font-weight: 600;
          text-transform: uppercase;
          letter-spacing: 1px;
          border: none;
          text-align: center;
      }
      .button:hover {
          background-color: #ff7a13;
      }
      .require_symbol {
          color: red !important;
      }
      .divcenter { 
        margin-top: 0px!important;
       }

    </style>  

  </head>
  <body>
    <?php
      include "header.php";
    ?>
    
    <div class="container clearfix">
        <div class="accordion divcenter clearfix" style="max-width: 900px;">

          <!-- login -->
          <div id="login">
            <div class="acctitle">
              <i class="acc-closed fa fa-user" style="padding-right: 5px;"></i>
              Người dùng mới? Đăng ký tài khoản
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="login-form-lastname">Họ Tên:
                      <span class="required require_symbol">*</span>
                    </label>
                    <input id="name" name="name" value="" class="input-sm form-control" type="text" required>
                  </div>

                  <div class="form-group">
                    <label for="firstname">Số điện thoại:
                      <span class="required require_symbol">*</span>
                    </label>
                    <input id="phone" name="phone" value="" class="input-sm form-control" type="text" required>
                  </div>

                  <div class="form-group">
                    <label for="firstname">Địa chỉ:
                      <span class="required require_symbol">*</span>
                    </label>
                    <input id="address" name="address" value="" class="input-sm form-control" type="text" required>
                  </div>

                  <div class="form-group">
                    <label for="email">Email:
                      <span class="required require_symbol">*</span>
                    </label>
                    <input id="email" name="email" value="" class="input-sm form-control" type="email" required>
                  </div>

                  <div class="form-group">
                    <label for="email">Username:
                      <span class="required require_symbol">*</span>
                    </label>
                    <input id="username" name="username" value="" class="input-sm form-control" type="text" required>
                  </div>

                  <div class="form-group">
                    <label for="password">Mật khẩu:
                      <span class="required require_symbol">*</span>
                    </label>
                    <input id="password" name="password" value="" class="input-sm form-control" type="password" required>
                  </div>

                  <div class="form-group">
                    <label for="repassword">Nhắc lại mật khẩu:
                      <span class="required require_symbol">*</span>
                    </label>
                    <input id="repassword" name="repassword" value="" class="input-sm form-control" type="password" required>
                  </div>

                  <div class="form-group">
                    <button class="button button-black nomargin btnregister" name="login-form-submit" value="login">Đăng ký</button>
                  </div>
                  <!--</form>-->
              </div>

            </div>
          </div>
          <!-- end login -->
        </div>
        
    </div>

    <?php
      include "footer.php";
    ?>
    <!--jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $(".btnregister").click(function(){
            var name = $("#name").val();
            var address = $("#address").val();
            var phone = $("#phone").val();
            var username = $("#username").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var repassword = $("#repassword").val();
            if(repassword!=password)
            {
              alert("Repassword not is correct");
            }
            $.ajax({
              url: 'login-register.php',
              type: 'post',
              dataType: 'text',
              data: {
                "name": name,
                "address": address,
                "phone": phone,
                "email":email,
                "password": password,
                "username":username
              },
              success: function(result){
                alert(result);
                window.location.replace("shopbeauty.php");
              }
            });
          });
        });  
    </script>
  </body>
</html>