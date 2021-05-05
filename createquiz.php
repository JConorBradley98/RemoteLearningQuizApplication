<!DOCTYPE HTML>
<html>
	<head>
		<title>Edu-Learn</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <style> #inner{border-style:solid; 
        border-color: #5385c1;  }</style>
        <?php 
		include_once ("base.php");
		

		///Teacher Authoirzation
		if($_SESSION["type"]==0){
			header("location: dashboard.php"); 
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
				<h3>Create a Quiz</h3>

			<div class="controlbox">
				<button onclick = "addQuestion()">Add Question</button>
				
			
		
			</div>
				
						<div class = "box">
                        <form method ="post" action="processcreatequiz.php">
						<label for="Set Quiz Title">Set Quiz Title :</label>
                            <input type="text" name="title" placeholder="Set Quiz Title" required>
							<hr>
						<label for="Set Description">Set Description :</label>
                            <input type="text" name="description" placeholder="Set Description" required>
							<hr>
						<label for="Set Image URL">Image URL (Optional)</label>
							<input type ="text" name="image" placeholder="Set Image URL">
							<hr>
							<input onclick="quizSubmitted()" type="submit">
							<hr>
                            <div id ="questions">
                            
							
                            
                        </form>
                        
						
                        <script>
							function quizSubmitted() {
							alert("Quiz Submitted Succesfully!");
						}

						


						counter = 0;
	
						function addOption(questionno){
							//answer = "<input type = 'text' name='answer"+questionno+"[]' placeholder ='Enter Option'>";
							//document.getElementById(questionno + "-questions").innerHTML +=answer;
							answer = document.createElement("input");
							answer.setAttribute("type","text");
							answer.setAttribute("name","answer"+questionno + "[]" );
							answer.setAttribute("placeholder","Enter Option");
							answer.required=true;
							document.getElementById(questionno+"-questions").appendChild(answer);

						}
					

                        function addQuestion(){
							addoptionbtn = "<hr><button type='button' onclick = 'addOption("+counter+")'>Add Option</button>";
							question = "<input type='text' name='question"+counter+"' placeholder='Enter Question' required>";
							correctanswer = "<input type ='text' name ='correctanswer"+counter+"' placeholder='Enter Correct Answer' required>";
							newquestion = document.createElement("div");
							newquestion.setAttribute("id",counter);
							newquestion.innerHTML = question + correctanswer;
							questionsection = document.createElement("div");
							questionsection.setAttribute("id", counter+"-questions");
							newquestion.appendChild(questionsection);
							document.getElementById("questions").appendChild(newquestion);
							addOption(counter);
							addOption(counter);
							document.getElementById(counter).innerHTML+=addoptionbtn+"<hr>";
							counter += 1;
							
							alert("Question Added!");
							
							
							
                        }
                         
                        
                        </script>
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