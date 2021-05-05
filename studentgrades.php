<!DOCTYPE HTML>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
	<?php 
		include_once ("base.php");
		if(!isset($_SESSION["username"])){
			header("location: login.php");
		}


		
		
		$conn = new mysqli($host, $user, $password, $db);

		if($_SESSION["type"]==1){
			header("location: dashboard.php"); /// User Validation (If user is not student return to dashboard.)
		}
	?>
	</head>
	<script>
			function myFunction() {
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
        	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Grades/Quiz Name">
		</div>
		<header class="align-center">
				<br>
				<br>
				<h2>My Grades</h2>
	</header>

        <section id="three" class="wrapper">
				<div class="inner">
					
						<div class="dashbox">
							<article>
                       	 <br>
                        	<table>
								<tr>
									<th>Quiz </th>
									<th>Score</th>
								</tr>
								
								<?php
								
								$sql = "SELECT  results.id, quiz.name AS quiz_name, results.score FROM `results` INNER JOIN `quiz` ON results.quiz_id = quiz.id WHERE results.user='$username'";
								$result = $conn->query($sql);
								while($row = $result->fetch_assoc()){
									echo '<tr class ="searchableRow">
									<td>'.$row["quiz_name"].'</td>
									<td>'.($row["score"]*100).'%</td>
									<td><a href="gradesdetailed.php?id='.$row['id'].'" class="button special">Detailed View</a></td>
								</tr>';
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