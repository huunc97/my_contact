<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../admin/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../admin/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->

    <!--  Material Dashboard CSS    -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../admin/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="admin/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h3 class="title">Add Groups</h3>
                                <p class="category">Complete your groups</p>
                            </div>
                            <div class="card-content">
                                <?= $this->Form->create($group) ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Name</label>
                                                <input type="text" class="form-control" name="name" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right" >Add Groups</button>
                                    <?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
                                    <div class="clearfix"></div>
                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../admin/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../admin/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../admin/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../admin/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../admin/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../admin/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../admin/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../admin/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../admin/js/demo.js"></script>

</html>
