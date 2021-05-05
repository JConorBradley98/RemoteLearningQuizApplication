<!DOCTYPE HTML>
<html>
	<head>
	<!----PHP Session Code ---->
		<?php
		
			include_once ("base.php");
		?>
		<title>Edu-Learn Dashboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <style> #inner{border-style:solid; 
        border-color: #5385c1;  }</style>
	</head>
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

			<header class="align-center">
				<br>
				<br>
				<h2>Dashboard</h2>
			</header>

        <!-- Three -->
        
        <section id="three" class="wrapper">
				<div class="inner">
					<div class="flex flex-2">
					<?php 
					$sql = "SELECT id, name, img, description FROM quiz";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
						echo '<div class="dashbox">
									<article>
								<div class="image fit">
									<img src="'.$row['img'].'" alt="Pic 02" />
								</div>
								<header>
									<h3>'.$row['name'].'</h3>
								</header>
								<p>'.$row['description'].'</p>
								<footer>
									<a href="quiz.php?id='.$row['id'].'" class="button special">Start Exam</a>
								</footer>
							</article>
							</div>';
					}
					
					
					?>
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