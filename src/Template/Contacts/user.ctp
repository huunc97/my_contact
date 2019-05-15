<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  </head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper ">
  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SmartGift</b>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu pull-left">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu pull-left">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trang Chủ</a>
          </li>
          <li class="dropdown messages-menu">
            <a  class="nav-link" href="/my_contact/contacts/user ">Contacts</a>
          </li>
          <li class="dropdown messages-menu">
            <a  class="nav-link" href="/my_contact/groups ">Groups</a>
          </li>   
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">
        <h5>Nguyen Chi Huu</h5>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-home"></i> <span>Trang Chủ</span>
          </a>
        <li class="active">
          <a class="nav-link" href="../contacts/user ">
            <i class="fas fa-id-card"></i> <span>Contacts</span>
          </a>
        </li>
        <li >
        <a class="nav-link" href="/my_contact/groups">
            <i class="fas fa-layer-group"></i> <span>Groups</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Groups</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fas fa-home"></i> Trang Chủ</a></li>
        <li><a class="nav-link" href="/my_contact/contacts/user">Contacts</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Contact</h3>
                </a>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <div class="col-xs-8">
                    <form action="#" data-parsley-validate novalidate>
                      <div class="form-group col-md-7">
                        <label for="userName">Fist Name<span class="text-danger">*</span></label>
                         <input type="text" name="nick" data-parsley-trigger="change" required placeholder="Fist name" class="form-control" id="fistName">
                         <p style="color:red" id="errorFistName"></p>
                      </div>
                      <div class="form-group col-md-7">
                         <label for="userName">Last Name<span class="text-danger">*</span></label>
                          <input type="text" name="nick" data-parsley-trigger="change" required placeholder="Last name" class="form-control" id="lastName">
                          <p style="color:red" id="errorLastName"></p>
                      </div>
                      <div class="form-group col-md-7 ">
                        <label for="userName ">Giới tính<span class="text-danger"></span></label>
                          <input type="text" name="nick" data-parsley-trigger="change" required placeholder="Giới tính" class="form-control" id="gender">
                          <p style="color:red" id="errorGender"></p>
                      </div>
                      <div class="form-group col-md-12">
                        <label>Ngày sinh</label>
                        <div>
                          <input data-parsley-type="number" type="text" class="form-control" required placeholder="Ngày sinh" id="birthDay"/>
                          <p style="color:red" id="errorBirth"></p>
                        </div>
                      </div>
                      <div class="form-group col-md-12">
                          <label>Địa Chỉ</label>
                          <div>
                            <textarea required class="form-control" placeholder="VD:174 Lê Trọng Tấn, Tân Phú, TP.HCM" id="ipAddress"></textarea>
                            <p style="color:red" id="errorAddress"></p>
                          </div>
                      </div>
                      <div class="form-group col-md-6">
                          <label for="Bank">Ngân hàng<span class="text-danger"></span></label>
                          <form>
                          <select name="Bank" id="userBark" class="form-control">
                          <?php
                              $a= file_get_contents("../webroot/bank/banks.json");
                              $b=json_decode($a);
                              foreach ($b as $key=>$value) {
                                  echo "<option value=$key>$value</option>";
                              }
                           ?>
                         </select>
                         </form>
                      </div>
                      <div class="form-group col-md-6">
                         <label for="bankBranch">Chi nhánh ngân hàng<span class="text-danger"></span></label>
                         <select name="" id="branches" class="form-control">
                         
                         </select>
                      </div>
                      <div class="form-group  col-md-12">
                          <button class="btn btn-primary" type="submit">
                             Cập nhật
                          </button>
                        </div>
                    </form>
                </div>
			  </div>
			</div><!-- end card-->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2019 <a href="#">SmartGift</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
 <script>
      $('button').click(function (e) { 
          e.preventDefault();
          kiemtra()
      });
      
      function kiemtra()
      {
          if(fistName.value.trim()=='')
          {
            $("#errorFistName").show();
            errorFistName.innerHTML=`Vui lòng điền fist name`
            $("#fistName").focus();
          }
          else{
            $("#errorFistName").hide();         
           }

           if(lastName.value.trim()=='')
          {
            $("#errorLastName").show();
            errorLastName.innerHTML=`Vui lòng điền last name`
          }
          else{
            $("#errorLastName").hide();
          }
          
          if(gender.value.trim()=='')
          {
            $("#errorGender").show();
            errorGender.innerHTML=`Vui lòng điền giới tính`
          }
          else{
            $("#errorGender").hide();
          }

          if(birthDay.value.trim()=='')
          {
            $("#errorBirth").show();
            errorBirth.innerHTML=`Vui lòng điền ngày sinh`
          }
          else{
            $("#errorBirth").hide();
          }

          if(ipAddress.value.trim()=='')
          {
            $("#errorAddress").show();
            errorAddress.innerHTML=`Vui lòng điền địa chỉ`
          }
          else{
            $("#errorAddress").hide();
          }
      }      
  </script>
<script>
  $(document).ready(function () {
    //userBark.change();
    userBark.onchange=()=>{
      branches.innerHTML=``;
      $.ajax({
      url: window.location.origin+"/my_contact/contacts/test",
      type: "GET",
      data: {"id_bank":userBark.value},
      success: (data) => {
        data=JSON.parse(data);
        data=JSON.parse(data);
        data.forEach(row => {
          branches.innerHTML+=`
            <option value=${row.ID}>${row.Name}</option>
          `
        });
      }
    })
    }
    $("#userBark").change();
});
</script>
</body>
</html>
