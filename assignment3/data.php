<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/main.css" />

	<title>160204075</title>
</head>
<body>
	<?php
	$myfile = fopen("data.csv", "a+");
	foreach ($_POST as $key) {
			# code...
		fputcsv($myfile, explode(",", $key));
	}
	fclose($myfile);
	?>
	<div class="container">
		<table>
			<tr>
				<th>Username</th>
				<th>Email</th> 
				<th>Password</th>
			</tr>
			<?php
			$f = fopen("data.csv", "r");
			while (($line = fgetcsv($f)) !== false) {
				echo "<tr>\n";
				foreach ($line as $cell) {
					echo "<td>" . htmlspecialchars($cell) . "</td>";
				}
				echo "</tr>\n";
			}
			fclose($f);
			echo "\n</table>";
			?>
		</table>
	</div>
</body>
</html>