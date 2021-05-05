<?php 
    if ($_SESSION["type"]==0){
         /// Add Nav Options (Student)
         echo '<a href="studentgrades.php">My Grades</a>';
        
    }else {
        echo '<a href="createquiz.php">Create a Quiz</a>'; /// Add Nav Options (Teacher)
        echo '<a href="grades.php">Student Grades</a>';
    }
	echo '<a href="logout.php">Logout</a>';	
    echo '<a href="dashboard.php">Dashboard</a>'		
?>