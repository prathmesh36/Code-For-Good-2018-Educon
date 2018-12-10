<?php
  include'all.php';
?>
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

<div class="content-wrapper" style="min-height: 669px;">
    <div class="row" style="background-color:#ecf0f5;height:5px;"></div>
    <div class="row topinfo">
      <div class="col-md-12" style="padding-left:10px;padding-right:10px;">
        <div class="box boxzol" style=" margin-top:10px">
          <!-- /.box-header -->

                <div class="box-body">
                  <div class="row">
                    <div class="col-md-3 pro-box" style="">
                <h3 class="text-center" style="font-size:20px;margin-top:10px"><b><?php echo $rows["firstname"].' '.$rows["surname"];?></b></h3>
                  <div class="profile-picture text-center">
                    <img src="images/users/<?php
                    if(file_exists('images/users/'.$user_id.'.jpg'))
                    {
                      echo $user_id;
                    }
                    else
                    {
                      echo 'default';
                    }
                    ?>.jpg" class="img-circle" width="100px" height="100px">
                    </div>
                </div>


                              <?php
                              $user=$_SESSION['user_id'];
                              $get_user="SELECT * from login where id='$user'";
                              $query=mysqli_query($conn,$get_user);
while($row_posts=mysqli_fetch_array($query)){
                                  // include 'connection.php';
                                  $post_id=$row_posts['post_id'];
                                  $id=$row_posts['id'];
                                  $post_title=$row_posts['post_title'];
                                  $post_content=$row_posts['post_content'];
                                  $post_date=$row_posts['post_date'];

                                  //getting the user who has posted the thread

                                  $user="SELECT * from authenticate_user where id='$id' AND posts='yes'";
                                  $run_user=mysqli_query($conn,$user);
                                  $row_user=mysqli_fetch_array($run_user);
                                  $name=$row_user['name'];
                                  $u_image=$row_user['u_image'];

                                  
                                  


                                  echo "
                                   <div class="pm col-md-5" style="display:flex;justify-content:center;">
                      <div class="pmi profile-info" >
                        <h4 class="pmh text-center visible-md visible-lg" style="font-size:20px;"><b>Personal Details</b></h4>
                        <span style="font-size:16px;"><b>Name:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo $rows["firstname"].' '.$rows["surname"];?></span><br>
                        <span style="font-size:16px;"><b>Email ID:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo $rows["email"];?></span><br>
                        <?php if($user_type==2){?><span style="font-size:16px;"><b>Regno:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo $rows["Regid"];?></span><br><?php }?>
                        <span style="font-size:16px;"><b>Gender:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo $rows["gender"];?></span><br>
                        <span style="font-size:16px;"><b>Birth Date:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo date("d M Y",strtotime($rows["dob"]));?></span><br>
                        <span style="font-size:16px;"><b>Member Since:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo date("M Y",strtotime($rows['doj']));?></span><br>
                      </div>
                    </div>
                                   ";

                                  }







                    <div class="pm col-md-5" style="display:flex;justify-content:center;">
                      <div class="pmi profile-info" >
                        <h4 class="pmh text-center visible-md visible-lg" style="font-size:20px;"><b>Personal Details</b></h4>
                        <span style="font-size:16px;"><b>Name:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo $rows["firstname"].' '.$rows["surname"];?></span><br>
                        <span style="font-size:16px;"><b>Email ID:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo $rows["email"];?></span><br>
                        <?php if($user_type==2){?><span style="font-size:16px;"><b>Regno:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo $rows["Regid"];?></span><br><?php }?>
                        <span style="font-size:16px;"><b>Gender:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo $rows["gender"];?></span><br>
                        <span style="font-size:16px;"><b>Birth Date:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo date("d M Y",strtotime($rows["dob"]));?></span><br>
                        <span style="font-size:16px;"><b>Member Since:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo date("M Y",strtotime($rows['doj']));?></span><br>
                      </div>
                    </div>

                    
                    <div class="pmi text-center profile-info" style="display:flex; vertical-align: center; justify-content: center; text-align: center;">
                    <button class="btn boxzol" onclick="window.open('profile.php')" style="top: 50%;">View Application</button>
                  </div>
                  </div>
            <!-- /.row -->
          </div>
          <!-- ./box-body -->
          <!-- /.box-footer -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
</div>
<?php
include'footer.php';

?>
