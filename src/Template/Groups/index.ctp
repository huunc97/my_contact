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
    <link href="admin/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="admin/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->Form->create("",['type'=>'get']) ?>
                        <input type="text" name="keyword" placeholder="Search name" autofocus="autofocus">
                        <button type="submit" class="btn btn-primary">Search</button>
                    <?= $this->Form->end() ?>
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h3 class="title">Groups Table</h3>
                            <a href="../my_contact/groups/Add" class="btn btn-primary pull-right">Add Groups</a>
                            <p class="category">Information</p>
                        </div>
                    <div class="card-content table-responsive">
                        <table class="table">
                            <thead>
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
                            <div class="paginator">
                                    <ul class="pagination">
                                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                        <?= $this->Paginator->numbers() ?>
                                        <?= $this->Paginator->next(__('next') . ' >') ?>
                                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                                    </ul>
                                    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
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
