<!DOCTYPE html>
<?php
include('authentication.php');
?>
<html lang="en">
	<head>
		<style>	
		.table {
			left: 0;
			right: 0;
			margin: auto;
			width: 80%;
			margin-bottom: 20px;
		}	
 
		.table-striped tbody > tr:nth-child(odd) > td,
		.table-striped tbody > tr:nth-child(odd) > th {
			background-color: #f9f9f9;
		}

		.prepared_details{
			margin-left: 9vw;
		}
		.logo{
			max-width: 197px;
    		margin: auto;
		}

		.logo img{
			left:0;
			right:0;
			margin:auto;
			width: 100%;
		}
 
		@media print{
			#print {
				display:none;
			}
		}
		@media print {
			#PrintButton {
				display: none;
			}
		}
 
		@page {
			size: auto;   /* auto is the initial value */
			margin: 0;  /* this affects the margin in the printer settings */
		}
	</style>
	</head>
<body>

	<div class="logo">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../image/crs-logo.png" alt="">
      </a>
	</div>

	<h2 style="text-align: center;">Admin Activity</h2>
	<br/> <br/>

	<div class="prepared_details">
	<b style="color:blue;">Prepared By:</b>
	<?php
	echo $_SESSION['auth_user']['user_name'];
	?>
	<br>
	<b style="color:blue;">Date Prepared:</b>
	<?php
		$date = date("F d, Y", strtotime("+6 HOURS"));
		echo $date;
	?>
	</div>
	<br /><br />
	<table class="table table-striped">
		<thead>
			<tr>
				<th><center>ID</center></th>
                <th><center>Name</center></th>
                <th><center>Action Made</center></th>
                <th><center>Date Created</center></th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = $con->query("SELECT * FROM `auditlog` WHERE created_at > DATE_SUB( NOW(), INTERVAL 1 MONTH) ORDER BY created_at DESC");
				while($fetch = $query->fetch_array()){
 
			?>
 
			<tr>
				<td style="text-align:center;"><?php echo $fetch['id']?></td>
				<td style="text-align:center;"><?php echo $fetch['username']?></td>
				<td style="text-align:center;"><?php echo $fetch['action']?></td>
				<?php $date = strtotime($fetch['created_at']);?>
				<td style="text-align:center;"><?php echo date('F d, Y', $date);?></td>
			</tr>
 
			<?php
				}
			?>
		</tbody>
	</table>
	<center><button id="PrintButton" onclick="PrintPage()">Print</button></center>
</body>
<script type="text/javascript">
	function PrintPage() {
		window.print();
	}
	window.addEventListener('DOMContentLoaded', (event) => {
   		PrintPage()
		setTimeout(function(){ window.close() },750)
	});
</script>
</html>