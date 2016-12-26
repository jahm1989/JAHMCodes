<!DOCTYPE html>
<?php include 'connectdb.php';?>  <!-- Including the connectiondb.php file in order to use the defined functions to retrieve the data from the Database. -->
<html>
<head>
	<title>Simple PDP DB Connection Example</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="" />
	<meta name="copyright" content="" />
	<link rel="stylesheet" type="text/css" href="css/styles.css" media="all" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
<div class="">

<header class="">
	<section>
		<h1>Simple PHP DB Connection Example</h1>
	</section>
</header>

<div id="contenido">
	<main class="mtabs">
  		<input id="tab1" type="radio" name="tabs" checked>
  		<label for="tab1">Students</label>
    	<input id="tab2" type="radio" name="tabs">
  		<label for="tab2">Students (With Notes)</label>
    	<input id="tab3" type="radio" name="tabs">
  		<label for="tab3">Subjects</label>
    	<input id="tab4" type="radio" name="tabs">
		<label for="tab4">Department</label>
    
  <section id="content1">
    <?php getAllStudents();?>
  </section>
    
  <section id="content2">
  	 <?php getAllStudentsNotes();?>
  </section>
    
  <section id="content3">
    <?php getAllSubjects();?>
  </section>
    
  <section id="content4">
    <?php getAllDepartments();?>
  </section>
    
</main>

</div>

<div class="">
	<hr class ="alt" />
	<div class="foot">
		<p>@JHIJAR Example</p>
	</div>
</div>

</div>
</body>

