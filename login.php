<?php
include('auth/login.php'); // Include Login Script
if ((isset($_SESSION['username']) != ''))
{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head><title>VTM | Login</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="css/mainbfdf.css?version=2.3" rel="stylesheet">
</head>
<body class="auth-wrapper">
<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">
        <br>
        <h4 class="auth-header">VTM | Login Form</h4>
        <form method="post" action="">
            <div class="form-group"><label for="">Username</label><input class="form-control"
                                                                         name="username" placeholder="Enter your username" type="text">
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
            </div>
            <div class="form-group"><label for="">Password</label><input class="form-control"
                                                                         name="password" placeholder="Enter your password"
                                                                         type="password">
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Log me in</button>
        </form>
            <span><?php echo $error; ?></span>
    </div>
</div>
</body>
</html>
