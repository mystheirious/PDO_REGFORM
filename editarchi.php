<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "system-ui";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<?php $getArchiByID = getArchiByID($pdo, $_GET['architectID']); ?>
	<form action="core/handleForms.php?architectID=<?php echo $_GET['architectID']; ?>" method="POST">
		<h3>Edit this record of an architect with an ID of <?php echo $getArchiByID['architectID'];?>: </h3>
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getArchiByID['firstName']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getArchiByID['lastName']; ?>">
		</p>
		<p>
			<label for="emailAddress">Email Address</label>
			<input type="text" name="emailAddress" value="<?php echo $getArchiByID['emailAddress']; ?>">
		</p>
		<p>
			<label for="contactNumber">Contact Number</label>
			<input type="text" name="contactNumber" value="<?php echo $getArchiByID['contactNumber']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getArchiByID['gender']; ?>">
		</p>
		<p>
			<label for="licenseNumber">License Number</label>
			<input type="text" name="licenseNumber" value="<?php echo $getArchiByID['licenseNumber']; ?>"></p>
		<p>
			<label for="specialization">Specialization</label>
			<input type="text" name="specialization" value="<?php echo $getArchiByID['specialization']; ?>">
			<input type="submit" name="editArchiBtn">
		</p>
	</form>
</body>
</html>