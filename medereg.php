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
          if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id']))
          {
        ?>

        <div class="col-sm-offset-3 col-sm-5">
          <div class="form-box" >
            <div class="form-top">
              <div class="form-top-left">
                <?php 
                    echo '<h3>Sign up now</h3>
                    <p>Register below to get instant access:</p>';
                ?>
              </div>
              <div class="form-top-right">
                <i class="fa fa-pencil"></i>
              </div>
            </div>
            <div class="form-bottom" style="display:<?php if(($_GET['redirect'])=='reg'){echo'none';}?>;">
                <form role="form" action="login_reg_scripts/proreg.php" method="post" class="registration-form">
                  <div class="form-group">
                    <label class="sr-only" for="form-first-name">First name</label>
                      <input type="text" name="firstname1" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                  </div> 
                  <div class="form-group">
                    <label class="sr-only" for="form-last-name">Last name</label>
                      <input type="text" name="surname1" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="form-email">Email</label>
                    <input type="text" name="email1" placeholder="Email..." class="form-email form-control" id="form-email">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="form-email">Password</label>
                    <input type="password" name="password1" placeholder="Password..." class="form-email form-control" id="form-email">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="form-email">Confirm Password</label>
                    <input type="password" name="password2" placeholder="Confirm Password..." class="form-email form-control" id="form-email">
                  </div> 
                  <div class="form-group"  style="display: none;">
                    <label class="sr-only" for="form-first-name"></label>
                      <input type="text" value="4" name="type" placeholder="" class="form-first-name form-control" id="form-first-name">
                  </div> 
                  <div class="form-group">
                      <label class="sr-only" for="form-first-name"></label>
                      <input type="text"  name="spreadsheet" placeholder="Spreadsheet ID..." class="form-first-name form-control" id="form-first-name">
                  </div> 
                  <div style="color:white;" class="form-group">
                    <h4>Your Location</h4>
                  </div>
                  <?php include 'Maps/locationpick.php';?>
                  <div style="color:white;" class="form-group">
                    <h4>Gender</h4>
                  </div>
                  <div style="color:white;font-weight:normal;" class="form-group">
                    <div class="radio">
                      <label style="font-size:16px;"><input type="radio" name="gender1" value="male">Male</label>
                    </div>
                    <div style="color:white;" class="radio">
                      <label style="font-size:16px;font-weight:normal;"><input type="radio" name="gender1" value="female">Female</label>
                    </div>
                  </div>
                  <div style="color:white;" class="form-group">
                    <h4>Date of Birth:</h4>
                  </div>
                  <div class="form-group" >
                    <select name="dob1" style="width:15%;font-family: 'Roboto', sans-serif;color: #888;font-size: 16px;height: 50px;font-weight: 300;line-height: 50px;">
                      <option value="1">01</option><option value="2">02</option><option value="3">03</option>
                      <option value="4">04</option><option value="5">05</option><option value="6">06</option>
                      <option value="7">07</option><option value="8">08</option><option value="9">09</option>
                      <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                      <option value="13">13</option><option value="14">14</option><option value="15">15</option>
                      <option value="16">16</option><option value="17">17</option><option value="18">18</option>
                      <option value="19">19</option><option value="20">20</option><option value="21">21</option>
                      <option value="22">22</option><option value="23">23</option><option value="24">24</option>
                      <option value="25">25</option><option value="26">26</option><option value="27">27</option>
                      <option value="28">28</option><option value="29">29</option><option value="30">30</option>
                      <option value="31">31</option>
                    </select>
                    <select name="month1" style="width:15%;font-family: 'Roboto', sans-serif;color: #888;font-size: 16px;height: 50px;font-weight: 300;line-height: 50px;">
                      <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option>
                      <option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option>
                      <option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
                    </select>
                    <select name="year1" style="width:25%;font-family: 'Roboto', sans-serif;color: #888;font-size: 16px;height: 50px;font-weight: 300;line-height: 50px;">
                      <option value="1985">1985</option><option value="1985">1985</option><option value="1986">1986</option>
                      <option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option>
                      <option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option>
                      <option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option>
                      <option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option>
                      <option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option>
                    </select>
                  </div>
                  <button type="submit" class="btn">Sign me up!</button>
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
