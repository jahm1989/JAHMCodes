<?php
// Data required for perform the db connection 
$username = "root";
$password = "";
$database = "School";
$servername = "localhost";

/**
* Helper function to create the DB Connection using required defined data.
*/
function createDBConnection(){ 
	global $servername, $username, $password, $database;
	$conn = new mysqli($servername, $username, $password, $database);
	checkConnection($conn);
	return $conn;
}

/**
* Helper function to check the created DB Connection 
*/
function checkConnection($conn) {
	if ( is_null($conn) || $conn->connect_error ) {
    	die("Connection failed: " . $conn->connect_error);
	} 
}

/** 
* Helper function to close the DB Connection.
*/
function closeConnection($conn){
	if( !is_null($conn) )
		$conn->close();
}

/*
* Function to retrieve the SC_Students table data and place in in HTML Table form.
*/
function getAllStudents(){
	$conn = createDBConnection();
	$sql = "SELECT * FROM SC_Students";		// SQL Call string
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {			// Check if there are rows in the query result.

		echo "<table class='tblContent'><thead><tr>".		// Notice that the output will be in form of echo calls.
	     "<th>Id</th>".
	     "<th>First Name</th>".
	     "<th>Last Name</th>".
	     "<th>Level</th>".
	     "</tr></thead><tbody>";

    	while($row = $result->fetch_assoc()) {				// Iterate over the result variable using fetch_assoc()
    		echo "<tr><td>".$row["Id"]."</td><td>".$row["Name"]."</td><td>".$row["LastName"]."</td><td>".$row["Level"]."</td></tr>";
   		 }

   		 echo "</tbody></table>";
	} else {
    	echo "<p> There are no results </p>";
	}
	closeConnection($conn);
}

/*
* Function to retrieve the SC_Students with Notes table data and place in in HTML Table form.
* Here, we used a INNER JOIN in order to get the the Subject and the Studen information from the IdSubject and IdStudent columns.
*/
function getAllStudentsNotes(){
	$conn = createDBConnection();
	$sql = "SELECT st.Id as StudentId, st.Name as Name, st.LastName as LastName, sub.Name as Subject, stsub.Note as Note FROM SC_Student_Subject stsub ".		
		   " INNER JOIN SC_Subject sub ON stsub.IdSubject = sub.Id".		
		   " INNER JOIN SC_Students st ON stsub.IdStudent = st.Id";		// SQL Call string
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {			// Check if there are rows in the query result.

		echo "<table class='tblContent'><thead><tr>".		// Notice that the output will be in form of echo calls.
	     "<th>Id</th>".
	     "<th>Name</th>".
	     "<th>Subject</th>".
	     "<th>Note</th>".
	     "</tr></thead><tbody>";

    	while($row = $result->fetch_assoc()) {				// Iterate over the result variable using fetch_assoc()
    		echo "<tr><td>".$row["StudentId"]."</td><td>".$row["Name"]." ".$row["LastName"]."</td><td>".$row["Subject"]."</td><td>".$row["Note"]."</td></tr>";
   		 }

   		 echo "</tbody></table>";
	} else {
    	echo "<p> There are no results </p>";
	}
	closeConnection($conn);
}

/*
* Function to retrieve the SC_Subject table data and place in in HTML Table form.
* Here, we used a INNER JOIN in order to get the Department name based on the IdDepartment Column.
*/
function getAllSubjects(){
	$conn = createDBConnection();
	$sql = "SELECT sub.Id, sub.Name, dep.Name as DepName FROM SC_Subject sub ".
		   " INNER JOIN SC_Department dep ON sub.IdDepartment = dep.Id";		// SQL Call string
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {							// Check if there are rows in the query result.

		echo "<table class='tblContent'><thead><tr>".		// Notice that the output will be in form of echo calls.
	     "<th>Id</th>".
	     "<th>Subject</th>".
	     "<th>Department</th>".
	     "</tr></thead><tbody>";

    	while($row = $result->fetch_assoc()) {				// Iterate over the result variable using fetch_assoc()
    		echo "<tr><td>".$row["Id"]."</td><td>".$row["Name"]."</td><td>".$row["DepName"]."</td></tr>";
   		 }

   		 echo "</tbody></table>";
	} else {
    	echo "<p> There are no results </p>";
	}
	closeConnection($conn);
}

/*
* Function to retrieve the SC_Department table data and place in in HTML Table form.
*/
function getAllDepartments(){
	$conn = createDBConnection();
	$sql = "SELECT * FROM SC_Department";		// SQL Call string
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {				// Check if there are rows in the query result.

		echo "<table class='tblContent'><thead><tr>".		// Notice that the output will be in form of echo calls.
	     "<th>Id</th>".
	     "<th>Department Name</th>".
	     "</tr></thead><tbody>";

    	while($row = $result->fetch_assoc()) {				// Iterate over the result variable using fetch_assoc()
    		echo "<tr><td>".$row["Id"]."</td><td>".$row["Name"]."</td></tr>";
   		 }

   		 echo "</tbody></table>";
	} else {
    	echo "<p> There are no results </p>";
	}
	closeConnection($conn);
}

?>