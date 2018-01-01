<?php
include("auth/check.php");
include('auth/submit.php');
?>
<!DOCTYPE html>
<html>
<head><title>VTM | Submit Delivery</title>
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
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper"><h6 class="element-header">Submit Delivery</h6>
                                <div class="element-box">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <form method="post" action="">
                                            <div class="form-group"><label for=""> Start Location</label><select
                                                        class="form-control" name="start">
                                                    <option>Select Start Location</option>
                                                    <option>Aalborg</option>
                                                    <option>Aberdeen</option>
                                                    <option>Amsterdam</option>
                                                    <option>Banská Bystrica</option>
                                                    <option>Bergen</option>
                                                    <option>Berlin</option>
                                                    <option>Bern</option>
                                                    <option>Białystok</option>
                                                    <option>Birmingham</option>
                                                    <option>Bordeaux</option>
                                                    <option>Bourges</option>
                                                    <option>Bratislava</option>
                                                    <option>Bremen</option>
                                                    <option>Brest</option>
                                                    <option>Brussels</option>
                                                    <option>Brno</option>
                                                    <option>Budapest</option>
                                                    <option>Calais</option>
                                                    <option>Cambridge</option>
                                                    <option>Cardiff</option>
                                                    <option>Carlisle</option>
                                                    <option>Clermont-Ferrand</option>
                                                    <option>Civaux</option>
                                                    <option>Debrecen</option>
                                                    <option>Dijon</option>
                                                    <option>Dortmund</option>
                                                    <option>Dover</option>
                                                    <option>Dresden</option>
                                                    <option>Duisburg</option>
                                                    <option>Düsseldorf</option>
                                                    <option>Edinburgh</option>
                                                    <option>Erfurt</option>
                                                    <option>Esbjerg</option>
                                                    <option>Felixstowe</option>
                                                    <option>Frankfurt am Main</option>
                                                    <option>Frederikshavn</option>
                                                    <option>Gdańsk</option>
                                                    <option>Gedser</option>
                                                    <option>Genève</option>
                                                    <option>Glasgow</option>
                                                    <option>Golfech</option>
                                                    <option>Göteborg</option>
                                                    <option>Graz</option>
                                                    <option>Grimsby</option>
                                                    <option>Groningen</option>
                                                    <option>Hamburg</option>
                                                    <option>Hannover</option>
                                                    <option>Helsingborg</option>
                                                    <option>Hirtshals</option>
                                                    <option>Innsbruck</option>
                                                    <option>Jönköping</option>
                                                    <option>Kalmar</option>
                                                    <option>Karlskrona</option>
                                                    <option>Kassel</option>
                                                    <option>Katowice</option>
                                                    <option>Kiel</option>
                                                    <option>Klagenfurt am Wörthersee</option>
                                                    <option>København</option>
                                                    <option>Köln</option>
                                                    <option>Košice</option>
                                                    <option>Kraków</option>
                                                    <option>Kristiansand</option>
                                                    <option>La Rochelle</option>
                                                    <option>Leipzig</option>
                                                    <option>Le Havre</option>
                                                    <option>Le Mans</option>
                                                    <option>Liège</option>
                                                    <option>Lille</option>
                                                    <option>Limoges</option>
                                                    <option>Linköping</option>
                                                    <option>Linz</option>
                                                    <option>Liverpool</option>
                                                    <option>Łódź</option>
                                                    <option>London</option>
                                                    <option>Lublin</option>
                                                    <option>Luxembourg</option>
                                                    <option>Lyon</option>
                                                    <option>Magdeburg</option>
                                                    <option>Malmö</option>
                                                    <option>Manchester</option>
                                                    <option>Mannheim</option>
                                                    <option>Marseille</option>
                                                    <option>Metz</option>
                                                    <option>Milano</option>
                                                    <option>Montpellier</option>
                                                    <option>München</option>
                                                    <option>Nantes</option>
                                                    <option>Newcastle-upon-Tyne</option>
                                                    <option>Nice</option>
                                                    <option>Nürnberg</option>
                                                    <option>Nynäshamn</option>
                                                    <option>Odense</option>
                                                    <option>Olsztyn</option>
                                                    <option>Örebro</option>
                                                    <option>Oslo</option>
                                                    <option>Osnabrück</option>
                                                    <option>Ostrava</option>
                                                    <option>Paluel</option>
                                                    <option>Paris</option>
                                                    <option>Pécs</option>
                                                    <option>Plymouth</option>
                                                    <option>Poznań</option>
                                                    <option>Praha</option>
                                                    <option>Reims</option>
                                                    <option>Rennes</option>
                                                    <option>Roscoff</option>
                                                    <option>Rostock</option>
                                                    <option>Rotterdam</option>
                                                    <option>Saint-Alban-du-Rhône</option>
                                                    <option>Saint-Laurent</option>
                                                    <option>Salzburg</option>
                                                    <option>Sheffield</option>
                                                    <option>Södertälje</option>
                                                    <option>Southampton</option>
                                                    <option>Stavanger</option>
                                                    <option>Strasbourg</option>
                                                    <option>Stockholm</option>
                                                    <option>Stuttgart</option>
                                                    <option>Swansea</option>
                                                    <option>Szeged</option>
                                                    <option>Szczecin</option>
                                                    <option>Torino</option>
                                                    <option>Toulouse</option>
                                                    <option>Trelleborg</option>
                                                    <option>Uppsala</option>
                                                    <option>Västerås</option>
                                                    <option>Växjö</option>
                                                    <option>Venezia</option>
                                                    <option>Verona</option>
                                                    <option>Warszawa</option>
                                                    <option>Wien</option>
                                                    <option>Wrocław</option>
                                                    <option>Zürich</option>

                                                </select></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group"><label for=""> Destination</label><select
                                                        class="form-control" name="destination">
                                                    <option>Select Destination</option>
                                                    <option>Aalborg</option>
                                                    <option>Aberdeen</option>
                                                    <option>Amsterdam</option>
                                                    <option>Banská Bystrica</option>
                                                    <option>Bergen</option>
                                                    <option>Berlin</option>
                                                    <option>Bern</option>
                                                    <option>Białystok</option>
                                                    <option>Birmingham</option>
                                                    <option>Bordeaux</option>
                                                    <option>Bourges</option>
                                                    <option>Bratislava</option>
                                                    <option>Bremen</option>
                                                    <option>Brest</option>
                                                    <option>Brussels</option>
                                                    <option>Brno</option>
                                                    <option>Budapest</option>
                                                    <option>Calais</option>
                                                    <option>Cambridge</option>
                                                    <option>Cardiff</option>
                                                    <option>Carlisle</option>
                                                    <option>Clermont-Ferrand</option>
                                                    <option>Civaux</option>
                                                    <option>Debrecen</option>
                                                    <option>Dijon</option>
                                                    <option>Dortmund</option>
                                                    <option>Dover</option>
                                                    <option>Dresden</option>
                                                    <option>Duisburg</option>
                                                    <option>Düsseldorf</option>
                                                    <option>Edinburgh</option>
                                                    <option>Erfurt</option>
                                                    <option>Esbjerg</option>
                                                    <option>Felixstowe</option>
                                                    <option>Frankfurt am Main</option>
                                                    <option>Frederikshavn</option>
                                                    <option>Gdańsk</option>
                                                    <option>Gedser</option>
                                                    <option>Genève</option>
                                                    <option>Glasgow</option>
                                                    <option>Golfech</option>
                                                    <option>Göteborg</option>
                                                    <option>Graz</option>
                                                    <option>Grimsby</option>
                                                    <option>Groningen</option>
                                                    <option>Hamburg</option>
                                                    <option>Hannover</option>
                                                    <option>Helsingborg</option>
                                                    <option>Hirtshals</option>
                                                    <option>Innsbruck</option>
                                                    <option>Jönköping</option>
                                                    <option>Kalmar</option>
                                                    <option>Karlskrona</option>
                                                    <option>Kassel</option>
                                                    <option>Katowice</option>
                                                    <option>Kiel</option>
                                                    <option>Klagenfurt am Wörthersee</option>
                                                    <option>København</option>
                                                    <option>Köln</option>
                                                    <option>Košice</option>
                                                    <option>Kraków</option>
                                                    <option>Kristiansand</option>
                                                    <option>La Rochelle</option>
                                                    <option>Leipzig</option>
                                                    <option>Le Havre</option>
                                                    <option>Le Mans</option>
                                                    <option>Liège</option>
                                                    <option>Lille</option>
                                                    <option>Limoges</option>
                                                    <option>Linköping</option>
                                                    <option>Linz</option>
                                                    <option>Liverpool</option>
                                                    <option>Łódź</option>
                                                    <option>London</option>
                                                    <option>Lublin</option>
                                                    <option>Luxembourg</option>
                                                    <option>Lyon</option>
                                                    <option>Magdeburg</option>
                                                    <option>Malmö</option>
                                                    <option>Manchester</option>
                                                    <option>Mannheim</option>
                                                    <option>Marseille</option>
                                                    <option>Metz</option>
                                                    <option>Milano</option>
                                                    <option>Montpellier</option>
                                                    <option>München</option>
                                                    <option>Nantes</option>
                                                    <option>Newcastle-upon-Tyne</option>
                                                    <option>Nice</option>
                                                    <option>Nürnberg</option>
                                                    <option>Nynäshamn</option>
                                                    <option>Odense</option>
                                                    <option>Olsztyn</option>
                                                    <option>Örebro</option>
                                                    <option>Oslo</option>
                                                    <option>Osnabrück</option>
                                                    <option>Ostrava</option>
                                                    <option>Paluel</option>
                                                    <option>Paris</option>
                                                    <option>Pécs</option>
                                                    <option>Plymouth</option>
                                                    <option>Poznań</option>
                                                    <option>Praha</option>
                                                    <option>Reims</option>
                                                    <option>Rennes</option>
                                                    <option>Roscoff</option>
                                                    <option>Rostock</option>
                                                    <option>Rotterdam</option>
                                                    <option>Saint-Alban-du-Rhône</option>
                                                    <option>Saint-Laurent</option>
                                                    <option>Salzburg</option>
                                                    <option>Sheffield</option>
                                                    <option>Södertälje</option>
                                                    <option>Southampton</option>
                                                    <option>Stavanger</option>
                                                    <option>Strasbourg</option>
                                                    <option>Stockholm</option>
                                                    <option>Stuttgart</option>
                                                    <option>Swansea</option>
                                                    <option>Szeged</option>
                                                    <option>Szczecin</option>
                                                    <option>Torino</option>
                                                    <option>Toulouse</option>
                                                    <option>Trelleborg</option>
                                                    <option>Uppsala</option>
                                                    <option>Västerås</option>
                                                    <option>Växjö</option>
                                                    <option>Venezia</option>
                                                    <option>Verona</option>
                                                    <option>Warszawa</option>
                                                    <option>Wien</option>
                                                    <option>Wrocław</option>
                                                    <option>Zürich</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group"><label for=""> Distance (Miles)</label><input
                                                        class="form-control" name="distance" placeholder="Distance" type="number">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group"><label for=""> Income (£)</label><input
                                                        class="form-control" name="income" placeholder="Income" type="number">
                                            </div>
                                        </div>
                                    </div>
                                    <fieldset class="form-group">
                                        <legend><span>Evidence & Notes</span></legend>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group"><label for=""> Proof of Delivery (<a
                                                                href="http://imgur.com/upload" target="_blank">Upload
                                                            Tool</a>)</label><input
                                                            class="form-control" name="proof"
                                                            placeholder="http://i.imgur.com/tB3kwY9.jpg" type="url">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group"><label> Additional Notes</label><textarea
                                                    class="form-control" name="notes" rows="3"></textarea></div>
                                    </fieldset>
                                    <div class="form-buttons-w">
                                        <button type="submit" name="submit" class="btn btn-primary"> Submit</button>
                                    </div>
                                    </form>
                                    <span><?php echo $error; ?></span>
                                </div>
                            </div>
                        </div>
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
