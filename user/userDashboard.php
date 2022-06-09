<?php 
    session_start();

    include_once 'dbconnect.php';

    if(!isset($_SESSION['userSession'])) {
        header("Location: ../index.php");
    } 

    $usersession = $_SESSION['userSession'];
    $res = mysqli_query($con, "SELECT * FROM userTable WHERE username = '$usersession'");
    $userRow = mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>WELCOME <?php echo $userRow['fname'];?> <?php echo $userRow['lname'];?></title>
        <!-- Bootstrap Core CSS -->
        <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->
        <link href="assets/css/material.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="assets/css/sb-admin.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <!-- Custom Fonts -->
    </head>
    <body>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="userDashboard.php">WELCOME <?php echo $userRow['fname'];?> <?php echo $userRow['lname'];?></a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    
                    
                    <li class="dropdown">
                        <a href="donation.php" style="color: white; font-size: 2em; text-align: center;border: 1px solid black;margin-top:10px;">DONATE</a>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $userRow['fname']; ?> <?php echo $userRow['lname']; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="user.php"><i class="fa fa-fw fa-user"></i> Home</a>
                            </li>
                           
                            <li class="divider"></li>

                            <li>
                                <a href="user_profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="user_logout.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active">
                            <a href="userDashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                
                        <li>
                            <a href="referal.php"><i class="fa fa-fw fa-edit"></i> Referral Report</a>
                        </li>

                        <li>
                            <a href="event_list.php"><i class="fa fa-fw fa-edit"></i> Event List</a>
                        </li>

                        <li>
                            <a href="event_history.php"><i class="fa fa-fw fa-edit"></i> Event History</a>
                        </li>

                        <li>
                            <a href="account_history.php"><i class="fa fa-fw fa-edit"></i> Account History</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- navigation end -->

            <div id="page-wrapper">
                <div class="container-fluid">
                    
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header">
                            Dashboard
                            </h2>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-file"></i> Blank Page
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- Page Heading end-->

                    <!-- panel start -->
                    <div class="panel panel-primary filterable">
                        <!-- Default panel contents -->
                       <div class="panel-heading">
                        <h3 class="panel-title">User List</h3>
                        <div class="pull-right">
                            <button class="btn btn-default btn-xs btn-filter"><span class="fa fa-filter"></span> Filter</button>
                        </div>
                        </div>
                        <div class="panel-body">
                        <!-- Table -->
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="filters">
                                    <th><input type="text" class="form-control" placeholder="S/N" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Username" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Fname" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Lname" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Phone" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Email" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Date" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Refered By" disabled></th>
                                </tr>
                            </thead>

                            <?php 
                            $res=mysqli_query($con,"SELECT * FROM userTable WHERE username = '$usersession'");
                                  if (!$res) {
                                    printf("Error: %s\n", mysqli_error($con));
                                    exit();
                                }
                            while ($appointment=mysqli_fetch_array($res)) {
                                
                                // if ($appointment['status']=='process') {
                                //     $status="danger";
                                //     $icon='remove';
                                //     $checked='';

                                // } else {
                                //     $status="success";
                                //     $icon='ok';
                                //     $checked = 'disabled';
                                // }
                                

                                    echo "<tbody>";
                                    // echo "<tr class='$status'>";
                                    echo "<td>" . $appointment['id'] . "</td>";
                                    echo "<td>" . $appointment['username'] . "</td>";
                                    echo "<td>" . $appointment['fname'] . "</td>";
                                    echo "<td>" . $appointment['lname'] . "</td>";
                                    echo "<td>" . $appointment['phone'] . "</td>";
                                    echo "<td>" . $appointment['email'] . "</td>";
                                    echo "<td>" . $appointment['date'] . "</td>";
                                    echo "<td>" . $appointment['refered'] . "</td>";
                                    // echo "<td><span class='glyphicon glyphicon-".$icon."' aria-hidden='true'></span>".' '."". $appointment['status'] . "</td>";
                                    // echo "<form method='POST'>";
                                    // echo "<td class='text-center'><input type='checkbox' name='enable' id='enable' value='".$appointment['Id']."' onclick='chkit(".$appointment['Id'].",this.checked);' ".$checked."></td>";
                                    // echo "<td class='text-center'><a href='#' id='".$appointment['Id']."' class='delete'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
                            // </td>";
                               
                            } 
                                echo "</tr>";
                           echo "</tbody>";
                       echo "</table>";
                       echo "<div class='panel panel-default'>";
                       echo "<div class='col-md-offset-3 pull-right'>";
                       echo "<button class='btn btn-primary' type='submit' value='Submit' name='submit'>Update</button>";
                        echo "</div>";
                        echo "</div>";
                        ?>
                    </div>
                </div>
                    <!-- panel end -->

                    <!-- withdrawal button -->
                    <a href="withdrawal.php" class="btn btn-primary" target="_blank"> Withdraw</a>
<script type="text/javascript">
function chkit(uid, chk) {
   chk = (chk==true ? "1" : "0");
   var url = "checkdb.php?userid="+uid+"&chkYesNo="+chk;
   if(window.XMLHttpRequest) {
      req = new XMLHttpRequest();
   } else if(window.ActiveXObject) {
      req = new ActiveXObject("Microsoft.XMLHTTP");
   }
   // Use get instead of post.
   req.open("GET", url, true);
   req.send(null);
}
</script>


 
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->


       
        <!-- jQuery -->
        <script src="../user/assets/js/jquery.js"></script>
        <script type="text/javascript">
$(function() {
$(".delete").click(function(){
var element = $(this);
var appid = element.attr("id");
var info = 'id=' + appid;
if(confirm("Are you sure you want to delete this user?"))
{
 $.ajax({
   type: "POST",
   url: "deleteappointment.php",
   data: info,
   success: function(){
 }
});
  $(this).parent().parent().fadeOut(300, function(){ $(this).remove();});
 }
return false;
});
});
</script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../user/assets/js/bootstrap.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
         <!-- script for jquery datatable start-->
        <script type="text/javascript">
            /*
            Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
            */
            $(document).ready(function(){
                $('.filterable .btn-filter').click(function(){
                    var $panel = $(this).parents('.filterable'),
                    $filters = $panel.find('.filters input'),
                    $tbody = $panel.find('.table tbody');
                    if ($filters.prop('disabled') == true) {
                        $filters.prop('disabled', false);
                        $filters.first().focus();
                    } else {
                        $filters.val('').prop('disabled', true);
                        $tbody.find('.no-result').remove();
                        $tbody.find('tr').show();
                    }
                });

                $('.filterable .filters input').keyup(function(e){
                    /* Ignore tab key */
                    var code = e.keyCode || e.which;
                    if (code == '9') return;
                    /* Useful DOM data and selectors */
                    var $input = $(this),
                    inputContent = $input.val().toLowerCase(),
                    $panel = $input.parents('.filterable'),
                    column = $panel.find('.filters th').index($input.parents('th')),
                    $table = $panel.find('.table'),
                    $rows = $table.find('tbody tr');
                    /* Dirtiest filter function ever ;) */
                    var $filteredRows = $rows.filter(function(){
                        var value = $(this).find('td').eq(column).text().toLowerCase();
                        return value.indexOf(inputContent) === -1;
                    });
                    /* Clean previous no-result if exist */
                    $table.find('tbody .no-result').remove();
                    /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
                    $rows.show();
                    $filteredRows.hide();
                    /* Prepend no-result row if all rows are filtered */
                    if ($filteredRows.length === $rows.length) {
                        $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
                    }
                });
            });
        </script>
        <!-- script for jquery datatable end-->

    </body>
</html>