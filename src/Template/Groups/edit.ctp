

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../..admin/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../..admin/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../../admin/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
/head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../../admin/img/sidebar-1.jpg">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Creative Tim
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item  ">
                   <a class="nav-link" href="./dashboard.html">
                       <i class="material-icons">dashboard</i>
                       <p>Dashboard</p>
                   </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./user.html">
                    <i class="material-icons">person</i>
                    <p>User Profile</p>
                    </a>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link" href="./tables.html">
                    <i class="material-icons">content_paste</i>
                    <p>Groups List</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="#pablo">Groups List</a>
            </div>
        </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h3 class="card-title ">Edit Groups</h3>
                                <p class="card-category"> Information</p>
                            </div>
                        <div class="card-body">
                            <?= $this->Form->create($group) ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <?= $this->Form->input('name',[  'required'=>'required', array('type' => 'text')]); ?>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right" >Edit Groups</button>
                            <?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
                            <div class="clearfix"></div>
                             <?= $this->Form->end() ?>
                         </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../../admin/js/core/jquery.min.js"></script>
  <script src="../../admin/js/core/popper.min.js"></script>
  <script src="../../admin/js/core/bootstrap-material-design.min.js"></script>
  <script src="../../admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../admin/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>

</body>

</html>