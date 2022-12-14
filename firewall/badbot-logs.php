<?php
require_once "core.php";
head();

if (isset($_GET['delete-id'])) {
    $id    = (int) $_GET["delete-id"];
    $table = $prefix . 'logs';
    $query = $mysqli->query("DELETE FROM `$table` WHERE id='$id'");
}

if (isset($_GET['delete-all'])) {
    $table = $prefix . 'logs';
    $query = $mysqli->query("DELETE FROM `$table` WHERE type='Bad Bot' or type='Fake Bot' or type='Missing User-Agent header' or type='Missing header Accept' or type='Invalid IP Address header'");
}

if (isset($_GET['ban-ip'])) {
    $ip    = $_GET["ban-ip"];
    $table = $prefix . "bans";
    
    $ip       = addslashes(htmlspecialchars($ip));
    $date     = date("d F Y");
    $time     = date("H:i");
    $reason   = "Threat";
    $redirect = 0;
    $url      = "";
    
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        $queryvalid = $mysqli->query("SELECT * FROM `$table` WHERE ip='$ip' LIMIT 1");
        $validator  = mysqli_num_rows($queryvalid);
        if ($validator <= "0") {
            $query = $mysqli->query("INSERT INTO `$table` (`ip`, `date`, `time`, `reason`, `redirect`, `url`) VALUES ('$ip', '$date', '$time', '$reason', '$redirect', '$url')");
        }
    }
}

if (isset($_GET['unban-ip'])) {
    $ip    = $_GET["unban-ip"];
	$ip    = addslashes(htmlspecialchars($ip));
	
    $table = $prefix . "bans";
    $query = $mysqli->query("DELETE FROM `$table` WHERE ip='$ip'");
}
?>
<div class="content-wrapper">

			<!--CONTENT CONTAINER-->
			<!--===================================================-->
			<div class="content-header">
				
				<div class="container-fluid">
				  <div class="row mb-2">
        		    <div class="col-sm-6">
        		      <h1 class="m-0 text-dark"><i class="fas fa-align-justify"></i> Bad Bot Logs</h1>
        		    </div>
        		    <div class="col-sm-6">
        		      <ol class="breadcrumb float-sm-right">
        		        <li class="breadcrumb-item"><a href="dashboard.php"><i class="fas fa-home"></i> Admin Panel</a></li>
        		        <li class="breadcrumb-item active">Bat Bot Logs</li>
        		      </ol>
        		    </div>
        		  </div>
    			</div>
            </div>

				<!--Page content-->
				<!--===================================================-->
				<div class="content">
				<div class="container-fluid">

                <div class="row">
				<div class="col-md-12">
                    
				    <div class="card card-dark">
						<div class="card-header">
							<h3 class="card-title">Bad Bot Logs</h3>
						</div>
						<div class="card-body">

                                    <center><a href="?delete-all" class="btn btn-flat btn-danger" title="Delete all logs"><i class="fas fa-trash"></i> Delete All</a></center>
                                    
<table id="dt-basic" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
						                  <th><i class="fas fa-user"></i> IP Address</th>
						                  <th><i class="fas fa-calendar"></i> Date</th>
										  <th><i class="fas fa-globe"></i> Browser</th>
										  <th><i class="fas fa-desktop"></i> OS</th>
										  <th><i class="fas fa-map"></i> Country</th>
						                  <th><i class="fas fa-bomb"></i> Type</th>
										  <th><i class="fas fa-cog"></i> Actions</th>
										</tr>
									</thead>
									<tbody>
<?php
$table = $prefix . 'logs';
$sql   = $mysqli->query("SELECT id, ip, date, browser, browser_code, os, os_code, country, country_code, type FROM `$table` WHERE type='Bad Bot' or type='Fake Bot' or type='Missing User-Agent header' or type='Missing header Accept' or type='Invalid IP Address header' ORDER by id DESC");
while ($row = mysqli_fetch_assoc($sql)) {
    echo '
										<tr>
						                  <td>' . $row['ip'] . '</td>
						                  <td>' . $row['date'] . '</td>
										  <td><img src="assets/img/icons/browser/' . $row['browser_code'] . '.png" /> ' . $row['browser'] . '</td>
										  <td><img src="assets/img/icons/os/' . $row['os_code'] . '.png" /> ' . $row['os'] . '</td>
										  <td><img src="assets/plugins/flags/blank.png" class="flag flag-' . strtolower($row['country_code']) . '" alt="' . $row['country'] . '" /> ' . $row['country'] . '</td>
						                  <td><i class="fas fa-robot"></i> ' . $row['type'] . '</td>
										  <td>
                                            <a href="log-details.php?id=' . $row['id'] . '" class="btn btn-flat btn-primary"><i class="fas fa-tasks"></i> Details</a>
											';
    if (get_banned($row['ip']) == 1) {
        echo '
										    <a href="badbot-logs.php?unban-ip=' . $row['ip'] . '" class="btn btn-flat btn-success"><i class="fas fa-ban"></i> Unban</a>
									        ';
    } else {
        echo '
										    <a href="badbot-logs.php?ban-ip=' . $row['ip'] . '" class="btn btn-flat btn-warning"><i class="fas fa-ban"></i> Ban</a>
									        ';
    }
    echo '
											<a href="?delete-id=' . $row['id'] . '" class="btn btn-flat btn-danger"><i class="fas fa-times"></i> Delete</a>
										  </td>
										</tr>
';
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
				<!--===================================================-->
				<!--End page content-->

			</div>
			<!--===================================================-->
			<!--END CONTENT CONTAINER-->
</div>
<script>
$(document).ready(function() {

	$('#dt-basic').dataTable( {
		"responsive": true,
        "order": [[ 1, "desc" ]],
		"language": {
			"paginate": {
			  "previous": '<i class="fas fa-angle-left"></i>',
			  "next": '<i class="fas fa-angle-right"></i>'
			}
		}
	} );
} );
</script>    
<?php
footer();
?>