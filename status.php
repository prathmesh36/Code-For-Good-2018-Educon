<?php
  include'all.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="assets/js/Chart.js"></script>
<script src="assets/js/Chart.min.js"></script>
<script src="assets/js/jquery-1.11.2.min.js"></script>

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
        <div class="box boxzol" style="">
          <div class="box-header with-border bg-title2" style="">
            <b style="color:white;">Application Status</b>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
<?php
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
  {
    if(isset($_GET["id"]) && !empty($_GET["id"]))
    {
      $user_id=$_GET['id'];
      $query="SELECT Status FROM application WHERE aid=".$user_id;;
      $query_run=mysqli_query($con,$query);

       $status=mysqli_fetch_assoc($query_run);



    }
?>
<style type="text/css">
  .container {
  width: 960px;
  margin: 0 auto;
  text-align: center;
  height: 100vh;
}
.container .steps {
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
.container .steps ul {
  list-style: none;
}
.container .steps ul li {
  display: inline-block;
  width: 4rem;
  height: 4rem;
  line-height: 4rem;
  border-radius: 100%;
  background: #d8d8d8;
  margin-right: 2rem;
  position: relative;
}
.container .steps ul li:first-child {
  margin-left: unset;
}
.container .steps ul li:first-child:before {
  display: none;
}
.container .steps ul li:before {
  content: "";
  width: 2.4rem;
  background-color: #d8d8d8;
  height: 2px;
  position: absolute;
  top: 2rem;
  right: 3.9rem;
}
.container .steps ul .active {
  background: #03A9F4;
  color: #fff;
}
.container .steps ul .active:before {
  background-color: #03A9F4;
}

</style>
<div class="container">
  <div class="steps">
    <?php
    if($status["Status"]=="1")
    {
      ?>
    <ul>
      <li class="list active" >1</li>
      <li class="list">2</li>
      <li class="list">3</li>
         </ul>
      <?php
     } else if($status["Status"]=="2")
    {
      ?>
    <ul>
      <li class="list active">1</li>
      <li class="list active">2</li>
      <li class="list">3</li>
         </ul>
      <?php
     }else if($status["Status"]=="3")
    {
      ?>
    <ul>
      <li class="list active">1</li>
      <li class="list active">2</li>
      <li class="list active">3</li>
        </ul>
      <?php
     }
   }
     ?>



  </div>

<div>
  <table>
    <tr>
      <th>
        <b>SR NO.</b>&nbsp;&nbsp;
      </th>
      <th>
        <b>STAGE</b>
      </th>
    </tr>

    <tr>
      <th>
        <b>1.</b>
      </th>
      <th>
        <b>Applied</b>
      </th>
    </tr>

    <tr>
      <th>
        <b>2.</b>
      </th>
      <th>
        <b>Under Process</b>
      </th>
    </tr>

    <tr>
      <th>
        <b>3.</b>
      </th>
      <th>
        <b>Approval</b>
      </th>
    </tr>
  </table>
</div>
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
