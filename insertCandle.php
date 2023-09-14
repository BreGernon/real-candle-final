<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $candlename = $_POST['candlename'];
    $scent = $_POST['scent'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO candle_database (candlename, scent, quantity) VALUES('{$candlename}', '{$scent}', '{$quantity}')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:mainPage.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
<title>Insert Candle</title>
</head>
<body style="background-color:aquamarine;">
<div class = "container my-5">
	<form method="post">
		<div class="form-group">
			<label>Candle Name</label> <input type="text" class="form-control"
				placeholder="Enter candle name" name="candlename" autocomplete="off">
		</div>
		<div class="form-group">
			<label>Candle Scent</label> <input type="text" class="form-control"
				placeholder="Enter candle scent" name="scent" autocomplete="off">
		</div>
		<div class="form-group">
			<label>Quantity</label> <input type="text" class="form-control"
				placeholder="Enter number of candles" name="quantity" autocomplete="off">
		</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
	</div>
</body>
</html>
