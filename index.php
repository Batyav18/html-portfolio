<?php

// Destroy previous session
session_start();
session_unset();
session_destroy();


// Create a new session
session_start();
$id = session_id();

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // Check if $score and $major values are not empty
    if (!empty($_GET['Score']) && !empty($_GET['Major'])) {
        // Get the filter values from combo boxes
        $score = $_GET['Score'];
        $major = $_GET['Major'];

        // Store the filter values in session variables
        $_SESSION['score'] = $score;
        $_SESSION['major'] = $major;
        // Redirect to the next page
        header("Location: results.php");
        exit;
    } 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Science IA</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" type="text/css" href="Welcome_page_style.css" />

    <script src="myScript.js"></script>
</head>
<body>


    <header>
        <a href="#" class="name">University Picker</a>
        <nav class="nav">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <button id="loginBtn" class="btn btn-default">Login</button>
        </nav>
    </header>


<div class="container">
  <div class="row">
    <div class="col">
     
<form method="GET" id="universitySelector" >
        <?php
    // connect database
    require_once ('config.php');
    $conn = mysqli_connect (
                         myHost, 
                         myUser, 
                         myPassword,
                         myDatabase
    );

    // check the database connection
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

// query to reqest the data from database
$sql = "SELECT `tbl_pred`.`ID_pred`, `tbl_uni`.`uni_name`, `tbl_major`.`major_name`, `tbl_course`.`course_name`, `tbl_pred`.`score`
FROM `tbl_pred`
LEFT JOIN `tbl_uni` ON `tbl_pred`.`uni` = `tbl_uni`.`ID_uni` 
LEFT JOIN `tbl_major` ON `tbl_pred`.`major` = `tbl_major`.`ID_major`
LEFT JOIN `tbl_course` ON `tbl_pred`.`Course` = `tbl_course`.`ID_course`;";
$result = $conn->query($sql);



// select University
$sql_uni = "SELECT DISTINCT uni_name FROM tbl_uni";
$result_uni = $conn->query($sql_uni);

// select Major
$sql_major = "SELECT DISTINCT major_name FROM tbl_major";
$result_major = $conn->query($sql_major);


// Select course
$sql_course = "SELECT DISTINCT course_name FROM tbl_course";
$result_course = $conn->query($sql_course);

// Select predicted IB score
$sql_score = "SELECT DISTINCT score FROM tbl_pred";
$result_score = $conn->query($sql_score);

// create and fill combo for Major
echo "<select name='Major' required>";
echo "<option value=''>all Majors</option>";
while($row = $result_major->fetch_assoc()) {
    echo "<option value='" . $row['major_name'] . "'>" . $row['major_name'] . "</option>";
}
echo "</select>";


// create and fill combo for predicted IB score
echo "<select name='Score' required>";
echo "<option value=''>all Predicteds</option>";
while($row = $result_score->fetch_assoc()) {
    echo "<option value='" . $row['score'] . "'>" . $row['score'] . "</option>";
}
echo "</select>";

 ?>
 <input type='submit' class='FindBtn button1' id="submitBtn" value='Find'>
  

</form>




<div id="progressIndicator" class="progress-indicator" style="display: none;">
  <i class="fas fa-spinner fa-spin fa-3x"></i>
</div>

    </div>



    <div class="col container">
     
            <div class="content">
                <h1>Welcome to University Picker</h1>
                <p>University Picker is an innovative website made specifically for International Baccalaureate(IB) students that provides Grade 12 students with university recommendations. All you have to do is select your wanted major and current predicted grade from IB, and we will do rest of the work. Give it a try!</p>
        
            </div>
        </div>
 </div>

</div> 



<div class="container">
    <section id="about">
        <div class="aboutContainer">
            <h2>About</h2>
            <p>University finder is a personalized university selection tool that helps students pick their best desired universities based on their academic profiles. This is done by you inputting your unique academic profiles such as, predicted IB grades, intended majors, and desired study locations(coming soon!). This process helps you overcome the often overwhelming procedure of selecting universities that best fit your academic achievements and career aspirations. With University Picker at your fingertips, the traditionally stressing decision-making process becomes a lot simpler, quicker, and more accessible, relieving you of stress and pressure, allowing you to effortlessly and confidently choose your best path.
             </p>
        </div>
    </section>
</div>


<div class="container">
    <section id="contact">
        <div class="contactContainer">
            <h2>Contact</h2>
            <content>If you have any questions, issues or possible feedback, you are more than welcome to contact me.

            </content>
       
        </div>
    </section>
</div>
<?php
include 'loginForm.php';
?>
  


</body>
</html>
