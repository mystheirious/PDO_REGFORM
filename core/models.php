<!-- Functions for interacting with the database -->

<?php 

require_once 'dbConfig.php';

function insertIntoArchiRecords($pdo, $firstName, $lastName, 
$emailAddress, $contactNumber, $gender, $licenseNumber, $specialization) {

	$sql = "INSERT INTO architect_records (firstName, lastName, emailAddress, contactNumber, gender, licenseNumber, specialization) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$firstName, $lastName, $emailAddress, $contactNumber, $gender, $licenseNumber, $specialization]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllArchiRecords($pdo) {
	$sql = "SELECT * FROM architect_records";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getArchiByID($pdo, $architectID) {
	$sql = "SELECT * FROM architect_records WHERE architectID = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$architectID])) {
		return $stmt->fetch();
	}
}

function updateAnArchi($pdo, $architectID, $firstName, $lastName, $emailAddress, $contactNumber, $gender, $licenseNumber, $specialization) {

	$sql = "UPDATE architect_records 
				SET firstName = ?, 
					lastName = ?, 
					emailAddress = ?, 
					contactNumber = ?, 
					gender = ?, 
					licenseNumber = ?, 
					specialization = ? 
			WHERE architectID = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$firstName, $lastName, $emailAddress, $contactNumber, $gender, $licenseNumber, $specialization, $architectID]);

	if ($executeQuery) {
		return true;
	}
}

function deleteAnArchi($pdo, $architectID) {

	$sql = "DELETE FROM architect_records WHERE architectID = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$architectID]);

	if ($executeQuery) {
		return true;
	}

}
?>