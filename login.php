<?php
ob_start();
session_start ();
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
        margin-top: 30px;
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
      .divcenter { 
        margin-top: 0px!important;
       }
    </style>  

  </head>
  <body>
    <?php
    include 'header1.php';
    include 'database.php';
    
    if (isset($_POST["login-form-submit"])) {
      $username = $_POST["username"];
      $password = $_POST["password"];
      $username = strip_tags($username);
      $username = addslashes($username);
      $password = strip_tags($password);
      $password = addslashes($password);
      if ($username == "" || $password =="") {
        echo "<script>alert ('Username ho???c password b???n kh??ng ???????c ????? tr???ng!');</script>";
      }
      else{
        if(isset($_POST["role"]))
        {
          $sql = "select rolename from admin inner join role on admin.role = role.idrole where username = '$username' and password = '$password' ";
          $result = mysqli_query ($conn,$sql);
          if (mysqli_num_rows($result)==0) {
            echo "<script>alert ('T??n ????ng nh???p ho???c m???t kh???u kh??ng ????ng !');</script>";
          }else{
            $_SESSION['username'] = $username;
            while( $r = mysqli_fetch_row($result))
            {
              $_SESSION['role'] = $r[0];
            }
                    header('Location: admin/home.php');
        }
      }
      else
      {
        $sql = "select * from user where username = '$username' and password = '$password' ";
        $result = mysqli_query ($conn,$sql);
        if (mysqli_num_rows($result)==0) {
          echo "<script>alert ('T??n ????ng nh???p ho???c m???t kh???u kh??ng ????ng !');</script>";
        }else{
          while( $r = mysqli_fetch_row($result))
          {
          $_SESSION['customer'] = $r[0];
          }
                  header('Location: shopbeauty.php');
      }
      }
    }
  }
    ob_end_flush();
    ?>
    <div class="container clearfix">
        <div class="accordion divcenter clearfix" style="max-width: 900px;">

          <!-- login -->
          <div id="login">
            <div class="acctitle">
              <i class="acc-closed fa fa-lock" style="padding-right: 5px;"></i>
              ????ng nh???p
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <form accept-charset="UTF-8" id="customer_login" method="post">

                  <div class="form-group">
                    <label for="login-form-username">T??n ????ng nh???p:</label>
                    <input id="login-form-username" name="username" value="" class="input-sm form-control" type="text">
                  </div>

                  <div class="form-group">
                    <label for="login-form-password">M???t kh???u:</label>
                    <input id="login-form-password" name="password" value="" class="input-sm form-control" type="password">
                  </div>

                  <input name="role" value="" type="checkbox"> ????ng nh???p v???i t?? c??ch admin

                  <div class="form-group">
                    <button class="button button-black nomargin" id="login-form-submit" name="login-form-submit" type="submit" value="login">????ng nh???p</button>
                    <div class="fright text-right">
                      <a href="" style="display:block;" onclick="showRecoverPasswordForm();return false;">Qu??n m???t kh???u?</a>
                      <a href="register.php" style="display:block;">Ch??a c?? t??i kho???n? ????ng k??</a>
                    </div>
                  </div>
                  <!--</form>-->
                </form>
              </div>

            </div>
          </div>
          <!-- end login -->
          <!-- forgot password -->
          <div id="recover-password" style="display:none;" class="userbox">
            <div class="acctitle"><i class="fa fa-refresh" style="padding-right: 7px;"></i>Qu??n m???t kh???u</div>
            <div class="">
              <form accept-charset="UTF-8" action="/account/recover" id="recover_customer_password" method="post">
                
                <div class="col_full">
                  <label for="recover-email">Email:</label>
                  <input id="recover-email" name="email" value="" class="input-sm form-control" type="text">
                </div>

                <div class="col_full " style="margin-top: 20px;">
                  <button class="button" type="submit">G???i</button>
                  <button class="button" onclick="hideRecoverPasswordForm(); return false;" name="">H???y</button>
                </div>
              </form>
            </div>   
          </div>
          <!-- end forgot password -->
        </div>
        
    </div>

    <?php
      include "footer.php";
    ?>
  </body>
</html>