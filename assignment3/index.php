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
	<div class="container py-5">
		<form action="data.php" method="post">
			<div class="form-group">
				<label>Name : </label>
				<input type="text" class="form-control" name="name">
			</div>
			<div class="form-group">
				<label>Email : </label>
				<input type="email"class="form-control" name="email">
			</div>
			<div class="form-group">
				<label>Password : </label>
				<input type="Password" class="form-control" name="password">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</body>
</html>
