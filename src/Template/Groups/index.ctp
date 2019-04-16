<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="admin/img/apple-icon.png">
  <link rel="icon" type="image/png" href="admin/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="admin/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="admin/img/sidebar-1.jpg">
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
                    <?= $this->Form->create("",['type'=>'get']) ?>
                        <input type="text" name="keyword" placeholder="Search name" autofocus="autofocus">
                        <button type="submit" class="btn btn-primary">Search</button>
                    <?= $this->Form->end() ?>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title ">Groups Table</h3>
                  <a href="../my_contact/groups/Add" class="btn btn-outline-warning text-light pull-right">Add Groups</a>
                  <p class="card-category"> Information</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr>
                           <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                           <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                           <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('updated') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                         </tr>
                         </thead>
                          <tbody>
                           <?php foreach ($groups as $group): ?>
                           <tr>
                            <td><?= $this->Number->format($group->id) ?></td>
                            <td><?= h($group->name) ?></td>
                            <td><?= h($group->created) ?></td>
                            <td><?= h($group->updated) ?></td>
                             <td class="actions">
                             <?= $this->Html->link(__('Edit'), ['action' => 'edit', $group->id]) ?>
                             <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete ID :{0} ?', $group->id)]) ?>
                              </td>
                             </tr>
                            <?php endforeach; ?>
                           </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="admin/js/core/jquery.min.js"></script>
  <script src="admin/js/core/popper.min.js"></script>
  <script src="admin/js/core/bootstrap-material-design.min.js"></script>
  <script src="admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="admin/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>

</body>

</html>
