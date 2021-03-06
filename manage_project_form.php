<?php
include './conf.php';
$fn = new functionx();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $list = $fn->getProject($_GET['id']);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>3CX WEB REPORT SYSTEM.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
        <!-- Custom icon font-->
        <link rel="stylesheet" href="css/fontastic.css">
        <!-- Google fonts - Roboto -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <!-- jQuery Circle-->
        <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
        <!-- Custom Scrollbar-->
        <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->

        <!-- Favicon-->
        <link rel="shortcut icon" href="favicon.png">
        <link rel="stylesheet" href="css/radioStyle.css">
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="bootstrap-daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body data-active="project" data-id="Project">
        <?php include './_sidebar.php'; ?>
        <div class="page home-page">
            <!-- navbar-->
            <?php include './_head.php'; ?>    
            <div class="breadcrumb-holder">   
                <div class="container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="manage_project.php">Projects List</a></li>
                        <li class="breadcrumb-item active">Projects Form</li>
                    </ul>
                </div>
            </div>
            <section class="charts">
                <div class="container-fluid">
                    <?php
                    include './_TapFake.php';
                    ?>
                    <div  id="porjectDetail">
                        <h1 class="page-header">Project Form</h1>
                        <div class="row"> 
                            <div class="card col-8">                             
                                <div class="card-body">
                                    <form id="ProjectForm" class="form" action="_op_main.php?op=<?= isset($list) ? 'editProject&id=' . $_GET['id'] : 'saveProject' ?>" method="post">
                                        <div class="form-group">
                                            <label>Project Code</label>
                                            <div>
                                                <input type="text" class="form-control" name="Code" value="<?= isset($list) ? $list['Code'] : '' ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Project Name</label>
                                            <div>
                                                <input type="text" class="form-control" name="Name" value="<?= isset($list) ? $list['Name'] : '' ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Score Rate</label>
                                            <div style="padding-left: 15px;">

                                                <div style="padding-bottom: 10px;">
                                                    <label style="width: 50px">  Min :</label>  <input type="number" id="scroe_min"  name="score_min" value="<?= isset($list) ? $list['score_min'] : '' ?>" required min="0" style="width: 50px;padding-left: 5px;"> <br/>
                                                </div>
                                                <div style="padding-bottom: 10px;">
                                                    <label style="width: 50px">   Max : </label> <input type="number"  id="scroe_max" name="score_max" value="<?= isset($list) ? $list['score_max'] : '' ?>" required min="0" style="width: 50px;padding-left: 5px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <div>
                                                <textarea  class="form-control"   rows="5" name="Description"><?= isset($list) ? $list['Description'] : '' ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div id="errorMessageMGF" class="text-danger"></div>
                                            <button class="btn btn-sm btn-success"> <i class="fa fa-save"></i> Save </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <?php include './_foot.php'; ?>   

        </div>
        <!-- Javascript files-->
        <script src="js/jquery-3.2.1.min.js"></script> 
        <script src="js/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script> 
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="bootstrap-daterangepicker/moment.min.js"></script>
        <script src="bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="js/front.js"></script>
        <script src="js/customs.js"></script>

    </body>
</html>