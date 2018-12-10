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

        <?php
          if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
          {
        ?>

        <div class="col-sm-offset-3 col-sm-5">
          <div class="form-box" >
            <div class="form-top">
              <div class="form-top-left">
                <?php
                    echo '<h3>Academics Details</h3>
                    <p>Give your Academic Details to apply for scholarship</p>';
                ?>
              </div>
              <div class="form-top-right">
                <i class="fa fa-pencil"></i>
              </div>
            </div>
            <div class="form-bottom">
                <form role="form" action="login_reg_scripts/apply2.php" method="post" class="registration-form"  enctype="multipart/form-data">
                  <div class="form-group">
                    <label style="color:white;" for="form-Institution name">Institution name</label>
                      <input type="text" name="iname" placeholder=" " class="form-first-name form-control" id="form-first-name">
                  </div>
                  <div style="color:white;" class="form-group">
                    <h5>Pursuing Field:</h5>
                  </div>
                  <div class="form-group" style="width:100%">
                    <select name="typeedu" style="width:100%; font-family: 'Roboto', sans-serif;color: #888;font-size: 16px;height: 50px;font-weight: 300;line-height: 50px;">
                      <option value="7th Std">7th Std</option><option value="8th Std">8th Std</option><option value="9th Std">9th Std</option>
                      <option value="10th Std">10th Std</option><option value="11th Std">11th Std</option><option value="12th">12th Std</option>
                      <option value="Grad 1st year">Graduation 1st Year</option>
                      <option value="Grad 2nd year">Graduation 2nd Year</option>
                      <option value="Grad 3rd year">Graduation 3rd Year</option>
                      <option value="Grad 4th year">Graduation 4th Year</option>
                      <option value="Grad 5th year">Graduation 5th Year</option>
                    </select>
                  </div>

                  <button type="submit" class="btn">Submit!</button>
                </form>
            </div>
          </div>

        </div>
        <?php
          }
          else
          {
            echo '<script type="text/javascript">';
            echo 'window.location.href="profile.php";';
            echo '</script>';
          }
        ?>
    </div>
  </div>
  <!-- /.content-wrapper -->
  <?php
    include 'footer.php';
  ?>
