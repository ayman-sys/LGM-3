<?php
    include("init.php");
    
    $no_of_classes=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `class`"));
    $no_of_students=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `students`"));
    $no_of_result=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `result`"));
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="normalize.css">
    <title>Result</title>
    <style>
        .main{
            border-radius: 10px;
            border-width: 5px;
            border-style: groove;
            padding: 20px;
            margin: 7% 20% 0 20%;
        }
    </style>
</head>
<body>
        
    <div class="title">
        <a href="dashboard.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading">𝔻𝕒𝕤𝕙𝕓𝕠𝕒𝕣𝕕</span>
        <a href="logout.php" style="color: black; text-decoration:none;"><span class="fa fa-sign-out"></span> Logout</a>
    </div>

    <div class="nav">
        <ul>
            <li>
                <h2><a href="dashboard.php">𝔻𝕒𝕤𝕙𝕓𝕠𝕒𝕣𝕕</a></h2>
            </li>
            <li class="dropdown" onclick="toggleDisplay('1')">
               <h2> <a href="" class="dropbtn">ℂ𝕝𝕒𝕤𝕤𝕖𝕤 &nbsp
                    <span class="fa fa-angle-down"></span>
                </a></h2>
                <div class="dropdown-content" id="1">
                    <a href="add_classes.php">Add Class</a>
                    <a href="manage_classes.php">Manage Class</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
               <h2> <a href="#" class="dropbtn">𝕊𝕥𝕦𝕕𝕖𝕟𝕥𝕤 &nbsp
                    <span class="fa fa-angle-down"></span>
                </a></h2>
                <div class="dropdown-content" id="2">
                    <a href="add_students.php">Add Students</a>
                    <a href="manage_students.php">Manage Students</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
               <h2> <a href="#" class="dropbtn">ℝ𝕖𝕤𝕦𝕝𝕥𝕤 &nbsp
                    <span class="fa fa-angle-down"></span>
                </a></h2>
                <div class="dropdown-content" id="3">
                    <a href="add_results.php">Add Results</a>
                    <a href="manage_results.php">Manage Results</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="main">
        <?php
            echo '<p>𝐀𝐯𝐚𝐢𝐥𝐚𝐛𝐥𝐞 𝐂𝐥𝐚𝐬𝐬𝐞𝐬:'.$no_of_classes[0].'</p>';
            echo '<p>𝐑𝐞𝐠𝐢𝐬𝐭𝐞𝐫𝐞𝐝 𝐒𝐭𝐮𝐝𝐞𝐧𝐭𝐬:'.$no_of_students[0].'</p>';
            echo '<p>𝐑𝐞𝐬𝐮𝐥𝐭𝐬 𝐆𝐞𝐧𝐞𝐫𝐚𝐭𝐞𝐝:'.$no_of_result[0].'</p>';
        ?>
    </div>

    
</body>
</html>

<?php
   include('session.php');
?>