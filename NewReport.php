<?php
  include('include/header.php');
  include_once "classes/database.php";

  $db=new Database();


?>
<?php
ob_start();
if(isset($_POST['sReport']))
{
    $sDate=$_POST['sDate'];
    //header('Location: report.php?t1='.$t1.'&t2='.$t2);
    //echo "<script>alert('$sDate');</script>";
    // header('Location: report.php?date='.$sDate.'&eDate=');
    echo "<script>location.replace('report.php?date=$sDate&eDate=');</script>";

}
if(isset($_POST['mReport']))
{
    $sDate=$_POST['startDate'];
    $eDate=$_POST['endDate'];
    // header('Location: report.php?date='.$sDate.'&eDate='.$eDate);
    //echo "<script>alert('$sDate.$eDate');</script>";
    //header('Location: report.php?date='.$sDate);
    echo "<script>location.replace('report.php?date=$sDate&eDate=$eDate');</script>";
}

?>


<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
      <div id="myDIV1">
    <?php
  include('include/sidebar.php');
    ?>
      </div>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

                <!-- TopBar -->
          <div id="myDIV2">
        <?php
  include('include/navbar.php');
      ?>
          </div>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">


            <div id="myDIV4">
          <div class="d-sm-flex align-items-center justify-content-between mb-1">
            <h1 class="h3 mb-0 text-gray-800">Create Report</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Reports</li>
            </ol>
          </div>
                </div>
          <!-- Row -->
          <div class="row">
            
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6" style="padding: 20px;">
                            <div class="card panel-primary" style="padding: 20px;">
                                <div class="card-header">
                                    <b>Multi Date Entry Report</b>
                                </div>
                                <div class="panel-body">
                                    <form role="form" class="col-lg-12" method="post" action="">
                                 <span style="color:red; font-size:16px;">
                                  </span>
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label>Start Date:</label>
                                                <input class="form-control" required type="date" name="startDate" />
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>End Date:</label>
                                                <input class="form-control" required type="date" name="endDate" />
                                            </div>
                                        </div>
                                        <button type="submit" name="mReport" class="btn btn-primary"><i class="fa fa-file fa-fw"></i> Report</button>
                                        <button type="reset" class="btn btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</button>
                                    </form>

                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <div class="col-lg-6" style="padding: 20px;">
                            <div class="card panel-primary" style="padding: 20px;">
                                <div class="panel-heading">
                                    <b> Signal Date Entry Report</b>
                                </div>
                                <div class="card-header">
                                    <form role="form" class="col-lg-12" method="post" action="">
                                 <span style="color:red; font-size:16px;">
                                  </span>
                                        <div class="form-group">
                                            <label>Select Date:</label>
                                            <input class="form-control" required type="date" name="sDate" />
                                        </div>
                                        <button type="submit" name="sReport" class="btn btn-primary"><i class="fa fa-file fa-fw"></i> Signal Report</button>
                                        <button type="reset" class="btn btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</button>
                                    </form>

                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                    </div>

                </div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Documentation Link -->
          <div class="row">
            <div class="col-lg-12">
             
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
        <div id="myDIV3">

 <?php
  include('include/footer.php');
?>
        </div>


  
