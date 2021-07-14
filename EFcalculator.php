<?php
if (isset($_POST['submit1'])) :
	$required = $_POST['required'];
	$year = $_POST['year'];
	$extra = $_POST['extra'];
	$monthly = $_POST['monthly'];

	$get= $monthly*12*$year*(0.07);
    $get= $monthly*12*$year+$get+$extra;
    $rem= $required-$get;
    if($rem<0)
    {
        $rem=0;
    }


endif;
?>
<?php include_once("navbar.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="design2.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Emergency Fund Calculator</title>
</head>

<body>

	<div class="container">
		
		<div class="row">
			<div class="col-md-6 mx-auto py-5">
				<div class="card">
					<div class="card-header bg-primary text-white text-center font-weight-bold">
						Emergency Fund Calculator
					</div>

					<div class="card-body">
						<form action="" method="post">
							<div class="form-group">
								<input type="number" name="required" placeholder="Required amount for emergency" required="" class="form-control" value="<?php if (!empty($required)) : echo $required;
																																				endif; ?>">
							</div>
							<div class="form-group">
								<input type="number" name="year" placeholder="In what time period you want to build the fund?" required="" class="form-control" value="<?php if (!empty($year)) : echo $year;
																																							endif; ?>">
							</div>
							<div class="form-group">
								<input type="number" name="extra" placeholder="How much have you saved for an emergency fund? " required="" class="form-control" value="<?php if (!empty($extra)) : echo $extra;
																																							endif; ?>">
							</div>
							<div class="form-group">
								<input type="number" name="monthly" placeholder="How much can you save monthly for this purpose?" required="" class="form-control" value="<?php if (!empty($monthly)) : echo $monthly;
																																						endif; ?>">
							</div>
							<div class="form-group text-center">
								<input type="submit" name="submit1" class="btn btn-success" value="Calculate">
							</div>
						</form>
					</div>
					<div class="card-footer bg-white">
						<table class="table table-bordered table-hover">
							<tr>
								<th>Amount you will get for your Emergency is </th>
								<th>&#8377; <?php echo number_format(@$get); ?></th>
							</tr>
                            <tr>
								<th>Required amount is </th>
								<th>&#8377; <?php echo number_format(@$required); ?></th>
							</tr>
                            <tr>
								<th>You are falling short by  </th>
								<th>&#8377; <?php echo number_format(@$rem); ?></th>
							</tr>

						</table>
					</div>
				</div>
			</div>
		</div>

	</div>

</body>

</html>