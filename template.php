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

<!-- Content Wrapper. Contains page content -->
<?php
  if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && $user_type==3)
  {
    if(isset($_GET["id"]) && !empty($_GET["id"]))
    {
      $user_id=$_GET['id'];
      $query="SELECT * FROM login WHERE id='".$user_id."'";
      $query_run=mysqli_query($con,$query);
      $rows=mysqli_fetch_assoc($query_run);
    }
?>
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg1">
      <div class="modal-content" style="width:100%:">
        <div class="modal-header">
          <h3 class="modal-title" >People following <?php echo $rows["firstname"].' '.$rows["surname"];?></h3>
        </div>
        <div class="modal-body xsfonts" style="" id="folist"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" style="font-size:15px;" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg1">
      <div class="modal-content" style="width:100%:">
        <div class="modal-header">
          <h3 class="modal-title" >Poeple Followed by <?php echo $rows["firstname"].' '.$rows["surname"];?>'s </h3>
        </div>
        <div class="modal-body xsfonts" style="" id="folist2"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" style="font-size:15px;" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




  <div class="content-wrapper">
    <div class="row" style="background-color:#ecf0f5;height:5px;"></div>
    <div class="row topinfo">
      <div class="col-md-12" style="padding-left:10px;padding-right:10px;">
        <div class="box boxzol" style="">
          <div class="box-header with-border bg-title2" style="">
            <h2 class="box-title" style="font-size:22px;color:white;"><?php echo $rows["firstname"].' '.$rows["surname"];?>'s Profile</h2>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <!-- /.col -->
              <div class="col-md-6 pro-box" style="">
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
                  ?>.jpg" class="img-circle" width="160" height="160">
                  <?php
                  if(!empty($_GET["id"]) && isset($_GET["id"]))
                  {
                  ?>
                    <br>
                    
                    </button>
                    <?php
                  }
                  ?>
                </div>
              </div>
              <!-- /.col -->
              <h3 class="pmh text-center visible-sm visible-xs" style="font-size:20px;"><b>Personal Memoronda</b></h3>
              <div class="pm col-md-5" style="display:flex;justify-content:center;">
                <div class="pmi profile-info" >
                  <h4 class="pmh text-center visible-md visible-lg" style="font-size:20px;"><b>Personal Memoronda</b></h4><br>
                  <span style="font-size:16px;"><b>Name:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo $rows["firstname"].' '.$rows["surname"];?></span><br>
                  <span style="font-size:16px;"><b>Email ID:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo $rows["email"];?></span><br>
                  <?php if($user_type==2){?><span style="font-size:16px;"><b>Regno:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo $rows["Regid"];?></span><br><?php }?>
                  <span style="font-size:16px;"><b>Gender:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo $rows["gender"];?></span><br>
                  <span style="font-size:16px;"><b>Birth Date:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo date("d M Y",strtotime($rows["dob"]));?></span><br>
                  <span style="font-size:16px;"><b>Date of joining:</b></span>&nbsp&nbsp&nbsp<span style="font-size:16px;"><?php echo date("M Y",strtotime($rows['doj']));?></span><br>
                 


                </div>

                            <!-- /.col -->
              
                  
                     
                </div>
              </div>
              

        <h4 class="pmh text-center visible-md visible-lg" style="font-size:20px;"><b>PREVIOUS CONTRIBUTIONS</b></h4><br>
     <?php
        $query1="SELECT * FROM login,application WHERE login.id= application.id and application.did='".$user_id."'";
      $query_run1=mysqli_query($con,$query1);
      ?>
              
           
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th><b>SR NO.</b></th>
                  <th><b>NAME</b></th>
                  <th style="width: 40px"><b>PROGRESS</b></th>
                </tr>
    
<?php   
    $i=1;  
      while($row1=mysqli_fetch_assoc($query_run1))
      {
        ?>
      
                  <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $row1["firstname"].'<br>'?></td>
                  <td><?php echo $row1["surname"].'<br>'?></td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">55%</span></td>
       
                </tr>
                <?php
                $i++;
      }
?>
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>      

      

              </div>
            
          <!-- /.box-footer -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
<script type="text/javascript">
var btn1 = document.getElementById('adhar');
btn.addEventListener('click', function() {
  document.location.href = '#';
});
var btn2 = document.getElementById('income');
btn.addEventListener('click', function() {
  document.location.href = '#';
});
var btn3 = document.getElementById('ration');
btn.addEventListener('click', function() {
  document.location.href = '#';
});
var btn4 = document.getElementById('academic');
btn.addEventListener('click', function() {
  document.location.href = '#';
});
</script>
    <!-- Main row -->
    <div class="row" style="margin:10px -7px; ">
      <!-- Left col -->



    <!-- /.row -->
    <?php
      $queryus="SELECT type FROM login WHERE id='".$user_id."'";
      $query_runus=mysqli_query($con,$queryus);
      $rowus=mysqli_fetch_assoc($query_runus);
      if($rowus['type']==3)
      {
    ?>
 
  <?php
}
  ?>


  <?php
    $queryus="SELECT type FROM login WHERE id='".$_SESSION['user_id']."'";
    $query_runus=mysqli_query($con,$queryus);
    $rowus=mysqli_fetch_assoc($query_runus);
    if($rowus['type']==$rowus['type'])
    {
  ?>

        <!-- /.box-body -->

    </div>
</div>
<?php
}
?>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
}else
{
  echo '<script type="text/javascript">';
  echo 'window.location.href="login.php";';
  echo '</script>';
}
?>
<?php
include'footer.php';

?>
