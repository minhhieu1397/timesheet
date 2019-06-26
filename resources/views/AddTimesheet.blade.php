<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add timesheet</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-offset">
				<form action="" method="POST" role="form">
					<legend> Add Timesheet</legend>

					<div class="form-group">
						<label for="">Date</label>
						<input type="text" class="form-control" id="date" placeholder="Date" name="date">
					</div>
					
					<div class="form-group">
						<label for="">Work</label>
						<input type="text" class="form-control" id="work" placeholder="Work" name="work">
					</div>
					<div class="form-group">
						<label for="">Difficulty</label>
						<input type="text" class="form-control" id="difficulty" placeholder="Difficulty" name="difficulty">
					</div>

					<div class="form-group">
						<label for="">Intention</label>
						<input type="text" class="form-control" id="intention" placeholder="Intention" name="intention">
					</div>

					<button type="submit" class="btn btn-primary">Add</button>

				</form>
			</div>
		</div>
		
	</div>



	
</body>
</html>