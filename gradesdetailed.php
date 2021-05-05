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

        $result_id = mysqli_real_escape_string($conn, $_GET["id"]); 


        // Student retrieves personal result (student can only acces their own results)
		if($_SESSION["type"]==0){
            $username = $_SESSION["username"];
            $sql = "SELECT COUNT(*) AS `exists` FROM results WHERE user = '$username' AND id = $result_id";
            $result = $conn->query($sql);
            $row = $result->fetch_object();


            // User Validation (If result does not associate with user they are then redirected.)

            if($row->exists==0){
                header("location: studentgrades.php"); 
            }
			
		}

		?>
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

        <!-- Three -->
		
			<section id="three" class="wrapper">
                <div class="inner">
                    <div class="dashbox">
                        <article>
                        <?php
                        
                        $sql = "SELECT quiz.name AS quiz_name, results.score, users.name FROM `results` INNER JOIN `quiz` ON results.quiz_id = quiz.id INNER JOIN `users` ON results.user = users.username WHERE results.id = $result_id";
                        $result = $conn->query($sql);
				        $row = $result->fetch_object();
                        echo "<h2>Quiz : ".$row->quiz_name."</h2>";
                        echo "<h2>Overall Score : ".($row->score*100)."%</h2>";
                        
                        ?>
                        <table>
                            <tr>
                                <th>Question Number</th>
                                <th>Answer</th>
                                <th>Correct</th>
                            </tr>

                            <?php
                           



                            $sql = "SELECT `question_no`, `answer`, `correct` FROM `answer` WHERE `result_id` = $result_id";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()){
                                echo '<tr>
                                <td>'.($row["question_no"]+1).'</td>
                                <td>'.$row["answer"].'</td>';

                                if($row["correct"]){
                                    echo '<td>Correct!</td>';
                                } else {
                                    echo '<td>Wrong!</td>';
                                }   
                                echo '</tr>';
                            }

                            ?>
                        </table>
                        <br>

							<?php
                            if($_SESSION["type"]==0){
                                echo '<a href="studentgrades.php" class="button special">Return to my grades</a>';
                            }else{
                                echo '<a href="grades.php" class="button special">Return to student grades</a>';
                            }
                            ?>
                        </article>
                    </div>
                </div>
            </section>
        </div>
            
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