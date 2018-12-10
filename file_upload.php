<?php
   include'all.php';
?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<style>
    .li-hover:hover{

    }
    .bg-title{
      background: rgba(60,141,188,1);
      background: -moz-linear-gradient(left, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 59%, rgba(60,141,188,1) 97%, rgba(60,141,188,1) 100%);
      background: -webkit-gradient(left top, right top, color-stop(0%, rgba(60,141,188,1)), color-stop(0%, rgba(60,141,188,1)), color-stop(59%, rgba(60,141,188,1)), color-stop(97%, rgba(60,141,188,1)), color-stop(100%, rgba(60,141,188,1)));
      background: -webkit-linear-gradient(left, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 59%, rgba(60,141,188,1) 97%, rgba(60,141,188,1) 100%);
      background: -o-linear-gradient(left, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 59%, rgba(60,141,188,1) 97%, rgba(60,141,188,1) 100%);
      background: -ms-linear-gradient(left, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 59%, rgba(60,141,188,1) 97%, rgba(60,141,188,1) 100%);
      background: linear-gradient(to right, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 59%, rgba(60,141,188,1) 97%, rgba(60,141,188,1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3c8dbc', endColorstr='#3c8dbc', GradientType=1 );
    }

    .bg-title2{
      background: rgba(60,141,188,1);
      background: -moz-linear-gradient(left, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 27%, rgba(60,141,188,1) 90%, rgba(60,141,188,1) 100%);
      background: -webkit-gradient(left top, right top, color-stop(0%, rgba(60,141,188,1)), color-stop(0%, rgba(60,141,188,1)), color-stop(27%, rgba(60,141,188,1)), color-stop(90%, rgba(60,141,188,1)), color-stop(100%, rgba(60,141,188,1)));
      background: -webkit-linear-gradient(left, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 27%, rgba(60,141,188,1) 90%, rgba(60,141,188,1) 100%);
      background: -o-linear-gradient(left, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 27%, rgba(60,141,188,1) 90%, rgba(60,141,188,1) 100%);
      background: -ms-linear-gradient(left, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 0%, rgba(60,141,188,1) 27%, rgba(60,141,188,1) 90%, rgba(60,141,188,1) 100%);
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

  <div class="content-wrapper">
    <div class="modal fade bd-example-modal-lg success" id="success" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg1">
        <div class="modal-content" style="width:100%:">
          <div class="modal-header">
            <h3 class="modal-title" >Success</h3>
          </div>
          <div class="modal-body xsfonts" style="" id="folist2">
            Application Submission Successful
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" style="font-size:15px;" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <?php
      if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
      {
          $name=@$_FILES['file']['name'];
          $tmp_name=@$_FILES['file']['tmp_name'];
          $size=@$_FILES['file']['size'];
          $type=@$_FILES['file']['type'];
          $extension=strtolower(substr($name,strpos($name,'.')+1));

           if(isset($name))
            {
              if(!empty($name))
          	{
          	   $location="images/files/Ration card";
               if(($extension=='jpg' || $extension=='jpeg' || $extension=='png') && ($type=='image/jpeg' || $type=='image/png'))
               {
                if(file_exists($location.'/'.$user_id.'.jpg'))
                {
                  //  echo '<script>alert("error")</script>';
                }
                else
                {

                if(move_uploaded_file($tmp_name,$location.'/'.$user_id.'.jpg'))
          		   {

          		   }
          		    else
          		    {
          		    echo '<b style="color:red;">&nbsp error in uploading</b>';
          		    }
                }
                   }
          		  else
          		  {
                    echo '<b style="color:red;">&nbsp Please Upload jpeg/jpg/png file and below 100kb</b>';
                    }
              }
          	 else
               {
               echo '<b style="color:red;">&nbsp Please Upload file</b>';
               }
            }
             else
             {
                 //echo '<b style="color:red;">&nbsp Please Select File</b>';
             }
        $name=@$_FILES['file2']['name'];
          $tmp_name=@$_FILES['file2']['tmp_name'];
          $size=@$_FILES['file2']['size'];
          $type=@$_FILES['file2']['type'];
          $extension=strtolower(substr($name,strpos($name,'.')+1));

           if(isset($name))
            {
              if(!empty($name))
          	{
          	   $location="images/files/Income Certificate";
               if(($extension=='jpg' || $extension=='jpeg' || $extension=='png') && ($type=='image/jpeg' || $type=='image/png'))
               {
                if(file_exists($location.'/'.$user_id.'.jpg'))
                {
                    //echo '<script>alert("error")</script>';
                }
                else
                {

                     if(move_uploaded_file($tmp_name,$location.'/'.$user_id.'.jpg'))
          		   {

          		   }
          		    else
          		    {
          		    echo '<b style="color:red;">&nbsp error in uploading</b>';
          		    }
                }
                   }
          		  else
          		  {
                    echo '<b style="color:red;">&nbsp Please Upload jpeg/jpg/png file and below 100kb</b>';
                    }
              }
          	 else
               {
               echo '<b style="color:red;">&nbsp Please Upload file</b>';
               }
            }
             else
             {
                 //echo '<b style="color:red;">&nbsp Please Select File</b>';
             }
          $name=@$_FILES['file3']['name'];
          $tmp_name=@$_FILES['file3']['tmp_name'];
          $size=@$_FILES['file3']['size'];
          $type=@$_FILES['file3']['type'];
          $extension=strtolower(substr($name,strpos($name,'.')+1));

           if(isset($name))
            {
              if(!empty($name))
          	{
          	   $location="images/files/Bank Statement";
               if(($extension=='jpg' || $extension=='jpeg' || $extension=='png') && ($type=='image/jpeg' || $type=='image/png'))
               {
                if(file_exists($location.'/'.$user_id.'.jpg'))
                {
                    //echo '<script>alert("error")</script>';
                }
                else
                {

                if(move_uploaded_file($tmp_name,$location.'/'.$user_id.'.jpg'))
          		   {
                    $appquery="INSERT INTO application VALUES('','".$user_id."','1','".$rows['institute']."','".$rows['typeedu']."','".$rows['result']."','".$rows['income']."','2017','".$rows['occupation']."','','1','','')";

                    if($query_run=mysqli_query($con,$appquery))
                    {
                      $url='./file_upload.php#success';
                    	echo '<script type="text/javascript">';
                    	echo 'window.location.href="'.$url.'";';
                    	echo '</script>';
                      ?>
                      <script>
                            $('#success').modal('toggle');
                      </script>
                      <?php
                    }
          		   }
          		    else
          		    {
          		    echo '<b style="color:red;">&nbsp error in uploading</b>';
          		    }
                }
                   }
          		  else
          		  {
                    echo '<b style="color:red;">&nbsp Please Upload jpeg/jpg/png file and below 100kb</b>';
                    }
              }
          	 else
               {
               echo '<b style="color:red;">&nbsp Please Upload file</b>';
               }
            }
             else
             {
 }
      ?>
    <div class="row" style="background-color:#ecf0f5;height:5px;">

    </div>

      <!-- Main row -->
            <form class="form-horizontal" id="form1" name="form1" method="post" action="file_upload.php" enctype="multipart/form-data">
      <!-- /.row -->
      <div class="row" style="margin:10px -7px; ">
        <!-- Left col -->

        <!-- /.col -->

        <div class="col-md-7 col-md-offset-1 forum">
          <!-- Info Boxes Style 2 -->

          <!-- PRODUCT LIST -->
          <div class="box box-primary" style="border-top-color:#d2d6de;">
            <div class="box-header with-border bg-title" style="">
              <h3 class="box-title" style="color:white;">Upload Income Certificate</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div>

              <div class="box-body">
                  <div class="form-group">
                        <label for="exampleInputFile"></label>
                        <input id="exampleInputFile" name="file" type="file">
                        <p class="help-block">Upload your file here.</p>
                  </div>
              </div>

              <!-- /.box-body -->
              <!-- /.box-footer -->
              </div>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        </div>
      <!-- /.row -->







        <div class="row" style="background-color:#ecf0f5;height:5px;">

    </div>

      <!-- Main row -->

      <!-- /.row -->
      <div class="row" style="margin:10px -7px; ">
        <!-- Left col -->

        <!-- /.col -->

        <div class="col-md-7 col-md-offset-1 forum">
          <!-- Info Boxes Style 2 -->

          <!-- PRODUCT LIST -->
          <div class="box box-primary" style="border-top-color:#d2d6de;">
            <div class="box-header with-border bg-title" style="">
              <h3 class="box-title" style="color:white;">Upload College ID</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div>
              <div class="box-body">
                  <div class="form-group">
                        <label for="exampleInputFile"></label>
                        <input id="exampleInputFile" name="file2" type="file">
						<p class="help-block">Upload your file here.</p>
                  </div>
              </div>

              <!-- /.box-body -->
              <!-- /.box-footer -->
              </div>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        </div>






         <div class="row" style="background-color:#ecf0f5;height:5px;">

    </div>

      <!-- Main row -->

      <!-- /.row -->
      <div class="row" style="margin:10px -7px; ">
        <!-- Left col -->

        <!-- /.col -->

        <div class="col-md-7 col-md-offset-1 forum">
          <!-- Info Boxes Style 2 -->

          <!-- PRODUCT LIST -->
          <div class="box box-primary" style="border-top-color:#d2d6de;">
            <div class="box-header with-border bg-title" style="">
              <h3 class="box-title" style="color:white;">Upload Ration Card Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div>
              <div class="box-body">
                  <div class="form-group">
                        <label for="exampleInputFile"></label>
                        <input id="exampleInputFile" name="file3" type="file">
                        <p class="help-block">Upload your file here.</p>
                  </div>
              </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <a href="profile.php"><button type="button" class="btn btn-default">Skip this Step</button></a>
                <button type="submit" value="upload" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
              </div>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        </div>








      <?php
      }
      else {
        $url='./login.php';
      	echo '<script type="text/javascript">';
      	echo 'window.location.href="'.$url.'";';
      	echo '</script>';
      }

      ?>
      <br>
      <br>
      <br>
      <br>
    </form>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
   include'footer.php';

?>
<script>
  //shortcut for $(document).ready
  var hash = window.location.hash;
  if (hash.substring(1) == 'success')
  {
      $(hash).modal('toggle');
  }
</script>
