<!DOCTYPE HTML>
<html>
	<head>
		<title>Student Grades</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <style> #inner{border-style:solid; 
        border-color: #5385c1;  }</style>
		 <?php 
		 include_once ("base.php");
		
		if(!isset($_SESSION["username"])){
			header("location: login.php");
		}

		if($_SESSION["type"]==0){
			header("location: dashboard.php"); /// User Validation (If user is not teacher return to dashboard.)
		}

		?>
	</head>
	
	<script>
			function myFunction2() {
			// Declare variables
			var input, filter, table, tr, td, i, txtValue;
			input = document.getElementById("myInput");
			filter = input.value.toUpperCase();
			
			tr = document.getElementsByClassName("searchableRow");

			// Loop through all table rows, and hide those who don't match the search query
			for (i = 0; i < tr.length; i++) {
				
				txtValue = tr[i].textContent || tr[i].innerText;
				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
				
			}
			}
	</script>

	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<nav id="nav">
                    
                    <?php 
					include_once("navbar.php");
					?>

                    </nav> 
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

        <!-- Three -->
		<div class="box"> <!-- Control Box -->
        	<input type="text" id="myInput" onkeyup="myFunction2()" placeholder="Search by Grades/Quiz Name">
		</div>
	<header class="align-center">
		<br>
			<br>
			<h2>All Student Grades</h2>
				</header>
        			<section id="three" class="wrapper">
						<div class="inner">
				
				
							<div class="dashbox">
								<article>
									<table>
										<tr>
										<th>Student  Name</th>
										<th>Quiz </th>
										<th>Score</th>
										<th>Detailed View</th>
									</tr>
									<?php

									$sql = "SELECT results.id, quiz.name AS quiz_name, results.score, users.name FROM `results` INNER JOIN `quiz` ON results.quiz_id = quiz.id INNER JOIN `users` ON results.user = users.username";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc()){
									echo '<tr>
									<td>'.$row["name"].'</td>
									<td>'.$row["quiz_name"].'</td>
									<td>'.($row["score"]*100).'%</td>
									<td><a href="gradesdetailed.php?id='.$row['id'].'" class="button special">Detailed View</a></td>
									</tr>'; /// Link Detailed View
									}
									?>
								
							</table>
						</article>
						</div>

					</div>
				</div>
            </section>
            
		<!-- Footer -->
		<footer id="footer">
				<div class="inner">
					<div class="flex">
						
						<ul class="icons">
							<h1>Edu-learn &copy; 2020 </h1>
						</ul>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>