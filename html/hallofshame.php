<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/png"
            href="../resources/img/favicon.png" />
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/styles.css">

        <title>Dota 2</title>
        <script>
        $(function () {
            $('#navigatorbar').load('nav_bar.html')
        });
    </script>
    <?php
    include "../PHP/db.php";
    include "../PHP/utilities.php";

    ?>
    </head>

    <body>
        <div id="dota2">
            <a href="dota2.php">
                <h1>Dota 2</h1>
            </a>

            <div id="navigatorbar">

            </div>
            <div class="col-md-12">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div id="hallofshame">
                        <?php 
                        $conn = connect_to_db();
                        $sql_query = "select * from ashamed";
                        $result = $conn->query($sql_query);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['id'];
                                $name = $row['name'];
                                $bio_pic = $row['bio_pic'];
                                echo "<a href='ashamed.php?id=".$id."'>
                                        <div class='ashamed'>
                                            <div class='ashamedpic'>
                                                <img src=".$bio_pic." alt='322'>
                                            </div>
                                            <div class='ashamedname'>
                                                <h4>".$name."</h4>
                                            </div>
                                        </div>
                                    </a>";
                            }

                        } else {
                            echo "No deberias estar viendo esto";
                        }
                        ?>
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>

            </div>
        </body>

    </html>