<?php
  include'all.php';
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
<style>
  .bg-title{
    background: rgba(60,141,188,1);
    background: -moz-linear-gradient(left, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 59%, rgba(80,161,208,1) 97%, rgba(80,161,208,1) 100%);
    background: -webkit-gradient(left top, right top, color-stop(0%, rgba(60,141,188,1)), color-stop(0%, rgba(60,141,188,1)), color-stop(59%, rgba(60,141,188,1)), color-stop(97%, rgba(80,161,208,1)), color-stop(100%, rgba(80,161,208,1)));
    background: -webkit-linear-gradient(left, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 59%, rgba(80,161,208,1) 97%, rgba(80,161,208,1) 100%);
    background: -o-linear-gradient(left, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 59%, rgba(80,161,208,1) 97%, rgba(80,161,208,1) 100%);
    background: -ms-linear-gradient(left, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 59%, rgba(80,161,208,1) 97%, rgba(80,161,208,1) 100%);
    background: linear-gradient(to right, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 59%, rgba(80,161,208,1) 97%, rgba(80,161,208,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dd4b39', endColorstr='#f16f5c', GradientType=1 );
  }

  .bg-title2{
    background: rgba(60,141,188,1);
    background: -moz-linear-gradient(left, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 27%, rgba(80,161,208,1) 90%, rgba(80,161,208,1) 100%);
    background: -webkit-gradient(left top, right top, color-stop(0%, rgba(60,141,188,1)), color-stop(0%, rgba(60,141,188,1)), color-stop(27%, rgba(60,141,188,1)), color-stop(90%, rgba(80,161,208,1)), color-stop(100%, rgba(80,161,208,1)));
    background: -webkit-linear-gradient(left, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 27%, rgba(80,161,208,1) 90%, rgba(80,161,208,1) 100%);
    background: -o-linear-gradient(left, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 27%, rgba(80,161,208,1) 90%, rgba(80,161,208,1) 100%);
    background: -ms-linear-gradient(left, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 27%, rgba(80,161,208,1) 90%, rgba(80,161,208,1) 100%);
  }

  @media only screen and (max-width: 990px) {
    .pm, .pro-box{
      border-bottom:solid 1px silver;
      padding-bottom: 10px;
    }

    .boxzol{
      margin-bottom:20px;
    }

    .forum{
      margin-left:5px;
      margin-right:5px;
    }

    .forum2{
      margin-left:5px;
      margin-right:5px;
    }

    .topinfo{
      margin-left:2px;
      margin-right:2px;
    }
  }
  @media only screen and (min-width: 990px) {
    .pm{
      border-right:solid 1px silver;
      border-left:solid 1px silver;
    }

    .boxzol{
      margin-bottom:10px;
    }

    .topinfo{
      margin-left:10px;
      margin-right:10px;

    }

    .forum2{
      padding-left: 0px;
    }
  }
</style>

<div class="content-wrapper" style="background-image:url('images/backgrounds/1.jpg');padding-bottom:2%;background-repeat: no-repeat;background-size: cover;" >
   
    
      
          
          <!-- /.box-header -->
          
            <div class="row" style="min-height: 669px;background-image:url('images/backgrounds/1.jpg');background-repeat: no-repeat;background-size: cover;">
              <!---ADD your Code here-->
				<div class="col-sm-offset-3 col-sm-5">
          <div class="form-box" align="center">
            <div class="form-top">
              <div class="form-top-left">
                <h3>Personal Details</h3>
				<p>Enter your details to apply for scholarship</p>
              </div>
              <div class="form-top-right">
                <i class="fa fa-user"></i>
              </div>
            </div>
            <div class="form-bottom" style="margin-bottom:10%">
              <form role="form" action="login_reg_scripts/apply1.php" method="post" class="login-form">
                <div class="form-group">
                    <label for="form-username">Name</label>
                    <input type="text" name="name" value="<?php echo $firstname." ".$surname;?>" placeholder="Name" class="form-username form-control" id="form-name" disabled>
                  </div>
                  <div class="form-group">
                    <label for="form-username">Aadhar Card No</label>
                    <input type="text" name="aadhar" value="<?php echo $firstname." ".$surname;?>" placeholder="Aadhar Card No" class="form-username form-control" id="form-aadhar" disabled>
                  </div>
				  <div class="form-group">
                    <label  for="form-username">Email</label>
                    <input type="text" name="email" value="<?php echo $email;?>" placeholder="Email" class="form-username form-control" id="form-email" disabled>
                  </div>
				  <div class="form-group">
                    <label  for="form-username">Mother's Name</label>
                    <input type="text" name="mothername" placeholder="Mother's Name" class="form-username form-control" id="form-mothername" >
                  </div>
				  <div class="form-group">
                    <label for="form-username">Father's Name</label>
                    <input type="text" name="fathername" placeholder="Father's Name" class="form-username form-control" id="form-fathername">
                  </div>
				  <div class="form-group">
                    <label for="form-username">Father's/Mother's Email</label>
                    <input type="text" name="email2" placeholder="Father's/Mother's Email" class="form-password form-control" id="form-email2" >
                  </div>
				  <div class="form-group">
                    <label for="form-username">DOB</label>
                    <input type="text" name="dob" value="<?php echo $dob;?>" placeholder="DOB" class="form-username form-control" id="form-dob" disabled>
                  </div>
				  <div class="form-group">
                    <label for="form-username">Contact</label>
                    <input type="text" name="contact" placeholder="Contact" class="form-username form-control" id="form-contact">
                  </div>
				  <div class="form-group">
                    <label for="form-username">Loan Amount</label>
                    <input type="text" name="loan" placeholder="Loan Amount" class="form-username form-control" id="form-loan">
                  </div>
                  <button type="submit" class="btn">Submit</button>
              </form>
            </div>
          </div>
        </div>
            </div>
            <!-- /.row -->
			
          <!-- ./box-body -->
          <!-- /.box-footer -->
			
        <!-- /.box -->
		
      <!-- /.col -->
	  
    <!-- /.row -->
	
</div>
<?php
include'footer.php';

?>
