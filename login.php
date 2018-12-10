<?php
  include 'all.php';
?>

  <script type="text/javascript">
    var     head = document.getElementsByTagName('head')[0],
            link1 = document.createElement('link'),
            link2 = document.createElement('link');
    link1.href='assets/bootstrap/css/form-elements.css';
    link1.rel='stylesheet';
    link2.href='assets/bootstrap/css/style.css';
    link2.rel='stylesheet';
    head.appendChild(link1);
    head.appendChild(link2);
  </script>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-image:url('images/backgrounds/1.jpg');padding-bottom:2%;background-repeat: no-repeat;background-size: cover;" >
      <div class="row" style="margin:0 3%;">
        <div class="modal fade bd-example-modal-lg error" id="error" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg1">
            <div class="modal-content" style="width:100%:">
              <div class="modal-header">
                <h3 class="modal-title" >Login Error</h3>
              </div>
              <div class="modal-body xsfonts" style="" id="folist2">
                Invalid Email ID or Password
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" style="font-size:15px;" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade bd-example-modal-lg error1" id="error1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg1">
            <div class="modal-content" style="width:100%:">
              <div class="modal-header">
                <h3 class="modal-title" >Login Error</h3>
              </div>
              <div class="modal-body xsfonts" style="" id="folist2">
                Invalid Details
              </div>
              <div class="modal-footer">
               <button type="button" class="btn btn-default" style="font-size:15px;" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade bd-example-modal-lg error2" id="error2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg1">
            <div class="modal-content" style="width:100%:">
              <div class="modal-header">
                <h3 class="modal-title" >Login Error</h3>
              </div>
              <div class="modal-body xsfonts" style="" id="folist2">
               Enter Details
              </div>
              <div class="modal-footer">
               <button type="button" class="btn btn-default" style="font-size:15px;" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <?php
          if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id']))
          {
        ?>

        <div class="col-sm-5" align="center">
          <div class="form-box">
            <div class="form-top">
              <div class="form-top-left">
                <h3>Login</h3>
                <p>Enter username and password to log on:</p>
              </div>
              <div class="form-top-right">
                <i class="fa fa-lock"></i>
              </div>
            </div>
            <div class="form-bottom">
              <form role="form" action="login_reg_scripts/logincode.php" method="post" class="login-form">
                <div class="form-group">
                  <label class="sr-only" for="form-username">Email</label>
                    <input type="text" name="email" placeholder="Email" class="form-username form-control" id="form-username">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="form-password">Password</label>
                    <input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password">
                  </div>
                  <button type="submit" class="btn">Login</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-1 middle-border hidden-xs"></div>
        <div class="col-sm-1"></div>

        <div class="col-sm-5">
          <div class="form-box" >
            <div class="form-top">
              <div class="form-top-left">
                <?php
                  if(isset($_GET['redirect']))
                  {
                    if($_GET['redirect']=='reg')
                    {
                      echo '<h3>You have Signed up</h3>
                      <p>Login to get instant access:</p>';
                    }
                  }
                  else
                  {
                    echo '<h3>Sign up now</h3>
                    <p>Register below to get instant access:</p>';
                  }
                ?>
              </div>
              <div class="form-top-right">
                <i class="fa fa-pencil"></i>
              </div>
            </div>
            <div class="form-bottom" style="display:<?php if(($_GET['redirect'])=='reg'){echo'none';}?>;">
                  <a href="reg.php"><button style="width:100%;margin-bottom: 14px;"  class="btn">Student Registration</button></a>
                  <a href="donarreg.php"><button style="width:100%;margin-bottom:14px"  class="btn">Donor Registration</button></a>
            </div>
          </div>

        </div>
        <?php
          }
          else
          {
            //echo "<script>alert('".$user_type."')</script>";
            $url="";
            if($user_type=="1")
            {
              echo '<script type="text/javascript">';
              echo 'window.location.href="profile.php";';
              echo '</script>';
            }
            else if($user_type=="2")
            {
              echo '<script type="text/javascript">';
              echo 'window.location.href="admindash/pages/widgets.php";';
              echo '</script>';
            }
            else if($user_type=="3")
            {
              echo '<script type="text/javascript">';
              echo 'window.location.href="donor.php";';
              echo '</script>';
            }
            else if($user_type=="4")
            {
              echo '<script type="text/javascript">';
              echo 'window.location.href="profile.php";';
              echo '</script>';
            }
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.$url.'";';
            echo '</script>';
          }
        ?>
    </div>
  </div>
  <!-- /.content-wrapper -->
  <?php
    include 'footer.php';
  ?>
  <script>
    //shortcut for $(document).ready
    var hash = window.location.hash;
    if (hash.substring(1) == 'error')
    {
        $(hash).modal('toggle');
    }
    if(hash.substring(1) == 'error1')
    {
        $(hash).modal('toggle');
    }
    if(hash.substring(1) == 'error2')
    {
        $(hash).modal('toggle');
    }
  </script>
