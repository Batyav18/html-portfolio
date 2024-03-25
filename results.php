
<?php
include 'loginForm.php';
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtered Results</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" type="text/css" href="Welcome_page_style.css" />

    <script src="myScript.js"></script>
     <style type="text/css">
         h1{
            color: darkgreen;
         }
     </style>
</head>
<body>
        <header>
        <a href="#" class="name">University Picker</a>
        <nav class="nav">
            <a href="index.php">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <button id="loginBtn" class="btn btn-default">Login</button>
        </nav>
    </header>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <?php
                session_start();

                require_once('config.php');
                $conn = mysqli_connect(
                    myHost,
                    myUser,
                    myPassword,
                    myDatabase
                );

                // check the database connection
                if ($conn->connect_error) {
                    die("Connection Failed: " . $conn->connect_error);
                }


                if (isset($_SESSION['score']) && isset($_SESSION['major'])) {
                    $score = $_SESSION['score'];
                    $major = $_SESSION['major'];

                   

                    // Query to request the filtered data regarding the selected values
                    if (!empty($major)) {
                        $sql_filter = "SELECT `tbl_pred`.`ID_pred`, `tbl_uni`.`uni_name`, `tbl_major`.`major_name`, `tbl_course`.`course_name`, `tbl_pred`.`score`, `tbl_pred`.`description`
                             FROM `tbl_pred`
                             LEFT JOIN `tbl_uni` ON `tbl_pred`.`Uni` = `tbl_uni`.`ID_Uni`
                             LEFT JOIN `tbl_major` ON `tbl_pred`.`Major` = `tbl_major`.`ID_major`
                             LEFT JOIN `tbl_course` ON `tbl_pred`.`Course` = `tbl_course`.`ID_course`
                             WHERE 
                                 ('$major' = 'all' AND '$score' = 'all') ANDs
                                 ('$major' != 'all' AND `major_name`='$major') OR
                                 ('$score' != 'all' AND `score`='$score')

                                  ORDER BY `tbl_pred`.`score` DESC;";
                        $result_filter = $conn->query($sql_filter);

                        echo "<h1>Showing Results</h1>";

                        // create table with the filtered data
                        echo "<table class='table table-bordered'>";
                        echo "<thead class = 'thead-dark'><tr><th>Uni</th><th>Major</th><th>Course</th><th>Score</th><th>Description of the Major</th></tr></thead>";

                        while ($row = $result_filter->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['uni_name'] . "</td>";

                                if ($major == $row['major_name']){
                            echo "<td style='color:green'>" . $row['major_name'] . "</td>";
                        }else{
                           echo "<td style='color:black'>" . $row['major_name'] . "</td>"; 
                        }
                            echo "<td>" . $row['course_name'] . "</td>";

                            if ($score == $row['score']){
                            echo "<td style='color:green'>" . $row['score'] . "</td>";
                        }else{
                           echo "<td style='color:black'>" . $row['score'] . "</td>"; 
                        }
                            echo "<td>" . $row['description'] . "</td>";
                            echo "</tr>";
                        }

                        echo "</table>";
                    }
                }

                // disconnect database
                $conn->close();
                ?>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
