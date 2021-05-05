<!DOCTYPE HTML>
<html>
	<head>
		<title>Quiz </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
        
		<?php  /// PHP Connection
		include_once ("base.php");
		?>


	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<nav id="nav">
					<?php
                    
					?>
                    

                    </nav> 
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

        <!-- Three -->
		<section id="three" class="wrapper">
		
		<div class="inner">
		<h3>Quiz</h3>
		
		
		
		<br>
		<br>
		<div class="quizbox">					
		<article>

			<?php /// Quiz PHP Code
			
				if (isset($_POST["question_no"])){
					$questionno = intval($_POST["question_no"]);
				} else {
					$questionno = 0;
				}
				
				//get parament url
				$quiz_id = mysqli_real_escape_string($conn, $_GET["id"]);
				


            	$sql = "SELECT id, name, description, questions FROM quiz WHERE id = $quiz_id";
                $result = $conn->query($sql);
				$row = $result->fetch_object();
				$questions = json_decode($row->questions);
				
				// Result / Quiz Summary
				if ($questionno == count($questions)){
					echo "Exam Done! Your Score:";	
					echo '<br>';
					$score = 0*10;
					echo '<br>';
					

					for ($i=0; $i<$questionno; $i++) {
						$correct = $questions[$i] -> {"correct"};
						$answer = $_POST[strval($i)];
						
						

						if ($correct == $answer){
							$score++;
						}


					}

					
					$percentage = $score / count($questions);
					echo $percentage * 100;

					$sql = "INSERT INTO results (user, quiz_id, score) VALUES ('$username', $quiz_id, $percentage)";
					$conn ->query($sql);
					$result_id = $conn->insert_id;
					
					// Checks if Answer Is Correct
					for ($i=0; $i<$questionno; $i++) {
						$answer = $_POST[strval($i)];
						$correct = $questions[$i] -> {"correct"};
						if ($correct==$answer){
							$answer_correct = 1;
						}
						else{
							$answer_correct = 0;
						}
						
						$sql = "INSERT INTO answer (result_id, question_no, answer, correct) VALUES ($result_id, $i, '$answer', $answer_correct)";
						$conn ->query($sql);
					}
				} else  { 

				
					
					$question =  $questions[$questionno];
					echo '<form method = "post" action ="quiz.php?id='.$quiz_id.'">';

					for ($i=0; $i<$questionno; $i++) {
						echo '<input type="hidden" name="'.strval($i).'" value="'.$_POST[strval($i)].'">';
					}

					echo '<h1>'.$question ->{"title"}.'</h1>';
					echo '<input type = "hidden" name="question_no" value="'.strval($questionno + 1).'">';
                	$options = $question->{"options"};
					array_push($options, $question->{"correct"});
					shuffle($options);
					foreach ($options as $option){
                    	echo '<input type="radio" id="'.$option.'" name="'.strval($questionno).'" value="'.$option.'">
                    	<label for="'.$option.'">'.$option.'</label><br>';
					}
					echo '<input type = "submit"></form>';
				}
					
            ?>

		</div>

		</article> <!---Return To Dashboard Once Quiz Is Completed--->
				<?php
				if ($questionno == count($questions)){
					echo '
					<br>
					<a href="dashboard.php" class="button special">Submit and Return To Dashboard</a>
					<br>';
				}
				?>
		</div>
		 <br>

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