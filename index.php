<?php
include("auth/check.php");
?>
<!DOCTYPE html>
<html>
<head><title>VTM | Dashboard</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="css/mainbfdf.css?version=2.3" rel="stylesheet">
    <link href="icon_fonts_assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<?php
$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$role = $row['role'];
$userid = $row['userid'];

?>
<div class="all-wrapper menu-side with-side-panel">
    <div class="layout-w">
        <div class="desktop-menu menu-side-w menu-activated-on-click">
            <div class="menu-and-user">
                <div class="logged-user-w">
                    <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name"><?php echo $username ?></div>
                        <div class="logged-user-role"><?php echo $role ?></div>
                    </div>
                </div>
                <ul class="main-menu">
                    <li><a href="index.php">
                            <div class="icon-w">
                                <div class="os-icon os-icon-window-content"></div>
                            </div>
                            <span>Dashboard</span></a>
                    </li>
                    <li><a href="submitdelivery.php">
                            <div class="icon-w">
                                <div class="os-icon os-icon-delivery-box-2"></div>
                            </div>
                            <span>Submit Delivery</span></a>
                    </li>
                    <li><a href="auth/logout.php">
                            <div class="icon-w">
                                <div class="os-icon os-icon-signs-11"></div>
                            </div>
                            <span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-w">
            <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-sm-12">
                            <!--<div class="element-wrapper">
                                <h6 class="element-header">My Statistics</h6>
                                <div class="element-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="element-box el-tablo">
                                                <div class="label">Successful Deliveries</div>
                                                <div class="value">2</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="element-box el-tablo">
                                                <div class="label">Miles Driven</div>
                                                <div class="value">259</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="element-box el-tablo">
                                                <div class="label">Jobs Completed</div>
                                                <div class="value">2</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="element-box el-tablo">
                                                <div class="label">Active Drivers</div>
                                                <div class="value">4</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <div class="content-panel-toggler"><i
                                class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
                    <div class="content-i">
                        <div class="element-wrapper"><h6 class="element-header">Recent Deliveries</h6>
                            <div class="element-box">
                                <div class="table-responsive">
                                    <table class="table table-lightborder">
                                        <thead>
                                        <tr>
                                            <th>JOB ID</th>
                                            <th>Driver Name</th>
                                            <th>Start</th>
                                            <th>End</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-right">Profit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql = "SELECT * FROM deliveries WHERE username='$username' ORDER BY deliveryid DESC LIMIT 0,5";
                                        $result = mysqli_query($db, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                            if ($row['approved'] == 1) $approved='<div class="status-pill green" data-title="Complete"
                                                     data-toggle="tooltip"></div>';
                                                else
                                                    $approved='<div class="status-pill yellow" data-title="Pending"
                                                     data-toggle="tooltip"></div>';
                                            echo "<tr>";
                                            echo "<td>" . $row['deliveryid'] . "</td>";
                                            echo "<td>" . $row['username'] . "</td>";
                                            echo "<td>" . $row['start'] . "</td>";
                                            echo "<td>" . $row['destination'] . "</td>";
                                            echo "<td class=\"text-center\">"; echo $approved; "</td>";
                                            echo "<td class=\"text-right\">£" . $row['income'] . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="bower_components/jquery/dist/jquery.min.js"></script>
            <script src="bower_components/moment/moment.js"></script>
            <script src="bower_components/chart.js/dist/Chart.min.js"></script>
            <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
            <script src="bower_components/ckeditor/ckeditor.js"></script>
            <script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
            <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
            <script src="bower_components/dropzone/dist/dropzone.js"></script>
            <script src="bower_components/editable-table/mindmup-editabletable.js"></script>
            <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
            <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
            <script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
            <script src="js/mainbfdf.js?version=2.3"></script>
</body>
</html>
