<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql = "SELECT * FROM `candle_database` WHERE (`id` = '$id')";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

$name = $row['candlename'];
$smell = $row['scent'];
$amount = $row['quantity'];

if (isset($_POST['update'])) {
    $candlename = $_POST['candlename'];
    $scent = $_POST['scent'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE `candle_database` SET `candlename` = '$candlename', `scent` = '$scent', `quantity` = '$quantity' WHERE (`id` = '$id')";
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
				placeholder="Enter candle name" name="candlename" autocomplete="off" value = "<?php echo $name; ?>">
		</div>
		<div class="form-group">
			<label>Candle Scent</label> <input type="text" class="form-control"
				placeholder="Enter candle scent" name="scent" autocomplete="off" value = "<?php echo $smell; ?>">
		</div>
		<div class="form-group">
			<label>Quantity</label> <input type="text" class="form-control"
				placeholder="Enter number of candles" name="quantity" autocomplete="off" value = "<?php echo $amount; ?>">
		</div>
		<button type="submit" class="btn btn-primary" name="update">Update</button>
	</form>
	</div>
</body>
</html>