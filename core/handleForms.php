<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewArchiBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$emailAddress = trim($_POST['emailAddress']);
    $contactNumber = trim($_POST['contactNumber']);
	$gender = trim($_POST['gender']);
	$licenseNumber = trim($_POST['licenseNumber']);
	$specialization = trim($_POST['specialization']);

	if (!empty($firstName) && !empty($lastName) && !empty($emailAddress) && !empty($contactNumber) && !empty($gender)  && !empty($licenseNumber)  && !empty($specialization)) {
			$query = insertIntoArchiRecords($pdo, $firstName, $lastName, 
			$emailAddress, $contactNumber, $gender, $licenseNumber, $specialization);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editArchiBtn'])) {
	$architectID = $_GET['architectID'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$emailAddress = trim($_POST['emailAddress']);
    $contactNumber = trim($_POST['contactNumber']);
	$gender = trim($_POST['gender']);
	$licenseNumber = trim($_POST['licenseNumber']);
	$specialization = trim($_POST['specialization']);

	if (!empty($architectID) && !empty($firstName) && !empty($lastName) && !empty($emailAddress) && !empty($contactNumber) && !empty($gender)  && !empty($licenseNumber)  && !empty($specialization)) {

		$query = updateAnArchi($pdo, $architectID, $firstName, $lastName, $emailAddress, $contactNumber, $gender, $licenseNumber, $specialization);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}

}


if (isset($_POST['deleteArchiBtn'])) {

	$query = deleteAnArchi($pdo, $_GET['architectID']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}
?>